@extends('layout.main')
@section('isiKonten')
<body>
        <form method="post" action="/pengadu/{{$pengadu->id}}/update" enctype="multipart/form-data" >
        {{csrf_field()}}
            <div class="form-group"> <h2>Edit Data Pengadu</h2> 
            
                <label>NIK</label>
                <input type=" text" value="{{$pengadu->nik_pengadu}}" name="nik_pengadu" class="form-control" placeholder="Nomor Induk Kewarganegaraan" disabled><br>

                <label>Nama Lengkap</label>
                <input type="text" value="{{$pengadu->nama_pengadu}}" name="nama_pengadu" class="form-control" placeholder="Masukan Nama Lengkap"disabled><br>

                <label>Pilih Kategori</label>
                <select name="kategori_pengadu" class="form-control" disabled>
                    <<option value="Perorangan" @if($pengadu->kategori_pengadu=='Perorangan') selected @endif</option>Perorangan</option>
                    <option value="Kelompok Masyarakat" @if($pengadu->kategori_pengadu=='Kelompok Masyarakat') selected @endif>Kelompok Masyarakat</option>
                </select><br>   
                
                <label>Alamat</label>
                <textarea name="alamat_pengadu" value="{{$pengadu->alamat_pengadu}}" class="form-control" rows="3">{{$pengadu->alamat_pengadu}}</textarea><br>
                
                <label>Telepon </label>
                <input type="text" value="{{$pengadu->telepon_pengadu}}" name="telepon_pengadu" class="form-control" placeholder="08xxxxxxx"><br>
                
                <label>Email</label>
                <input type="email" value="{{$pengadu->email_pengadu}}" name="email_pengadu" class="form-control" placeholder="Masukan Email Anda"disabled><br>
                
                <label>password</label>
                <input type="password" value="{{$pengadu->password}}" name="password" class="form-control" placeholder="Masukan Password Anda"disabled> <br>
                
                <label>Avatar</label>
                <input type="file" name="avatar_pengadu" class="form-control"><br>
                
                <button class="btn btn-warning" type="submit" >Update</button>
                
            </div> 
        </form> 
    </body>
@stop
