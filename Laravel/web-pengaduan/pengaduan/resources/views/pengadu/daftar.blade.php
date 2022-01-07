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
							<p class="lead">Form Pendaftaran</p>
						</div>
    
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                    
                        <form method="post" action="/pengadu/create" enctype="multipart/form-data">
                        {{csrf_field()}}
                            @if (Auth::guest())
                            <div class="form-group">
                                                
                                <label>NIK</label>
                                <input type=" text" name="nik_pengadu" value="{{old('nik_pengadu')}}" class="form-control" placeholder="Nomor Induk Kewarganegaraan"><br>
                                
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_pengadu" value="{{old('nama_pengadu')}}" class="form-control" placeholder="Masukan Nama Lengkap"><br>

                                <label>Pilih Kategori</label>
                                <select name="kategori_pengadu" class="form-control">
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="Kelompok Masyarakat">Kelompok Masyarakat</option>
                                </select><br>

                                <label>Alamat</label><br>
                                <textarea name="alamat_pengadu" class="form-control" rows="3">{{old('alamat_pengadu')}}</textarea><br>

                                <label>Telepon </label>
                                <input type="text" name="telepon_pengadu" value="{{old('telepon_pengadu')}}"  class="form-control"placeholder="08xxxxxxx"><br>

                                <label>Email</label>
                                <input type="email" name="email_pengadu" value="{{old('email_pengadu')}}"  class="form-control" placeholder="Masukan Email Anda"><br>
                                <div class="form-group">
                                <div id="show_hide_password">
                                <label>Password</label>
                                <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Minimal 6 Karakter">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i>	</a> 
                                </div>
                                </div>
                                
                                <label>Avatar</label>
                                <input type="file" name="avatar_pengadu" class="form-control"><br>
                                <br><button type="submit" class="btn btn-primary" >Daftar</button> 
                                <a class="btn btn-primary" href="/" >Batal </a> 
                            </div>
                            @endif
                            @if (Auth::user())

                            <label>Selamat datang <b>{{auth()->user()->name}}</b></label><br>
                            <a href="/dashboard">Dashboard</a><br>
                            <a href="/" span>Halaman Depan</span></a><br>
                            <a href="/logout" method="post">Logout</a><br>

                        @endif
                        </form>
                    </div>                        
                    @include('layout.submain._footer')                        
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$('document').ready(function() {
		 
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

      



      
  