@extends('layout.main')
@section('isiKonten')
<body>
    
    <form method="post" action="/pejabat/{{$pejabat->id}}/update" enctype="multipart/form-data" >
    {{csrf_field()}}

        <div class="form-group"> <h2>Edit Data pejabat</h2> 
            
                <label>Nomor Induk Pegawai</label>
                    <input type=" text" value="{{$pejabat->nip_pejabat}}" name="nip_pejabat" class="form-control" placeholder="Nomor Induk Pegawai" >
            <br>
                <label>Nama Lengkap</label>
                    <input type="text" value="{{$pejabat->nama_pejabat}}" name="nama_pejabat" class="form-control" placeholder="Masukan Nama Lengkap">    
            <br>
                    <label>Pilih Kategori</label>
                <select name="kategori_pejabat" class="form-control" >
                    <<option value="Pelayanan" @if($pejabat->kategori_pejabat=='Pelayanan') selected @endif</option>Pelayanan</option>
                        <<option value="Infrastruktur" @if($pejabat->kategori_pejabat=='Infrastruktur') selected @endif</option>Infrastruktur</option>
                    <option value="Lingkungan" @if($pejabat->kategori_pejabat=='Lingkungan') selected @endif>Lingkungan</option>
                </select>
            <br>
                <label>Pilih Jabatan</label>   
                <select name="jabatan" class="form-control" >
                    <<option value="Kepala Dinas" @if($pejabat->jabatan=='Kepala Dinas') selected @endif</option>Kepala Dinas</option>
                        <<option value="Kepala Bidang" @if($pejabat->jabatan=='Kepala Bidang') selected @endif</option>Kepala Bidang</option>
                        <option value="Seksi" @if($pejabat->jabatan=='Seksi') selected @endif>Seksi</option>
                    <option value="Operator" @if($pejabat->jabatan=='Operator') selected @endif>Operator</option>
                </select>   
            <br>
                <label>Telepon </label>
                    <input type="text" value="{{$pejabat->telepon_pejabat}}" name="telepon_pejabat" class="form-control" placeholder="08xxxxxxx">
            <br>
                    <label>Email</label>
                <input type="email" value="{{$pejabat->email_pejabat}}" name="email_pejabat" class="form-control" placeholder="Masukan Email Anda"disabled>
            <br>
                <label>Password</label>
                    <input type="password" value="{{$pejabat->password}}" name="password" class="form-control" placeholder="Masukan Password Anda"disabled>
            <br>
                <label>Avatar</label>
                    <input type="file" name="avatar_pejabat" class="form-control">
            <br>
                <button type="submit" class="btn btn-warning" >Update</button>
            
        </div>
    </form> 
</body>


@stop  