<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khuyenmai;
use App\chitietsp;
class HomeController extends Controller
{
   public function getIndex()
   {
   		$khuyenmai=khuyenmai::all();
   		$new_product=chitietsp::where('Noibat','=',0)->get();
   		$best_product=chitietsp::where('Noibat','=',1)->get();
   		$instgram_product=chitietsp::where('Noibat','=',2)->get();
   		// print_r($new_product);
   		// exit;
   		// return view('view.home',['km'=>$khuyenmai]);
   		return view('view.home',compact('khuyenmai','new_product','best_product','instgram_product'));
   }
}
