<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\OtzivRequest;
use App\Otziv;

class OtzivController extends Controller
{
    public function getIndex(){
		$all=Otziv::where('showhide', 'show')->orderBy('id', 'DESC')->paginate(15);
		
		return view('otziv')->with('all', $all);
	}
	
	public function postIndex(OtzivRequest $r){
		$arr=$r->all();
		unset($arr['_token']);
		Otziv::create($arr);
		return redirect('otzivy');
	}
}
