<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailReq;
use App\Mail\newsletter;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use App\Models\ProductBasket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExampleEmail;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    public function Home(Request $request)
    {
        $brands = Brands::paginate(5);
        $newBrands = Brands::orderByDesc('created_at')->limit(5)->get();
        $cats = Categories::all(); 
        $eml = $request->get('email');

        if($eml){
            Mail::to($eml)->send(new ExampleEmail());
        }
        return view('Home.home', ['brands' => $brands, 'newB'=>$newBrands, 'cats'=> $cats]);
    }

    public function search(Request $request)
    {
        $q = $request->get('q');
        $brands = Brands::where('Title','like', '%'.$q.'%')->get();
        return view('Home.search',['brands'=> $brands]);
    }

    public function def()
    {
        return view('welcome');
    }

    public function brand($id, Request $request){
        $brand = Brands::findOrFail($id);
        if($request->get('categId')){
            $products = Products::where('BrandId', '=', $brand->id)->where('CategId', '=', $request->get('categId'))->get();
        }else{
            $products = Products::where('BrandId', '=', $brand->id)->get();
        }

        return view('Home.brand', [
            'brand'=> $brand, 
            'products'=>$products,
        ]);
    }

    
    public function brandTitle($title, Request $request){
        $brand = Brands::where('Title', '=', $title)->get()->first;
        //dd($brand);

        if($request->get('categId')){
            $products = Products::where('BrandId', '=', $brand->id)->where('CategId', '=', $request->get('categId'))->get();
        }else{
            $products = Products::where('BrandId', '=', $brand->id)->get();
        }

        return view('Home.brand', [
            'brand'=> $brand, 
            'products'=>$products,
        ]);
    }

    public function category($id){
     $category = Categories::findOrFail($id);

     return view('Home.category', ['category'=>$category]);
    }

}
