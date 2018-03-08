<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\chitietsp;
use App\cart;
use Session;
class CartController extends Controller
{
	public function cart()
    {
        return view('view.cart');
  	}
  	public function getAddtoCart(Request $req,$id){
        $product = chitietsp::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return Redirect('duongda');
    }
    public function emtycart(){
        session()->flush();
        return Redirect('cart');
    }
    public function removeitem($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return Redirect('cart');
    }
}
