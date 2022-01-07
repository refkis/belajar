<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
        <span class="sr-only">Toggle Fullwidth</span>
        <i class="fa fa-angle-left"></i>
    </button>
    <div class="sidebar-scroll">
        <div class="user-account">           
            <img src="

            @if(auth()->user()->level=='pengadu')
			    {{auth()->user()->pengadu->getAvatar()}}
		    @elseif(auth()->user()->level=='pejabat')
			    {{auth()->user()->pejabat->getAvatar()}}
		    @else
			    /images/default.jpg
		    @endif                  
              " class="img-responsive img-circle user-photo" alt="User Profile Picture" width="100px" height="100px">   

            <div class="dropdown">
                <a href="#" class="dropdown-toggle user-name" data-toggle="dropdown">
                    Hello, <strong>{{(auth()->user()->name)}}</strong> 
                    <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right account">					
                    
                
                @if(auth()->user()->level =='pengadu')
                
                    <li><a href="/pengadu/{{auth()->user()->pengadu->id}}/profil">Profil Saya</a></li>						
              
                @endif
                @if(auth()->user()->level =='pejabat')

               <li><a href="/pejabat/{{auth()->user()->pejabat->id}}/detail">Profil Saya</a></li>
                
               @endif
                
                        <li><a href="/logout">Logout</a> </li></ul>
                </ul>       
                    
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="active"><a href="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                
                <!-- menu untuk level pengadu  -->
                @if(auth()->user()->level =='pengadu')
                    <li class="active"><a href="/buat/aduan"><i class="lnr lnr-magic-pencil"></i> 
                        <span>Buat Aduan</span></a></li>
                    <li class="active"><a href="/aduan/aduansaya"><i class="lnr lnr-magic-pencil"></i> 
                        <span>Daftar Aduan Saya</span></a></li>                   
                @endif

                <!-- menu untuk level pejabat  -->
                @if(auth()->user()->level =='pejabat')
                    <li class=""><a href="/aduan/masuk">Aduan Untuk Saya </a></li>
                    <li class=""><a href="/pengadu"> Data Pengadu </a></li>
                    <li class=""> <a href="/aduan"> Data Semua Aduan </a></li>
                @endif

                <!-- menu untuk level admin  -->
                @if(auth()->user()->level =='admin')
                <li class="">
                    <a href="#forms" class="has-arrow" aria-expanded="false"><i class="fa fa-database"></i> <span>Data</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="/aduan"> Daftar Aduan </a></li>
                        <li class=""><a href="/pengadu"> Daftar Pengadu </a></li>
                        <li class=""><a href="/pejabat"> Daftar Pejabat </a></li>
                    </ul>
                </li>
                @endif
                    
            </ul>
        </nav>
        
    </div>
</div>        

                        
    
                
                
               

                
