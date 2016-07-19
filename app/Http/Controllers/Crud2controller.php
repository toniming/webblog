<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
use Redirect;
Use View;

class Crud2controller extends Controller
{
    public function submit(){

    $data = array(
    	'nama' => Input::get('nama'),
    	'email' => Input::get('email'),
    	'comment' => Input::get('comment'),
    );

    DB::table('movie-star')->insert($data);
    return Redirect::to('/webblogdetail');
   	}

	 public function webblogdetail(){

		$data = DB::table('movie-star')->get();

		return View::make('/webblogdetail')->with('moviestar',$data);
	 }
}
