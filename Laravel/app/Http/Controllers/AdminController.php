<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Datatables;
use Crypt;
use Auth;
use Image;

class AdminController extends Controller
{
    function index(){
    	 
    	 return view('admin.index');
    }

    
}
 