<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
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

	public function auth()
	{
		return view('layouts.app');
	}

	public function comics() 
	{
        $t = DB::table('comics')->get();
        return view('catalog', ['arr'=>$t]);
    }

	public function comicsid($id) 
	{
        $t = DB::table('comics')->where('id', $id)->get();
        return view('comics', ['arr'=>$t]);
    }

	public function comics1()
	{
		return view('comics');
	}

}
