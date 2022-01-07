@extends('layout.main')
@section('isiKonten')
  

    <div class="dashboard-section no-margin">
        <div class="section-heading clearfix">
          <h2 class="section-title"><i class="fa fa-laptop"></i> Data Terbaru  </h2>      
        </div>
              <div class="panel-content">                     
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                          <p class="metric-inline"><i class="fa fa-user-circle-o"></i> {{$pengadu->count()}} <span>Pengadu</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="metric-inline"><i class="fa fa-bell-o"></i> {{$aduan->count()}}<span>Aduan</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="metric-inline"><i class="fa fa-comment-o"></i> {{$komentar->count()}} <span>Komentar</span></p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <p class="metric-inline"><i class="fa fa-black-tie"></i> {{$pejabat->count()}}<span>Pejabat</span></p>
                        </div>
                    </div>
              </div>  
      </div>
        @if(session('sukses'))
        <div id="toast-container" class="toast-bottom-right">
        <div class="toast toast-success" aria-live="polite" style="display: block;">
        <button type="button" class="toast-close-button" role="button">×</button>        
        <div class="toast-message">Selamat datang</div>
        </div>
        </div>
        @endif
@stop
@section('script')
  <script>
      // Auto klik saat load
      $("document").ready(function() {
  
      $("#toast-container").trigger('click');
  
      });
      // yang di klik
        
  $('#toast-container').on('click', function() {                            
              $('#toast-container').fadeOut(4000);                            
          });        
  </script>
@stop
