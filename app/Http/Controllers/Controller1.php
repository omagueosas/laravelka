<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Controller1 extends Controller 
{ 
	public function page()
	{
		return view('catalog');
	}
}
