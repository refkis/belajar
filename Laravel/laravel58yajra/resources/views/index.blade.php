<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
        <link rel="stylesheet" href="{{asset('css/bootstrap461.css')}}">
        <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
  
</head>
<body>
    <div class="container"> <h2>Tabel User</h2>
        <div class="row">
        <div class="col-sm-12 col-md-11"></div>
        <div class="col-sm-12 col-md-1"> 
            <button type="button" class="btn btn-info btn-sm">Tambah</button></div>       
        </div> <br>
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
        </thead>        
        </table>
        </div>
    <script src="{{asset('/js/jquery360.js')}}" ></script>
    <script src="{{asset('/js/bootstrap461.js')}}" ></script>
    <script src="{{asset('/js/datatable.1.11.3.js')}}" ></script>
    <script src="{{asset('/js/datatable.bootstrap.min.js')}}" ></script>

    <script>
        $(document).ready( function () {
           
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
            
                ajax: '{{route('data')}}',
                columns:[                 
                    {data : 'DT_RowIndex', name:'DT_RowIndex',orderable: false, searchable: false},
                    {data : 'name', name: 'name' },
                    {data : 'email', name: 'email' }, 
                    {data : 'action', name: 'action'}        
                    ]      
            });
        });
    </script>
</body>
</html>
