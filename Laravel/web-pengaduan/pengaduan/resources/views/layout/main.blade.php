<!DOCTYPE html>
@include('layout.submain._header')
<body>
	<!-- WRAPPER -->
    <div id="wrapper">

            <!-- Menu Atas -->
            @include('layout.submain._topbar')		
            <!-- Menu Atas -->

		    <!-- Panel Kiri -->
             @include('layout.submain._sidebar')
		    <!-- Panel Kiri -->

		<!-- isiKonten -->
		<div id="main-content">
			<div class="container-fluid">

                @yield('isiKonten')
				
		    </div>
        </div>		
        <!-- isiKonten -->
   
		
    <!-- END WRAPPER -->
    </div>	
    @include('layout.submain._footer')
        @yield('script')
    
</body>
 </html>

    
