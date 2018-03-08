<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietsp;
use App\loaisp;
class CategoryController extends Controller
{
    public function getItemduongda()
    {
    	$sp=chitietsp::paginate(6);
    	$sp=chitietsp::where('IDSP','=',1)->paginate(6);
    	$sp_high=chitietsp::where('IDSP','=',1)->orderBy('Gia','DESC')->paginate(6);
    	$sp_low=chitietsp::where('IDSP','=',1)->orderBy('Gia','ASC')->paginate(6);
    	return view('view.duongda',compact('sp','sp_high','sp_low'));
    }
    public function getItemtrangdiem()
    {
    	$sp=chitietsp::paginate(6);
    	$sp=chitietsp::where('IDSP','=',2)->paginate(6);
    	$sp_high=chitietsp::where('IDSP','=',2)->orderBy('Gia','DESC')->paginate(6);
    	$sp_low=chitietsp::where('IDSP','=',2)->orderBy('Gia','ASC')->paginate(6);
    	return view('view.trangdiem',compact('sp','sp_high','sp_low'));
    }
}
