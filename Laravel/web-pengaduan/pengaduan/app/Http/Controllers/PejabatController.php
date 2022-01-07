<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Pejabat;
use App\User;


class PejabatController extends Controller
{
    public function index(Request $request) {
     
        $pejabat = Pejabat::all();
        return view('pejabat.index', compact('pejabat'));

        
    }

    public function store(Request $request) {
        alert()->warning('WarningAlert','Lorem ipsum dolor sit amet.');
        $validatedData = $request->validate([
            'nip_pejabat' => 'required|numeric|min:12',
            'nama_pejabat' => 'required',
            'telepon_pejabat' => 'required|numeric|min:6',
            'email_pejabat' => 'required|email|',
            'password' => 'required|min:6', 
            'avatar_pejabat' => 'mimes:jpg,jpeg,png',            
        ]);

        //insert ke tabel user
        $user = new User;
        $user->level = 'pejabat';
        $user->name = $request->nama_pejabat;
        $user->email = $request->email_pejabat;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table pejabat
        $request->request->add(['user_id' => $user->id]);
        $pejabat = pejabat::create($request->all());
        if ($request->hasFile('avatar_pejabat')) {
            $namagambar= rand(11111, 99999) . '_' .  $request->file('avatar_pejabat')->getClientOriginalName();
            $request->file('avatar_pejabat')->move('images/',$namagambar);
            $pejabat->avatar_pejabat=$namagambar;
        }
            $pejabat->password = bcrypt($request->password);
            $pejabat->save();
        
        return redirect('/pejabat')->with('sukses','Data Berhasil Ditambahkan');
    }

    public function edit($id) {
        $pejabat = Pejabat::findOrFail($id);
        return view('pejabat.edit',compact('pejabat'));
    }

    public function update(Request $request,$id) {
        // dd($request->all());
            $pejabat = Pejabat::findOrFail($id);
            $pejabat->update($request->all());
            if($request -> hasFile('avatar_pejabat')){
                $namagambar= rand(11111, 99999) . '_' .  $request->file('avatar_pejabat')->getClientOriginalName();
                $request->file('avatar_pejabat')->move('images/',$namagambar);
                $pejabat->avatar_pejabat=$namagambar;
                $pejabat->save();
            }
           return redirect('/pejabat')->with('sukses','Data Berhasil Diupdate');  
        }
    
    public function profil(pejabat $pejabat) {
        return view('pejabat.profil',compact('pejabat'));
    }

    public function delete($id) {
        
        $pejabat = pejabat::findOrFail($id);
             // $user = User::'user_id'=$pejabat;
             // dd($user);
             // $user->delete();
        $pejabat->delete();
       
        return redirect('/pejabat')->with('sukses','Data Berhasil Dihapus');
     }

}
