<!DOCTYPE html>
<html lang="en">

@include('layout.submain._header')
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box register">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="assets/img/logo.png" alt="DiffDash"></div>
							<p class="lead">Form Login</p>
						</div>						
						@if ($errors->any())
						<div id="danger" class="alert alert-danger " >
							<ul>
								@foreach ($errors->all() as $error)
									<li class="btn-toastr" >{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						@if(session('gagal'))
						<div id="toast-container" class="toast-bottom-center">
							<div class="toast toast-error " aria-live="polite" style="display: block;">							
								<div class="toast-message">Login Gagal</div>
							</div>
						</div>
						@endif
				
						<form action="/postlogin" method="post">
							{{csrf_field()}}
							@if (Auth::guest())
							<div class="form-group">
								<label >Email</label>
								<input name="email" type="email" class="form-control" id="signin-email" value="" placeholder="Email">
							</div>
							<div class="form-group">
							<div id="show_hide_password">
								<label >Password</label>						
								<input name="password" type="password" class="form-control" id="signin-password" value="" placeholder="Password">
								<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i>	</a> 
							</div>
							</div>
							<div class="form-group ">
							<button	class="btn btn-primary" type="submit" >LOGIN</button>
							</div>		
						</form>
						Belum punya akun? <br>
						<a href="/daftar" >Registrasi</a><br>
						<a href="/" >Kembali</a>
						@endif		
						@if (Auth::user())

						<label>Selamat datang <b>{{auth()->user()->name}}</b></label><br>
						<a href="/dashboard">Dashboard</a><br>
						<a href="/" span>Halaman Depan</span></a><br>
						<a href="/logout" method="post">Logout</a><br>

						@endif	
					</div>        
				</div>@include('layout.submain._footer')
			</div>
		</div>
	</div>
</body>
<script>
	$('document').ready(function() {
		  
		$("#toast-container").trigger('click');
                
        $('#toast-container').on('click', function() {                            
                $('#toast-container').fadeOut(2000);                            
            });  
				
		$('#danger').on('click', function() {                            
					$('#danger').slideUp(2000);                            
				});  
		$("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').removeClass( "fa fa-eye" );
            $('#show_hide_password i').addClass( "fa fa-eye-slash" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa fa-eye" );
        }
    	});
	});
        
</script>
</html>