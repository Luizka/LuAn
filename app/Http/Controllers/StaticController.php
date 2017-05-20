<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
use App\Http\Requests;

class StaticController extends Controller
{
public function getIndex($id=null){


	$text=Maintext::where('url', $id)->first();
	//dd($text);
	return view('static')->with('text', $text);
	}
}
