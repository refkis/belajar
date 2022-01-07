@extends('layout.main')
@section('isiKonten')
<div class="dashboard-section">
        <div class="row" >                       
            <div class="table-responsive">
                <div class="section-heading clearfix">
                    <h2 class="section-title"><i class="fa fa-bell-o"></i> Data aduan</h2>                   
                </div>
                <table class="table-hover table table-striped no-margin" id="aduanDatatables" >             
                        <thead>
                        <tr>
                        <td> Judul  </td>                    
                        <td> Kategori  </td>                    
                        <td> Tanggal  </td>
                        <td> Status Aduan </td>
                        <td> Riwayat Aduan </td>
                        @if(auth()->user()->level =='admin')
                        <td></td>
                        <td>Aksi</td>
                        @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aduan as $aduan)
                        <tr>               
                            <td><a href="/aduan/{{$aduan->id}}/detail">{{$aduan->judul_aduan}}</a></td>
                            <td>{{$aduan->kategori_aduan}}</td>
                            <td>{{$aduan->created_at->format('d M Y')}}</td>
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
                                @if(auth()->user()->level =='admin')
                            <td><a class="btn btn-warning btn-sm" href="/aduan/{{$aduan->id}}/edit"><i class="fa fa-pencil"></i></a></td>
                            <td><a class=" btn btn-danger btn-sm hapus" aduanId="{{$aduan->id}}" href="#"> <i class="fa fa-trash-o"></i></a></td>
                                @endif
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
            <div class="toast-message">Data berhasil diupdate</div>
        </div>
    </div>
    @endif
@stop
@section('script')
    <script>
            // Auto klik saat load
$("document").ready(function() {
        $('#aduanDatatables').DataTable();

        $("#toast-container").trigger('click');
               });
        // yang di klik          
        $('#toast-container').on('click', function() {                            
                $('#toast-container').fadeOut(4000);                            
            });  
        $('.hapus').on('click', function(){

        var aduanId = $(this).attr('aduanId');
        swal({
            title: "Apakah anda yakin?",
            text: "Aduan dengan ID "+aduanId+" akan dihapus?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

                window.location="/aduan/"+aduanId+"/delete";
                
                }
            });              
});            
    </script>
@stop
