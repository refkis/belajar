@extends('layout.main')
@section('isiKonten')
<div class="dashboard-section">
    <div class="row" >                       
        <div class="table-responsive">
            <div class="section-heading clearfix">
                <h2 class="section-title"><i class="fa fa-bell-o"></i> Aduan untuk saya</h2>
               
                </div><table class="table-hover table table-striped no-margin">             
                    <thead>
            <tr>
                <td>Judul Aduan</td>
                    <td>Detail Aduan</td>
                        <td>Tanggal Aduan</td>
                    <td>Status Aduan</td>
                <td>Aksi</td>
             </tr>
        </thead>
        <tbody>
            @foreach($aduan as $aduan)
            <tr>               
                <td><a href="/aduan/{{$aduan->id}}/detail">{{$aduan->judul_aduan}}</a></td>
                    <td>{{ str_limit($aduan->detail_aduan, 50) }}</td>
                    {{-- <td>{{$aduan->detail_aduan}}</td> --}}
                        <td>{{$aduan->created_at->format('d M Y')}}</td>
                        @forelse($aduan->status()->orderBy('created_at','desc')->take(1)->get() as $status)                                                            
                         <td>{{$status->kategori_status}}</td>
                        @empty
                        <td>Belum Ditanggapi</td>
                        @endforelse                   

                <td><a class="btn btn-primary btn-sm" href="/aduan/{{$aduan->id}}/status">Ubah Status</a></td>
            </tr> 
          @endforeach
        </tbody>            
    </table>
</div>
</div>
</div>
@stop