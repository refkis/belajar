@extends('layout.main')
@section('isiKonten')
    

<body><h1>{{$aduan->judul_aduan}}</h1>
    <label   label>Diposting oleh <a href="/pengadu/{{$aduan->user->pengadu->id}}/detail"><b>
        {{$aduan->user->pengadu->nama_pengadu}}</b></a></label>     
        
            <label>Kategori : {{$aduan->kategori_aduan}}</label> <br>
    <img src="{{$aduan->getFoto()}}" width="350" height="150">
    <p>{{$aduan->detail_aduan}}</p> 
    <hr>    
    <form action="" method="post" style=" margin-top:10px">
        @csrf
            <input type="hidden" name="aduan_id" value="{{$aduan->id}}"> 
            <div class="form-group">
                <label for="kategori_status">Ubah Status :</label>
                    <select name="kategori_status" class="form-control"">
                        <option value="Ditolak">Ditolak</option>
                            <option value="Diverifikasi">Sedang Diverifikasi</option>
                            <option value="Diproses">Sedang Diproses</option>
                        <option value="Selesai">Selesai</option>
                    </select> <br><br>
                <label for="isi_status">Isi Detail Perubahan</label><br>
            </div>
        <textarea style="  margin-top:5px ;margin-bottom:15px" class="form-control" name="isi_status" ></textarea><br>
        <input type="submit" id="status"  value="Ubah Status"><br><a href="/aduan/masuk" >Batal</a>                 
    </form>
</body>


@stop


        
