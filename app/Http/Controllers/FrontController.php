<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Movie;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth',['only' => 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
      return view('contacto');
    }

    public function reviews()
    {
      $movies = Movie::Movies();
      return view('reviews', compact('movies'));

    }

    public function admin()
    {
      return view('admin.index');
    }


}
