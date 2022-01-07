
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydash') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('skydash') }}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('skydash') }}/images/logo.svg" alt="logo">
              </div>           
              <form class="pt-3" action="{{ url('/submit-login') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>        
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 
  <script src="{{ asset('skydash') }}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{ asset('skydash') }}/js/off-canvas.js"></script>
  <script src="{{ asset('skydash') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('skydash') }}/js/template.js"></script>
  <script src="{{ asset('skydash') }}/js/settings.js"></script>
  <script src="{{ asset('skydash') }}/js/todolist.js"></script>

</body>

</html>
