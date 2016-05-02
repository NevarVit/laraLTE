<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MoneyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }/*
    * Первый метод
    * */


    public function index(){
        return view('money.index');
    }
}