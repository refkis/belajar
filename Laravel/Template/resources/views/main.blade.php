
<!DOCTYPE html>
<html lang="en">

@include('partials._header')

<body>
  <div class="container-scroller">

            @include('partials._topbar')

    <div class="container-fluid page-body-wrapper">

            @include('partials._theme')
            @include('partials._left_sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
          

              @yield('content')
              @section('modal')
              @show

         
        </div>

        @include('partials._footer') 

      </div>
    </div>
  </div>
@include('partials._scriptjs')
@section('js')
	@show
</body>

</html>
