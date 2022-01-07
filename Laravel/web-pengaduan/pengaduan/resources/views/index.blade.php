
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
        <!-- WRAPPER -->
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
                    <!-- MAIN NAVIGATION -->
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
                    <!-- END MAIN NAVIGATION -->            
                </div>
            </nav>
            <!-- END NAVBAR -->   
            <!-- HERO UNIT -->
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
            <!-- END HERO UNIT -->
            <!-- FOOTER -->
                <!-- MAIN FEATURES -->
                <div class="main-features ">
                    <div class="container">
                        <div class="row">
                            <a href="/daftar"><div class="col-md-3 col-sm-6"><i class="fa fa-user"></i>
                                <h3 class="feature-heading">Registrasi</h3></div></a>
                                    <div class="col-md-3 col-sm-6"><i class="fa fa-bullhorn "></i>
                                        <h3 class="feature-heading">Buat Aduan </h3></div>
                                        <div class="col-md-3 col-sm-6"><i class="fa fa-hourglass-half"></i>
                                    <h3 class="feature-heading">Tunggu Tanggapan</h3></div>
                                <div class="col-md-3 col-sm-6"><i class="fa fa-check-square-o "></i>
                            <h3 class="feature-heading">Selesai</h3></div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN FEATURES --> 
                <!-- BREADCRUMBS -->     
                <div class="container">
                    <h1 class="page-title pull-left">Aduan Terbaru</h1>
                    <ol class="breadcrumb">
                    </ol>
                </div>      
                <!-- END BREADCRUMBS -->       
                <div class="page-content">
                    <div class="container" >
                        <div class="row" >                            
                                <div class="col-md-9"> 
                                    @foreach($aduan as $adn)
                                    <div class="blog medium-thumbnail margin-bottom-30px">
                                        <!-- blog post -->
                                        <article class="entry-post">
                                            <header class="entry-header">                                
                                                <h2 class="entry-title"><a href="/aduan/{{$adn->id}}/detail">{{$adn->judul_aduan}}</a></h2>                                
                                                <div class="meta-line clearfix">
                                                        <div class="meta-author-category pull-left">
                                                            <span class="post-author"> Oleh <a href="#">{{$adn->user->pengadu->nama_pengadu}}</a></span> 
                                                            <span class="post-author">pada <a href="#">{{$adn->created_at->format('d M Y')}}</a></span>
                                                            <span class="post-category">Kategori : <a href="#"> {{$adn->kategori_aduan}}</a></span>
                                                        </div>
                                                        <div class="meta-tag-comment pull-right">                                                        
                                                            @forelse($adn->status()->orderBy('created_at','desc')->take(1)->get() as $status)  
                                                                                                                      
                                                                {{-- <span class="post-tags"><i class="fa fa-tag"></i>  Status Aduan : <a class="btn-sm btn-warning" href="#">{{$status->kategori_status}}</a></span> --}}
                                                                @if($status->kategori_status == 'Selesai')
                                                                <td><label class="label label-success" ><i class="fa fa-tag"></i>  Status Aduan :{{$status->kategori_status}}</td></label> 
                                                                    
                                                                    @elseif($status->kategori_status == 'Diverifikasi')
                                                                <td><label class="label label-info" ><i class="fa fa-tag"></i>  Status Aduan :{{$status->kategori_status}}</td></label> 
                                                                   
                                                                    @elseif($status->kategori_status == 'Diproses')
                                                                <td><label class="label label-info" ><i class="fa fa-tag"></i>  Status Aduan :{{$status->kategori_status}}</td></label> 
                                                                 
                                                                    @elseif ($status->kategori_status == 'Ditolak')
                                                                <td><label class="label label-danger" ><i class="fa fa-tag"></i>  Status Aduan :{{$status->kategori_status}}</td></label> 
                                                                    @endif
                                                            @empty
                                                            <td><label class="label label-warning" ><i class="fa fa-tag"></i>  Status Aduan : Belum Ditanggapi</td></label> 
                                                            @endforelse
                                                        </div>
                                                    </div>                                                
                                            </header> 
                                        <div class="entry-content clearfix">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="portfolio-item">
                                                        <div class="overlay"></div>                                                        
                                                        <div class="media-wrapper">                                                                 
                                                        <img src="{{$adn->getFoto()}}" class="img-responsive" alt="featured-image" style="width: 100%"> 
                                                        </div>
                                                    </div>                                                   
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="excerpt">
                                                        <p>{{ str_limit($adn->detail_aduan, 800,' ......') }}</p>  
                                                        </div>
                                                    </div>
                                                </div>                              
                                            </div> 
                                        </div>                                      
                                </article><hr>
                                @endforeach       
                                {{$aduan->links()}}  
                            </div><!-- END INTRO -->
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

                                <li><a href="#">Pelayanan ( {{$pelayanan->count()}})</a></li>                                        
                                <li><a href="#">Infrastruktur ({{$infrastruktur->count()}})</a></li>
                                <li><a href="#">Lingkungan ({{$lingkungan->count()}})</a></li>    

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
                        <div class="col-md-4">
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
    </body>
</html>
    <!-- JAVASCRIPTS -->
    <script src="{{asset('/depan/assets/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('/depan/assets/js/repute-scripts.js')}}"></script>
    <script src="{{asset('/depan/assets/js/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('/depan/assets/js/plugins/stellar/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('/depan/assets/js/bootstrap.min.js')}}"></script>
