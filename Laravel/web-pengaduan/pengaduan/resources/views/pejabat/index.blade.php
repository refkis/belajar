@extends('layout.main')
@section('isiKonten')
    <div class="dashboard-section">
        <div class="row" >                       
            <div class="table-responsive">
                <div class="section-heading clearfix">
                    <h2 class="section-title"><i class="fa fa-black-tie"></i> Data Pejabat</h2>
                   <div class="right"><a href="/pejabat/tambah" class="btn btn-primary btn-sm"> Tambah</a>
                    </div><table id="pejabatDatatables" class="table table-hover table-striped no-margin"  >             
                        <thead>
                        <tr>
                            <td>NIP </td>
                            <td>Nama Lengkap</td>
                            <td>Kategori Pejabat </td>
                            <td>Jabatan </td>
                            <td>Telepon</td>
                            <td>Email</td>   
                            <td></td>   
                            <td>Aksi</td>   
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pejabat as $pejabat)
                        <tr>
                            <td>{{$pejabat->nip_pejabat}}</td>
                            <td><a href="/pejabat/{{$pejabat->id}}/detail">{{$pejabat->nama_pejabat}}</a></td>
                            <td>{{$pejabat->kategori_pejabat}}</td>
                            <td>{{$pejabat->jabatan}}</td>
                            <td>{{$pejabat->telepon_pejabat}}</td>
                            <td>{{$pejabat->email_pejabat}}</td>
                            <td><a class="btn btn-warning btn-sm" href="/pejabat/{{$pejabat->id}}/edit" ><i class="fa fa-pencil"></i></a></td>
                            <td><a class=" btn btn-danger btn-sm hapus" pejabatId="{{$pejabat->id}}" href="#"><i class="fa fa-trash-o"></i></a></td>
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
        $('#pejabatDatatables').DataTable();     
        $("#toast-container").trigger('click');
            });
        // yang di klik
        $('#toast-container').on('click', function() {                            
                $('#toast-container').fadeOut(4000);                            
            });

        $('.hapus').on('click', function(){

        var pejabatId = $(this).attr('pejabatId');
        swal({
            title: "Apakah anda yakin?",
            text: "Pejabat dengan ID "+pejabatId+" akan dihapus?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {

                window.location="/pejabat/"+pejabatId+"/delete";
                
                }
            });              
        });        
    </script>
@stop