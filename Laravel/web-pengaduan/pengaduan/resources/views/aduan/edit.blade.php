@extends('layout.main')
@section('isiKonten')
<body>
    
    <form method="post" action="/aduan/{{$aduan->id}}/update" enctype="multipart/form-data" >
    {{csrf_field()}}

        <div class="form-group"> <h2>Edit Aduan</h2> 
            
                <label>Judul Aduan</label>
                    <input type="text" value="{{$aduan->judul_aduan}}" name="Judul_aduan" class="form-control" >  <br>    
          
                <label>Detail Aduan</label>
                    <textarea  name="detail_aduan" class="form-control" > {{$aduan->detail_aduan}} </textarea> <br>  
           
                <label>Pilih Kategori</label>
                <select name="kategori_aduan" class="form-control" >
                    <<option value="Pelayanan" @if($aduan->kategori_aduan=='Pelayanan') selected @endif</option>Pelayanan</option>
                        <<option value="Infrastruktur" @if($aduan->kategori_aduan=='Infrastruktur') selected @endif</option>Infrastruktur</option>
                    <option value="Lingkungan" @if($aduan->kategori_aduan=='Lingkungan') selected @endif>Lingkungan</option>
                </select>
            
            
                <label>Foto Aduan</label>
                    <input type="file" name="foto_aduan" class="form-control"><br>
                           

                <button type="submit" class="btn btn-warning" >Update</button>
            
        </div>
    </form> 
</body>


@stop  