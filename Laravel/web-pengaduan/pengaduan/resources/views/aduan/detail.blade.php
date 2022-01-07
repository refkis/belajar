<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Aduin</title>
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Free Bootstrap Business Template">
        <meta name="author" content="The Develovers">
        <!-- CSS -->
            <link href="{{asset('/depan/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
                <link href="{{asset('/depan/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
            <link href="{{asset('/depan/assets/css/main.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/depan/assets/css/my-custom-styles.css')}}" rel="stylesheet" type="text/css">   
        <!-- GOOGLE FONTS -->
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
        <!-- FAVICONS -->
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('/depan/assets/ico/repute144x144.png')}}">
                <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('/depan/assets/ico/repute114x114.png')}}">
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('/depan/assets/ico/repute72x72.png')}}">
            <link rel="apple-touch-icon-precomposed" href="{{asset('/depan/assets/ico/repute57x57.png')}}">
        <link rel="shortcut icon" href="{{asset('/depan/assets/ico/favicon.png')}}">
    </head>
 <body>   
    <div class="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a  class="navbar-brand navbar-logo">
                        <img src="{{asset('/depan/assets/img/logo/repute-logo-nav.png')}}" alt="Aduin">
                    </a>
                </div>
                <div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="/" class="default-menu-item" >Home</a> </li>
                        <li><a href="/" class="default-menu-item" >Kontak</a> </li>
                        <li><a href="/" class="default-menu-item" >Tentang</a> </li>
                        <li><a href="/login" class="default-menu-item" >Login</a> </li>
                        @endif
                        @if (Auth::user())
                        <li><a href="/dashboard" class="default-menu-item" >Dashboard</a> </li>
                        <li><a href="/" class="default-menu-item" >Kontak</a> </li>
                        <li><a href="/" class="default-menu-item" >Tentang</a> </li>
                        <li><a href="/logout" class="default-menu-item" >Logout</a> </li>
                        @endif
                    </ul>
                </div>   
            </nav>   
        </div>   
        <section class="hero-unit-slider slider-responsive no-margin">
            <div id="carousel-hero" class="slick-carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('/depan/assets/img/sliders/slider3-h500.png')}}" class="img-responsive" alt="Slider Image">
                        <div class="carousel-caption">                           
                            <h2 class="hero-heading">Online</h2>
                            <p class="lead">Bisa dilakukan dimanapun kapanpun</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('/depan/assets/img/sliders/slider2-h500.png')}}" class="img-responsive" alt="Slider Image">
                        <div class="carousel-caption">
                            <h2 class="hero-heading">Mudah</h2>
                            <p class="lead">Tidak perlu ribet menulis manual</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('/depan/assets/img/sliders/slider1-h500.png')}}" class="img-responsive" alt="Slider Image">
                        <div class="carousel-caption">
                            <h2 class="hero-heading">Aman</h2>
                            <p class="lead">Aduan anda akan tersimpan dengan aman</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <article>
                        <div class="col-md-9">                                                          
                                <h1>{{$aduan->judul_aduan}}</h1>                                
                                <div class="meta-line clearfix">
                                    <div class="meta-author-category pull-left">
                                        <span class="post-author"> oleh <a href="#">{{$aduan->user->pengadu->nama_pengadu}}</a></span>
                                        <span class="post-category">Dibuat pada : {{$aduan->created_at}}</span>
                                            <span class="post-category">Kategori : <a href="#"> {{$aduan->kategori_aduan}}</a></span>
                                            <div class="meta-tag-comment pull-right">
                                                <span class="post-tags"><i class="fa fa-tag"></i> Status <a class="btn-danger btn-large" href="#">Ditolak</a></span>
                                            </div>
                                    </div>
                                </div>
                                <p>{{$aduan->detail_aduan}}</p>                               
                                <img src="{{$aduan->getFoto()}}" class="img-responsive" alt="featured-image" style="width: 100%">                                
                                <hr>   
                                <!-- comments -->
                                <article class="comments">
                                    <h3 class="section-heading">Komentar</h3>
                                    <ul class="media-list">
                                        <li class="media">
                                            @foreach($aduan->komentar()->where('parent_komentar',0)->orderBy('created_at','desc')->get() as $kmn)
                                                @if($kmn->user->level=='pengadu') 
                                                    <a href="/pengadu/{{$kmn->user->pengadu->id}}/detail" class="media-left">
                                                        <img src="{{$kmn->user->pengadu->getAvatar()}}" class="img-circle" alt="avatar" style="width: 64px">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading comment-author"><a href="/pengadu/{{$kmn->user->pengadu->id}}/detail">{{$kmn->user->pengadu->nama_pengadu}}</a></h4><span class="timestamp text-muted">{{$kmn->created_at}}</span>
                                                        <p>{{$kmn->isi_komentar}}</p>                                        
                                                        <hr>
                                                    </div> 
                                                @endif

                                                @if($kmn->user->level=='pejabat')                                                
                                                    <div class="media comment-by-author">
                                                        <a href="/pengadu/{{$kmn->user->pejabat->id}}/detail" class="media-left">
                                                            <img src="{{$kmn->user->pejabat->getAvatar()}}" class="img-circle" alt="avatar"  style="width:64px">
                                                        </a>
                                                   
                                                        <div class="media-body">
                                                            <h4 class="media-heading comment-author"><a href="/pejabat/{{$kmn->user->pejabat->id}}/detail">{{$kmn->user->pejabat->nama_pejabat}}</a></h4><span class="timestamp text-muted">{{$kmn->created_at}}</span>
                                                            <p><b>{{$kmn->user->pejabat->jabatan}}</b></p>                                                
                                                            <p>{{$kmn->isi_komentar}}</p>
                                                        </div>
                                                    </div> 
                                                    <hr>                                        
                                                @endif
                                               
                                            
                                            @endforeach  
                                            <form action="" method="post" style="padding-left:0.5cm; margin-top:10px">
                                                @csrf
                                                @if (Auth::guest())
                                                    <textarea style="margin-top:-5px ;margin-bottom:15px" class="form-control" name="komentar" id="komentar_utama" readonly ></textarea><br>
                                                    <input type="submit" id="komentar"  value="Kirim Komentar" disabled>                 
                                                @endif
                                                @if (Auth::check())
                                                    <input type="hidden" name="aduan_id" value="{{$aduan->id}}"> 
                                                        <input type="hidden" name="parent_komentar" value="0"> 
                                                        <textarea style="margin-top:-5px ;margin-bottom:15px" class="form-control" name="isi_komentar" id="komentar_utama"  ></textarea><br>
                                                    <input type="submit" id="komentar"  value="Kirim Komentar">                 
                                                @endif
                                            </form>  
                                                @if (Auth::guest())
                                                    Anda harus login untuk menambahkan komentar. <br>
                                                    <a href="/login" >Login</a> <br>
                                                    <a href="/" >Kembali</a>
                                                @endif                              
                                        </li>
                                    </ul><!-- end comments -->
                                </article>             
                        </div> 
                     
                        <!-- END INTRO -->
                    <div class="col-md-3">
                        <!-- SIDEBAR -->
                        <!-- search form -->
                        <div class="widget">
                            <form action="#" class="form-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="cari disiko lur">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Nyari</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- end search form -->
                        <!-- categories -->
                        <div class="widget">
                            <h4 class="widget-title">Kategori</h4>
                            <ul class="list-inline tag-list">
                                <li><a href="#">Pelayanan (23)</a></li>                                        
                                <li><a href="#">Infrastruktur (65)</a></li>
                                <li><a href="#">Lingkungan (17)</a></li>
                                <li><a href="#">Lorem (9)</a></li> 
                                <li><a href="#">Lorem (6)</a></li> 
                            </ul>
                        </div>     
                    </div>                               
                </div>  
            </div>    
        </div>
            <!-- end categories -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- COLUMN 1 -->
                    <h3 class="sr-only">ABOUT US</h3>
                    <img src="{{asset('/depan/assets/img/logo/repute-logo-light.png')}}" class="logo" alt="Repute">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil eum temporibus aut quae commodi reiciendis, ea doloribus culpa voluptates nobis inventore iste perspiciatis cupiditate consequatur atque et nisi pariatur quibusdam.<p></p> <br>
                    <address class="margin-bottom-30px">
                        <ul class="list-unstyled">
                            <li>Rt. 05 Rw.03
                                <br/> New York, NY 222222</li>
                            <li>Phone: (1800) 765 - 4321</li>
                            <li>Email: email@yourdomain.com</li>
                        </ul>
                    </address>                       
                </div>                              
            </div>
        </div>
        <!-- COPYRIGHT -->
        <div class="text-center copyright">
             Alone alone &copy;2021.
        </div>
        <!-- END COPYRIGHT -->
    </footer>
    <!-- END FOOTER -->
</div>
<!-- END WRAPPER -->
<!-- JAVASCRIPTS -->
<script src="{{asset('/depan/assets/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('/depan/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/depan/assets/js/repute-scripts.js')}}"></script>
    <script src="{{asset('/depan/assets/js/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('/depan/assets/js/plugins/stellar/jquery.stellar.min.js')}}"></script>
</body>
</html>






        
