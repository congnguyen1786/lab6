<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class QuanTriTinController extends Controller
{
  

public function __construct()
{
    $this->middleware('auth');
}

public function index()
{
    return "Chào quản trị viên " . Auth::user()->name;
}

}
