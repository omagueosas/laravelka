<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Controller1 extends Controller 
{ 
	public function catalog()
	{
		return view('catalog');
	}

	public function aboutus()
	{
		return view('aboutus');
	}

	public function tofindus()
	{
		return view('tofindus');
	}
}
