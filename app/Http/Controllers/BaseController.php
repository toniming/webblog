<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use View;

class BaseController extends Controller
{
     public function viewJudul() {  
		return View::make('toni'); 
	 }
	 public function profile($id){
		return view('user.profile', ['user' => User::findOrFail($id)]);
	 }
	 public function toni() {  
		return View::make('toni2'); 
	 }
	 public function crud(){
		 return View::make('home');
	 }

	 public function webblog(){
	 	return View::make('webblog');
	 }

	 public function webbloglist(){
	 	return View::make('webbloglist');
	 }

	 public function webblogdetail(){

		$data = DB::table('siswa')->get();

		return View::make('/webblogdetail')->with('siswa',$data);
	 }
}