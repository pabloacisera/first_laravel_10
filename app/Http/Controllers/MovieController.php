<?php

namespace App\Http\Controllers;

/*
para utilizar faztapp usamos Illuminate\Support\Facades
* 
*/
use Illuminate\Http\Request;
// use app\Models\Film
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //
    public function index()
    {
      // Film::all()
      // Ademas del metodo anterior puede utilizarse
      $films = DB::table('film')->get();
      
      return view('movies.index', ['movies'=>$films]); // otra forma es agregar al array denro de ->with()
    }
}
