<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
public function getIndex($id=null){
	$text=Maintext::where('url', id)->first();
	return view('index')->with('text' $text);
	}
}
