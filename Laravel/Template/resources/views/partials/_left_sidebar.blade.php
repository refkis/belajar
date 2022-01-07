<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>  
    <?php
      $path = Request::segment(1);
      $sesion_menu = session('menu7890_2386');
      $menu_session  = json_decode(($sesion_menu));
    ?>

    @foreach($menu_session as $mnu_induk)
      <?php
      $active = false;
      $expand = false;
      foreach($mnu_induk->child as $mc){
          if($path==$mc->url){
              $active = true;
              $expand = true;
          }
      } 
      ?>
      <li class="nav-item  @if($expand) active @endif ">
      <a class="nav-link" data-toggle="collapse" href="#mnu_{!! $mnu_induk->id_menu !!}"" aria-expanded="false">
          <i class="icon-layout menu-icon"></i> <span class="menu-title">{!! $mnu_induk->nama_menu !!}</span><i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="mnu_{!! $mnu_induk->id_menu !!}">
          <ul  class="nav flex-column sub-menu @if($expand)  show 
            @endif " data-bs-parent="#nav">
            @foreach($mnu_induk->child as $mnu_child)
            <li class="nav-item @if($path==$mnu_child->url) active @endif">
              <a href="{!! url($mnu_child->url) !!}" class="nav-link">{!! $mnu_child->nama_menu !!}</a></li>
            @endforeach
          </ul>
        </div>
      </li>
    @endforeach

    
  </ul>
</nav>