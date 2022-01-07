@extends('layout.main')
@section('isiKonten')
<div class="dashboard-section">
        <div class="row" >                       
            <div class="table-responsive">
                <div class="section-heading clearfix">
                    <h2 class="section-title"><i class="fa fa-bell-o"></i> Data aduan</h2>
                   
                    </div><table class="table-hover table table-striped no-margin">             
                        <thead>
                        <tr>
                <td>Judul Aduan</td>                    
                <td>Nama Pengadu</td>                    
                        <td>Tanggal Aduan</td>
                    <td>Status Aduan</td>
                    <td>Riwayat Aduan</td>             
             </tr>
        </thead>
        <tbody>
            @foreach($aduan as $aduan)
            <tr>               
                <td><a href="/aduan/{{$aduan->id}}/detail">{{$aduan->judul_aduan}}</a></td>
                <td><a href="/pengadu/{{$aduan->user->pengadu->id}}/detail">{{$aduan->user->pengadu->nama_pengadu}}</a></td>
                        <td>{{$aduan->created_at}}</td>
                        @forelse($aduan->status()->orderBy('created_at','desc')->take(1)->get() as $status)  
                                    @if($status->kategori_status == 'Selesai')
                                <td><label class="label label-success" >{{$status->kategori_status}}</td></label> 
                                    
                                    @elseif($status->kategori_status == 'Diverifikasi')
                                <td><label class="label label-info" >{{$status->kategori_status}}</td></label> 
                                   
                                    @elseif($status->kategori_status == 'Diproses')
                                <td><label class="label label-info" >{{$status->kategori_status}}</td></label> 
                                 
                                    @elseif ($status->kategori_status == 'Ditolak')
                                <td><label class="label label-danger" >{{$status->kategori_status}}</td></label> 
                                    @endif
                                @empty
                                <td><label class="label label-warning">Belum Ditanggapi</label></td>
                                @endforelse
                        <td><a href="/aduan/{{$aduan->id}}/riwayat">Detail</a></td> 
                </tr>
                @endforeach  
              </tbody>            
            </table>
        </div>
    </div>
</div>
@if(session('sukses'))
    <div id="toast-container" class="toast-bottom-right">
        <div class="toast toast-success" aria-live="polite" style="display: block;">
            <button type="button" class="toast-close-button" role="button"></button>        
            <div class="toast-message">Data berhasil diperbarui</div>
        </div>
    </div>
    @endif
@stop
    @section('script')
    <script>
        $("document").ready(function() {
               $("#toast-container").trigger('click');
            });
        // yang di klik          
        $('#toast-container').on('click', function() {                            
                $('#toast-container').fadeOut(4000);                            
            });    
      
    </script>
    @stop

