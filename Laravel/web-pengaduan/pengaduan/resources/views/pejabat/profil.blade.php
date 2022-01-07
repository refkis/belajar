@extends('layout.main') 
@section("isiKonten")
<div class="content">
            <img src="{{$pejabat->getAvatar()}}" width="100" height="100">
            <h2>{{$pejabat->nama_pejabat}}</h2>
            <label>NIP :{{$pejabat->nip_pejabat}}</label><br>
            <label>Bidang : {{$pejabat->kategori_pejabat}}</label><br>
            <label>Jabatan : {{$pejabat->jabatan}}</label><br>
            <label>Telepon : {{$pejabat->telepon_pejabat}}</label><br>
            <label>Email : {{$pejabat->email_pejabat}}</label><br>          
            <a href="/pejabat/{{$pejabat->id}}/edit">Perbarui Profil <a>
</div>
@stop         
