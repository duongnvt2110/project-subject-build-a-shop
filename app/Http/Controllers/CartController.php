<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Schema;
use App\chitietsp;
use App\donhang;
use App\chitietdonhang;
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
    public function checkout(Request $req)
    {
        if(Session::has('cart'))
        {      
            $cart=Session::get('cart');
            $name=$req->post('name');
            $adress=$req->post('address');
            $phone=$req->post('number');
            if (Schema::hasTable('donhang') and Schema::hasTable('chitietdonhang'))
            {
                donhang::insert([
                    'Ten'=>$name,
                    'Diachi'=>$adress,
                    'SDT'=>$phone,
                    'TongTien'=>$cart->totalPrice
                ]);
                $count=donhang::select('IDDH')->orderby('IDDH','DESC')->first();
                foreach ($cart->items as $item)
                {
                    chitietdonhang::insert([
                        'IDDH'=>$count['IDDH'],
                        'TenSP'=>$item['item']['TenSP'],
                        'SL'=>$item['qty']
                    ]);                   
                }    
            }
            session()->flush();
            return Redirect('index');
    }
    }
}