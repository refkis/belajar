<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Pengadu;
use App\User;
use App\Pejabat;
Use Auth;


class PengaduController extends Controller
{
    public function store(Request $request) {
        
        $validatedData = $request->validate([
            'nik_pengadu' => 'required|numeric|unique:pengadu|min:12',
            'nama_pengadu' => 'required',
            'alamat_pengadu' => 'required',
            'telepon_pengadu' => 'required|numeric|min:6',
            'email_pengadu' => 'required|email|unique:pengadu',
            'password' => 'required|min:6', 
            'avatar_pengadu' => 'mimes:jpg,jpeg,png',           
        ]);

        //insert ke tabel user
        $user = new User;
        $user->level = 'pengadu';
        $user->name = $request->nama_pengadu;
        $user->email = $request->email_pengadu;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table pengadu
        $request->request->add(['user_id' => $user->id]);
        $pengadu = Pengadu::create($request->all());
        if ($request->hasFile('avatar_pengadu')) {
            $namagambar= rand(11111, 99999) . '_' .  $request->file('avatar_pengadu')->getClientOriginalName();
            $request->file('avatar_pengadu')->move('images/',$namagambar);
            $pengadu->avatar_pengadu=$namagambar;
            $pengadu->password = bcrypt($request->password);
            $pengadu->save();
        //setelah lgsung otomatis login dan menuju dashboard
        }   
        auth::loginUsingId($user->id); 
        return redirect('/dashboard')->with('Sukses','Pendaftaran Berhasil');
    }

    public function index(Request $request) {
        $pengadu = Pengadu::all();
        return view('pengadu.index', compact('pengadu'));
    }

    public function detail(pengadu $pengadu) {
        return view('pengadu.detail',compact('pengadu'));
    }

    public function edit($id) {
        $pengadu = Pengadu::findOrFail($id);
        return view('pengadu.edit',compact('pengadu'));
    }

    public function update(Request $request,$id) {
    
        $pengadu = Pengadu::findOrFail($id);
        $pengadu->update($request->all());
        if($request -> hasFile('avatar_pengadu')){
            $namagambar= rand(11111, 99999) . '_' .  $request->file('avatar_pengadu')->getClientOriginalName();
            $request->file('avatar_pengadu')->move('images/',$namagambar);
            $pengadu->avatar_pengadu=$namagambar;
            $pengadu->save();
        }
        if(auth()->user()->level =='admin' or 'pejabat'){
       return redirect('/pengadu')->with('sukses','Data Berhasil Diupdate'); }
       
        if(auth()->user()->level =='pengadu'){
       return redirect('/dashboard')->with('sukses','Data Berhasil Diupdate'); }
        
    }

    //rencana 1 klik 2 tuk hapus 2 data di tabel pengadu dan tabel user, baru 1 yg ketemu
    public function delete($id) {
       $pengadu = Pengadu::findOrFail($id);
            // $user = User::'user_id'=$pengadu;
            // dd($user);
            // $user->delete();
       $pengadu->delete();
       return redirect('/pengadu')->with('sukses','Data Berhasil Dihapus');
    }

    public function profil($id) {
       $pengadu = Pengadu::findOrFail($id);
        return view('pengadu.profilsaya',compact('pengadu'));  
    }


    
}
