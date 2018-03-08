<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietsp;
class DetailController extends Controller
{
    public function getIndex($id)
    {
    	$sp=chitietsp::where('ID',$id)->get();
    	return view('view.detail',compact('sp'));
    }
}
