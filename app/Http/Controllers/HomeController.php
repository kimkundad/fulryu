<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cat = DB::table('products')->select(
            'products.*',
            'products.id as id_p'
            )
            ->where('products.pro_status', 1)
            ->get();


      $data['objs'] = $cat;

        return view('welcome', $data);
    }

    public function product($id){

      $img_all = DB::table('galleries')->select(
          'galleries.*'
          )
          ->where('pro_id', $id)
          ->get();

          $data['img_all'] = $img_all;

      $related = DB::table('products')->select(
            'products.*',
            'products.id as id_p'
            )
            ->where('products.pro_status', 1)
            ->get();


      $data['related'] = $related;

      $cat = DB::table('products')->select(
            'products.*',
            'products.id as id_p',
            'products.created_at as create',
            'categories.*'
            )
            ->leftjoin('categories', 'categories.id',  'products.pro_category')
            ->where('products.id', $id)
            ->first();


      $data['objs'] = $cat;

      return view('product', $data);
    }
}
