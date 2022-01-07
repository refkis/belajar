<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Aduan;
use App\Komentar;
use App\Status;
use App\Pejabat;
use App\Pengadu;
use App\User;
use Datatables;

class AduanController extends Controller {

    public function beranda(Request $request) {  
            $pelayanan=aduan::where('kategori_aduan','Pelayanan') ->get();
            $infrastruktur=aduan::where('kategori_aduan','Infrastruktur') ->get();
            $lingkungan=aduan::where('kategori_aduan','Lingkungan') ->get();
             
               
        $status = status::orderBy('created_at', 'desc')->first();
        $aduan  = aduan::all();
        $aduan  = aduan::orderBy('created_at','desc')->simplePaginate(5);           
                return view('.index', [
                        'status'=>$status,
                        'aduan'=>$aduan,
                        'pelayanan' => $pelayanan, 
                        'infrastruktur' =>$infrastruktur, 
                        'lingkungan' =>$lingkungan 
                ]); 
        }

                           

    public function buat () {            
            return view('aduan.buat');}
                

    public function store (Request $request) {
            $validatedData = $request->validate([            
                'judul_aduan' => 'required',
                    'detail_aduan' => 'required',
                    'foto_aduan' => 'mimes:jpg,jpeg,png', ]);                  
                        
                        $request ->request -> add(['user_id'=>auth()->user()->id]);
                        $aduan= aduan::create($request->all());
                              if($request -> hasFile('foto_aduan')){
                                        $request->file('foto_aduan')->move('images/',$request->file('foto_aduan')->getClientOriginalName());
                                        $aduan->foto_aduan=$request->file('foto_aduan')->getClientOriginalName();
                                            $aduan->save(); }
                                                return redirect('/aduan/aduansaya')->with('sukses','Aduan Berhasil Ditambahkan');
                                                }                                            
                                                   

    public function index (aduan $aduan) {        
            $aduan = aduan::orderBy('created_at','desc')->get();
                    return view('aduan.index',compact(['aduan']));}
                 

    public function detail (aduan $aduan) {
            return view('aduan.detail',compact('aduan'));} 
        

    public function postkomentar (Request $request) {
            $request ->request -> add(['user_id'=>auth()->user()->id]);   
            $komentar = Komentar::create($request->all());       
                    return redirect()->back();}   
                

    public function masuk (Request $request) {
            $kategori= (auth()->user()->pejabat->kategori_pejabat);
            $aduan = aduan::where("kategori_aduan",$kategori)->get();           
                return view('aduan.masuk',compact('aduan'));}                  


    public function status (aduan $aduan) {
            return view('aduan.status',compact('aduan'));}  
        

    public function poststatus (Request $request) {
            $request ->request -> add(['user_id'=>auth()->user()->id]);   
            $status = Status::create($request->all());       
                return redirect('aduan/masuk'); } 
                  
    public function riwayat ($id) {
            $aduan = aduan::findOrFail($id);       
                return view('aduan.riwayat',compact('aduan'));} 

    public function edit($id) {
            $aduan = aduan::findOrFail($id);
            return view('aduan.edit',compact('aduan'));}
        
        
    public function update(Request $request,$id) {
        // dd($request->all());
            $aduan = aduan::findOrFail($id);
            $aduan->update($request->all());
            if($request -> hasFile('foto_aduan')){
                $namagambar= rand(11111, 99999) . '_' .  $request->file('foto_aduan')->getClientOriginalName();
                $request->file('foto_aduan')->move('images/',$namagambar);
                $aduan->foto_aduan=$namagambar;
                $aduan->save();
            }
            return redirect('/aduan')->with('sukses','Data Berhasil Diupdate');}  
        

    public function delete($id) {
        $aduan = aduan::findOrFail($id);                
        $aduan->delete();
        return redirect('/aduan')->with('sukses','Data Berhasil Dihapus');  }
      

    public function aduansaya(Request $request) {
            $user= (auth()->user()->pengadu->user_id);
            $aduan = aduan::where("user_id",$user)->get();
            $aduan->detail_aduan= Str::words($request->detail_aduan, 10, ' ...') ;
            
                return view('aduan.aduansaya',compact('aduan'));}

        public function getaduan(){
                $aduan = aduan::all();
                return Datatables::of($aduan)->make();


        }
                
    
    
     

}
