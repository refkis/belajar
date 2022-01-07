@extends('layout.main')
@section('isiKonten')



<h1>{{$aduan->judul_aduan}}</h1>
    <label   label>Diposting oleh <a href="/pengadu/{{$aduan->user->pengadu->id}}/detail"><b>
        {{$aduan->user->pengadu->nama_pengadu}}</b></a></label>     
        
            <label>Kategori : {{$aduan->kategori_aduan}}</label> <br>
    <img src="{{$aduan->getFoto()}}" width="350" height="150">
    <p>{{$aduan->detail_aduan}}</p> 
    <hr> 
   

 
<h1>Riwayat Aduan</h1> <hr>

<div class="dashboard-section">
    <div class="row" >                       
        <div class="table-responsive">
            <div class="section-heading clearfix">
              <table class="table table-striped no-margin">             
                <thead>        
                        <tr>
                            <td>Status</td>
                            <td>Tanggal</td>
                            <td>Penanggung Jawab</td>                           
                            <td>Keterangan</td>
                        </tr>
                        <tr> 
                            <td>Diterima</td>
                            <td>{{$aduan->created_at->format('d M Y')}}</td>
                            <td><a href="/pengadu/{{$aduan->user->pengadu->id}}/detail">{{$aduan->user->pengadu->nama_pengadu}}</td> </a>
                                  
                            <td>Aduan Masuk</td>
                            
                        </tr>
                </thead>
                <tbody>
                            @foreach($aduan->status()->orderBy('created_at','asc')->get() as $status)
                        <tr>
                            <td>{{$status->kategori_status}}</td>
                            <td>{{$status->created_at->format('d M Y')}}</td>
                            <td>{{$status->user->pejabat->nama_pejabat}}</td>                        
                            <td>{{$status->isi_status}}</td> 
                        </tr>
                            @endforeach
                    </tbody>            
                </table>
            </div>
        </div>
    </div>
</div>
    
   @if(session('sukses'))
        <div class="alert toast-success">
        {{session('sukses')}}
        </div>
        @endif   
   
</html>

@stop


        
