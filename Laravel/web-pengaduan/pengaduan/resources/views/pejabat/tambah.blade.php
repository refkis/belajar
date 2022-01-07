@extends('layout.main')
@section('isiKonten')
    <div class="content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form method="post" action="/pejabat/create" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group"> <h2>Tambah Data Pejabat</h2> 
                
                    <label>NIP</label>
                    <input type=" text" name="nip_pejabat" class="form-control" placeholder="Nomor Induk Pegawai">
                <br>
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_pejabat" class="form-control" placeholder="Masukan Nama Lengkap">    
                <br>
                    <label>Pilih Kategori</label>
                    <select name="kategori_pejabat" class="form-control">
                        <option value="Pelayanan">Pelayanan</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Lingkungan">Lingkungan</option>
                    </select>   
                <br>
                    <label>Pilih Jabatan</label>
                    <select name="jabatan" class="form-control">
                        <option value="Kepala Dinas">Kepala Dinas</option>
                        <option value="Kepala Bidang">Kepala Bidang</option>
                        <option value="Seksi">Seksi</option>
                        <option value="Operator">Operator</option>
                    </select>
                <br>
                    <label>Telepon </label>
                    <input type="text" name="telepon_pejabat" class="form-control" placeholder="08xxxxxxx">
                <br>
                    <label>Email</label>
                    <input type="email" name="email_pejabat" class="form-control" placeholder="Masukan Email Anda">
                <br>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Minimal 6 Karakter">
                <br>
                    <label>Avatar</label>
                    <input type="file" name="avatar_pejabat" class="form-control">
                <br>
                   <br><button type="submit" >Submit</button><br>
                
            </div>
        </form>   
    </div>
@stop