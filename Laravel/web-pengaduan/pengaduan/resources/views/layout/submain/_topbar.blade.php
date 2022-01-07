<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
        </div>
        <!-- logo -->
        <div class="navbar-brand">
            <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt="Home" ></a>
        </div>
        <!-- end logo -->
        <div class="navbar-right">
            
            <!-- navbar menu -->
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="lnr lnr-alarm"></i>
                            <span class="notification-dot"></span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="header"><strong>You have 7 new notifications</strong></li>
                            <li>
                                <a href="#">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-fw fa-flag-checkered text-muted"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">Your campaign <strong>Holiday Sale</strong> is starting to engage potential customers.</p>
                                            <span class="timestamp">24 minutes ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>								
                            <li class="footer"><a href="#" class="more">Lihat semua notifikasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="lnr lnr-cog"></i>
                        </a>
                        <ul class="dropdown-menu user-menu menu-icon">
                            <li class="menu-heading">Pengaturan</li>							
                                <li><a href="#"><i class="fa fa-fw fa-lock"></i>
                                    <span>Ganti Password</span></a>
                                </li>									
                          
                        </ul>
                    </li>							
                </ul>
            </div>
            <!-- end navbar menu -->
        </div>
    </div>
</nav>