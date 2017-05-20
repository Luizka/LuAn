<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
class BaseController extends Controller
{
    public function getIndex(){
		$text=Maintext::where("url","index")->first();
		return view("index")->with("text",$text);
	}
	
}
