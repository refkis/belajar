@extends('layout.main')
@section('isiKonten')

    <div class="dashboard-section">           
        <div class="row">
            <div class="table-responsive">
                <div class="section-heading clearfix">
                <h2 class="section-title"><i class="fa fa-user-circle-o"></i> Data Pengadu</h2>
                    <table id="pengaduDatatables" class="table-hover table table-striped no-margin">
                        <thead>                            
                            <tr>
                                <td>NIK </td>
                                <td>Nama Lengkap </td>
                                <td>Kategori </td>
                                <td>Alamat </td>
                                <td>Telepon</td>
                                <td>Email</td>
                                <td></td>
                                @if(auth()->user()->level =='admin')
                                <td>AKSI</td>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengadu as $pengadu)
                            <tr>
                                <td>{{$pengadu->nik_pengadu}}</td>
                                <td><a href="/pengadu/{{$pengadu->id}}/detail">{{$pengadu->nama_pengadu}}</a></td>
                                <td>{{$pengadu->kategori_pengadu}}</td>
                                <td>{{$pengadu->alamat_pengadu}}</td>
                                <td>{{$pengadu->telepon_pengadu}}</td>
                                <td>{{$pengadu->email_pengadu}}</td>
                                @if(auth()->user()->level =='admin')
                                <td><a class="btn btn-warning btn-sm" href="/pengadu/{{$pengadu->id}}/edit" >Edit</a></td>
                                <td><a  class="btn btn-danger btn-sm hapus" href="#" pengaduId="{{$pengadu->id}}" >Hapus</a></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>           
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
            $('#pengaduDatatables').DataTable();
           $("#toast-container").trigger('click');   
            });
        // yang di klik          
        $('#toast-container').on('click', function() {                            
                $('#toast-container').fadeOut(4000);                            
            });  
        $('.hapus').on('click', function(){

               var pengaduId = $(this).attr('pengaduId');
               swal({
                    title: "Apakah anda yakin?",
                    text: "Pengadu dengan ID "+pengaduId+" akan dihapus?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {

                        window.location="/pengadu/"+pengaduId+"/delete";
                        
                        }
                    });              
            });      
    </script>
@stop