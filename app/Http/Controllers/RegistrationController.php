<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistrationController extends Controller
{
   public function create()
   {
   	$cities = City::all()->toArray();
   	return view('registration.user' , compact('cities'));
   }

   public function store(){
    	$this->validate(request(), [
   		'name' => 'required|string|max:50',
  		'password' => 'required|max:32',
    	'city' => 'required|string',
    	'gender' => 'required'

    	]);

   $name = request()->input('name');
   $password = bcrypt(request()->input('password'));
   $city = request()->input('city');
   $gender = request()->input('gender');
    	

   $user =  User::create(['name' => $name, 'password' => $password, 'city' => $city, 'gender' => $gender]);
  


   	



   }
   

  
}

