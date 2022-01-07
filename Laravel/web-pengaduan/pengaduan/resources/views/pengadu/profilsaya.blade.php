@extends('layout.main')
@section('isiKonten')
<body><h2>Profil Saya</h2>


        <img src="{{auth()->user()->pengadu->getAvatar()}}" width="100" height="100">
        <h3>{{auth()->user()->pengadu->nama_pengadu}}</h3>
        <label>NIK :{{auth()->user()->pengadu->nik_pengadu}}</label><br>
        <label>Kategori : {{auth()->user()->pengadu->kategori_pengadu}}</label><br>
        <label>Telepon : {{auth()->user()->pengadu->telepon_pengadu}}</label><br>
        <label>Email : {{auth()->user()->pengadu->email_pengadu}}</label><br>
        <label>Alamat : {{auth()->user()->pengadu->alamat_pengadu}}</label><br><br>
        <a href="/pengadu/{{$pengadu->id}}/edit">Perbarui Profil Anda <a>
                   
</body>
                     

@stop                           
