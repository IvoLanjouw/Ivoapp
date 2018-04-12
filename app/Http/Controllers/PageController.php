<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $user = Auth::user();
      $data['user'] = $user;

      return view('index', $data);
    }

    public function postItem(){

    }
}
