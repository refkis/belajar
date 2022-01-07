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
							<div class="logo text-center"><img src="{{asset('/assets/img/logo.png ')}}"></div>
							<p class="lead"> Pendaftaran Penggaduan</p>
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
    <form method="post" action="/aduan/create" enctype="multipart/form-data" >
        {{csrf_field()}}
                 
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori Pengaduan :</label>
            <select name="kategori_aduan" class="form-control" id="exampleFormControlSelect1">
                <option value="Pelayanan">Pelayanan</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                <option value="Lingkungan">Lingkungan</option>
            </select>
            <br>                      
            <label for="judul_aduan">Judul Aduan</label>
            <input type="text" name="judul_aduan" class="form-control" id="judul_aduan"  placeholder="Jalan Rusak, Pelayanan Lambat,dll">
            <br>
            <label for="detail_aduan">Detail Aduan</label>
            <textarea name="detail_aduan" class="form-control" id="detail_aduan"></textarea>
            <br>
            <label for="">Foto Aduan</label>
            <input type="file" name="foto_aduan" class="form-control">
            <br>
            <a href=" {{ url()->previous() }}">Batal</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>                        
</div>
</div>
</div>
</div>
<!-- END WRAPPER -->

</body>

</html>
