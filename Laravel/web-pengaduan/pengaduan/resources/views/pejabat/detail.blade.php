@extends('layout.main)
@section('isiKonten')
<body>
    <div class="content">
        <img src="{{$pejabat->getAvatar()}}" width="100" height="100">
            <h2>{{$pejabat->nama_pejabat}}</h2>
                <label>NIK :{{$pejabat->nip_pejabat}}</label><br>
                    <label>Kategori : {{$pejabat->jabatan}}</label><br>
                <label>Kategori : {{$pejabat->kategori_pejabat}}</label><br>
            <label>Telepon : {{$pejabat->telepon_pejabat}}</label><br>
        <label>Email : {{$pejabat->email_pejabat}}</label><br>
    </div>       
</body>
@stop                          
                           
