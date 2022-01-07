<?php
use Illuminate\Support\Facades\DB;
use App\User;
use Yajra\DataTables\DataTables;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    return view('index');        
});

Route::get('/data', function () {
   return  Datatables::of(User::query())
    ->addIndexColumn()
    ->addColumn('action', function($row){

            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-warning btn-sm editProduct">Edit</a>';

            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

            return $btn;
    })
    ->rawColumns(['action'])
    ->make(true); }) ->name('data');   
    