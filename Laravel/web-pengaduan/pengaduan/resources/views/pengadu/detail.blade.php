@extends('layout.main')
@section('isiKonten')
    

<body>
    <div class="content">
        
            <img src="{{$pengadu->getAvatar()}}" width="100" height="100">
            <h4>{{$pengadu->nama_pengadu}}</h4>
            <label>NIK :{{$pengadu->nik_pengadu}}</label><br>
            <label>Kategori : {{$pengadu->kategori_pengadu}}</label><br>
            <label>Telepon : {{$pengadu->telepon_pengadu}}</label><br>
            <label>Email : {{$pengadu->email_pengadu}}</label><br>
            <label>Alamat : {{$pengadu->alamat_pengadu}}</label><br>
            <a href="/pengadu/{{$pengadu->id}}/edit">Perbarui Profil <a>
    </div>       
</body>                       
@stop


                           
