<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('assets') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}" >
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            @if (Auth::user()->role == "superadmin")
            <li class="nav-item">
            <a class="nav-link" href="{{ route('daftar_user') }}" >
                <i class="ni ni-circle-08 text-orange"></i>
                <span class="nav-link-text">Kelola Akun</span>
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-cart text-info"></i>
                <span class="nav-link-text">Kelola Barang</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                @if (Auth::user()->role == "superadmin")
                  <li class="nav-item">
                    <a href="{{ route('kategori') }}" class="nav-link">Kategori</a>
                  </li>
                @endif
                  <li class="nav-item">
                    <a href="{{ route('daftar_produk') }}" class="nav-link">Daftar Produk</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('daftar_produk.notif') }}" class="nav-link">Daftar Produk Segera Habis</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Transaksi</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route ('transaksi') }}" class="nav-link">Penjualan</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-rekapan" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-map-big text-primary"></i>
                <span class="nav-link-text">Rekapan</span>
              </a>
              <div class="collapse" id="navbar-rekapan">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{ route('rekap.penjualan') }}" class="nav-link">Rekapan Transaksi</a>
                  </li>
                </ul>
              </div>
            </li>

            @if (Auth::user()->role == "superadmin")
            <li class="nav-item">
              <a class="nav-link" href="{{ route('diskon') }}">
              <i class="ni ni-bag-17 text-green"></i>
                <span class="nav-link-text">Atur Diskon</span>
              </a>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="{{ route('daftar_pelanggan') }}">
                <i class="ni ni-single-02 text-info"></i>
                <span class="nav-link-text">Daftar Pelanggan</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          </ul>
        </div>
      </div>
    </div>
  </nav>