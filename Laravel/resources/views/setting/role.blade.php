<?php
$main_path = Request::segment(1);
loadHelper('akses'); 
$list_group_menu = DB::table('menu')
					->select('id_menu as value','nama_menu as text')
					->where('id_menu_induk','0')->orderby('urutan','asc')->get();

?>
@extends('main')
@section('content')
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="row">
      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">Tabel Daftar Menu</h3>
       </div> 
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"></h4>
        <p class="card-description">

          @if(ucc())
          <button class="btn btn-info" data-toggle="modal"  data-target="#modal">Tambah Menu</button>
          @endif
          
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Url</th>
                <th>ID Menu</th>
                <th>ID Menu Induk</th>
              </tr>
            </thead>
            <tbody>              
              @foreach ($menu as $mn )
              <tr>
                  <td>{{ $mn->id_menu }}</td>
                  <td>{{ $mn->nama_menu }}</td>
                  <td>{{ $mn->url }}</td>
                  <td>{{ $mn->id_menu_induk }}</td>
                  <td>{{ $mn->urutan }}</td>                      
              </tr>
              @endforeach          
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> 
</div>

@endsection 
@section("modal")
<div class="modal fade" tabindex="-1" id="modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Menu</h5>
      </div>
      {!! Form::bsOpen('form-tambah',url($main_path."/add")) !!}     
      <div class="modal-body">
        {!! Form::bsTextField('Id','id_menu')!!}
        {!! Form::bsTextField('Nama ', 'nama_menu')!!}
        {!! Form::bsTextField('Url ', 'url')!!}
        {!! Form::bsTextField('Id Induk', 'id_menu_induk')!!}       
        {!! Form::bsTextField('Urutan','urutan')!!}       
        {{ Form::bsHidden('uuid','') }}
      </div>
      <div class="modal-footer">
      {!! html::mCloseSubmit() !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
  
</script>
@endsection
