<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
 public $fillable = ['city', 'area_id'];


 public function getAllData(){
 	return $this::all();
 }
}
