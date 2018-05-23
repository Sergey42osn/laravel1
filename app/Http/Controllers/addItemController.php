<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class addItemController extends Controller
{
    public function index()
    {
    	return view('additem',[
    							'url' => 'additem',
    							'css' => '/css/additem.css'


    							]);
    }
}
