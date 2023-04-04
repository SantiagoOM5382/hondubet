<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;


class FormhdcashierController extends Controller
{
    // mostrar vista
    public function index(){
        return view('formhdcashier.index');
    }

    
    
    // send formhdcashier 
    public function send(Request $request) {

    }
}

