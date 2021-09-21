<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Sistem Informasi Kost</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-home {{ (request()->segment(2) != 'dashboard') ? 'text-dark' : '' }}" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (request()->segment(1) == 'boardingHouses') ? 'active' : '' }}" href="{{ route('boardingHouses.index') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-hotel {{ (request()->segment(1) != 'boardingHouses') ? 'text-dark' : '' }}" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Informasi Rumah Kos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-hand-holding-heart text-dark" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Fasilitas Kamar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-key text-dark" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Kamar</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-credit-card text-dark" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-chart-line text-dark" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan Keuangan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-comments text-dark" style="font-size: 13px; top: 0px !important"></i>
            </div>
            <span class="nav-link-text ms-1">Pesan</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>