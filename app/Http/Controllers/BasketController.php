<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\ProductBasket;
use App\Models\Products;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class BasketController extends Controller
{    
    public function basket(){
        $basketItems = ProductBasket::where('user_id','=', Auth::user()->id)->where('status', '=' , 0)->get();
        $wallet = Wallet::where('user_id', '=', Auth::user()->id)->first();
        $amount = 0;

        foreach ($basketItems as $item){
            $amount += ($item->product()->Price * $item->count);
        }

        return view('Home.basket', ['basketItems'=>$basketItems, 'wallet'=>$wallet, 'amount'=>$amount]);
    }

    public function addToBasket($product_id, $brand_id){
        $product = ProductBasket::where('user_id', '=', Auth::user()->id)
        ->where('product_id', '=' ,$product_id)
        ->where('status', '=', '0')
        ->first();

        if ($product) {
            $product->update([
                'count' => $product->count + 1
            ]);   
        } else {  
            ProductBasket::create([
                'product_id'=>$product_id,
                'brand_id'=>$brand_id,
                'count'=> 1,
                'user_id'=>Auth::user()->id,
                'status'=> 0
            ]); 
        }    
        return redirect()->back();
    }

    public function removeFromBasket($product_id){
        $product = ProductBasket::where('user_id', '=', Auth::user()->id)
        ->where('product_id', '=' ,$product_id)
        ->where('status', '=', '0')
        ->first();
        if($product && $product->count > 1){
            $product->update(['count' => $product->count - 1]);
        }else{
            $product->delete();
        }
        return redirect()->back();
    }

    public function delete($product_id){
        ProductBasket::where('user_id', '=', Auth::user()->id)
        ->where('product_id', '=' ,$product_id)->first()->delete();
        return redirect()->back();
    }

    public function checkout($user_id){
        $basketItems = ProductBasket::where('user_id', '=', $user_id)->where('status', '=', 0)->get();
        $wallet = Wallet::where('user_id', '=', $user_id)->first();
        $amount = 0;

        foreach ($basketItems as $item){
            $amount += ($item->product()->Price * $item->count);
        }

        if($wallet->price >= $amount){
            $wallet->update([
                'price' => $wallet->price - $amount
            ]);
            $basket = Basket::create([
                'price'=> $amount,
                'paid'=>1,
                'user_id'=>$user_id
            ]);
            
            foreach ($basketItems as $item){
                $item->update([
                    'basket_id'=>$basket->id,
                    'status'=>1
                ]);
            }
        }else{
            return 'Insufficient balance!';
        }

        return redirect()->back();
    }
    public function history(Request $basket_id){

        $baskets = Basket::where('user_id', '=', Auth::user()->id)->get();

        $products = ProductBasket::where('basket_id', '=', $basket_id)->get();
        
        return view('Home.history', ['baskets'=> $baskets, '$products'=>$products]);
    }
}
