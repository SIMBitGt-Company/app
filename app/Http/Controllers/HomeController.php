<?php

namespace MyApp\Http\Controllers;

use Illuminate\Http\Request;
use MyApp\Brand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Brand::all();

        return view('home')->with(['marcas' => $marcas]);
    }
}
