<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandReq;
use App\Http\Requests\CategReq;
use App\Http\Requests\ProdReq;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    public function admin(){
        return view('Admin.panel');
    }

    public function brands(){
        $brands = Brands::all();
        return view('Admin.brands', ['brands' => $brands]);
    }

    public function prods(){
        $products = Products::all();
        return view('Admin.products', ['products' => $products]);
    }

    public function cats(){
        $categories = Categories::all();
        return view('Admin.categories', ['categories' => $categories]);
    }

    public function brandCr(){
        return view('Admin.brandsCr');
    }

    public function prodCr(){
        $brands = Brands::all();
        $categories = Categories::all();
        return view('Admin.productsCr', 
        [
            'categories' => $categories,
             'brands' => $brands            
    ]);
    }

    public function catCr(){
  
        return view('Admin.categoriesCr');
    }


    public function brandUp($id){
        $brand = Brands::findOrFail($id);
        //dd($brand);
        return view('Admin.brandUp',['brand'=> $brand]);
    }

    public function prodUp($id){
        $product = Products::findOrFail($id);
        $brands = Brands::all();
        $categories = Categories::all();
        return view('Admin.productUp', 
        [
            'product'=> $product,
            'categories' => $categories,
            'brands' => $brands            
    ]);
    }

    public function catUp($id){
        $category = Categories::findOrFail($id);  
        return view('Admin.categoryUp', ['category'=> $category]);
    }


    public function brandPost(Request $request){
        //$request->validated();

        $name = $request->input('name');
        $img = time(). '_'. $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('img'), $img);

        Brands::create([
            'Title'=>$name,
            'Image'=>$img
        ]);

        return redirect(route('brandList'));
    }

    public function catPost(Request $request){
        //$request->validated();

        $name = $request->input('name');

        Categories::create([
            'Name'=>$name,
        ]);

        return redirect(route('catList'));
    }

    public function prodPost(Request $request){
        //$request->validated();

        Products::create([
            'Name'=>$request->input('name'),
            'Price'=>$request->input('price'),
            'CategId'=>$request->input('cat'),
            'BrandId'=>$request->input('brand')
        ]);

        return redirect(route('prodList'));
    }

    public function brandEdPost(BrandReq $request){
        $request->validated();
        
        $img = time().'_'. $request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('img'), $img);

        Brands::findOrFail($request->input('id'))->update([
            'Title'=> $request->input('name'),
            'Image'=> $img
        ]);

        return redirect(route('brandList'));
    }

    public function prodEdPost(Request $request){

        Products::findOrFail($request->input('id'))->update([
            'Name' => $request->input('name'),
            'Price' => $request->input('price'),
            'CategId' => $request->input('cat'),
            'BrandId' => $request->input('brand')
        ]);

        return redirect(route('prodList'));
    }

    public function catEdPost(Request $request){
        Categories::findOrFail($request->input('id'))->update([
            'Name' => $request->input('name')
        ]);

        return redirect(route('catList'));
    }

    public function brandDel($id){
        Brands::findOrFail($id)->delete();
        return redirect(route('brandList'));
    }

    public function prodDel($id){
        Products::findOrFail($id)->delete();
        return redirect(route('prodList'));
    }

    public function catDel($id){
        Categories::findOrFail($id)->delete();
        return redirect(route('catList'));
    }
}
