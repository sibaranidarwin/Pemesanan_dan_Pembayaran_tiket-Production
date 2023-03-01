<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-success">
        <div class="sidebar-brand-text">
          <img src="" width="70">
        </div>
        <div class="sidebar-brand-text">Kaldera Toba Nomadic Escape</div>
      </div>
      <hr class="sidebar-divider my-0">

      <li class="menu-title mt-4">&nbsp; DASHBOARD</li><!-- /.menu-title -->

      <li class="nav-item {{ Request::is('admin/DashboardAdmin')? "active":""}} ">
        <a class="nav-link" href="{{url ('admin/DashboardAdmin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      {{-- <hr class="sidebar-divider"> --}}

      <li class="menu-title mt-4">&nbsp; DATA TIKET</li><!-- /.menu-title -->
      <li class="nav-item {{ Request::is('admin/MengelolaTempatWisata')? "active":""}}">
        <a class="nav-link" href="{{url ('admin/MengelolaTempatWisata')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Tiket Wisata</span>
        </a>  
      </li>

      <li class="nav-item {{ Request::is('admin/MengelolaPemesanan')? "active":""}}">
        <a class="nav-link" href="{{url ('admin/MengelolaPemesanan')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Pemesanan</span>
        </a>
      </li>

      <li class="nav-item {{ Request::is('admin/MengelolaPembayaran')? "active":""}}">
        <a class="nav-link" href="{{url ('admin/MengelolaPembayaran')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Pembayaran</span>
        </a>
      </li>

      <li class="menu-title mt-4">&nbsp; DATA GALERI</li><!-- /.menu-title -->
      <li class="nav-item {{ Request::is('admin/MengelolaGaleri')? "active":""}}">
         <a class="nav-link" href="{{url ('admin/MengelolaGaleri')}}">
           <i class="fa fa-fw fa-image"></i>
           <span>Galeri</span>
         </a>
       </li>

      {{-- <hr class="sidebar-divider"> --}}
            
    </ul>