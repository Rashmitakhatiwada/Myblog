<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
	protected $table='category';
   public function index()
    {
        $cat=\App\Model\Category::all();
        $cat= DB::select('select * from category');
        $blogs= DB::select('select * from blog');
        return view('front.home.index',['cat'=> $cat], compact('blogs'));

    } 
}
