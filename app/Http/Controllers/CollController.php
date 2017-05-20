<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coll;
use App\Http\Requests;
use App\Http\Requests\collRequest;
class CollController extends Controller
{
    public function getIndex(){
		return view("coll");
	}  
	public function postIndex(collRequest $r){
		//dd($r->all());
		Coll::create($r->all());
		$body = "Пользователь " . $r['name']. "/n/n".
				"Phone " . $r['phone'] . "/n/n" .
				"Email " . $r['email'] . "/n/n" .
				"Comment " . $r['comment'] . "/n/n";
		mail("Luiza0897@yandex.ru", "Перезвонить пользователю сайта", $body);
		Return redirect("thankypage");
	}
}
 