<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coll extends Model
{
   public $fillable = [ 
	'name', 'phone', 'email', 'comment'
	];
}
