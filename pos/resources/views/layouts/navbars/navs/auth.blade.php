<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
            @php
              $jumlah_notif = \App\Models\Produk::where('stok', '<', 3)->count();
              $notifications = \App\Models\Produk::where('stok', '<', 3)->get();
              $notification = \App\Models\Produk::where('stok', '<', 3)->take(3) ->get();
            @endphp
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
                @if($jumlah_notif != 0)
                  <span class="btn btn-danger btn-sm rounded-circle ">{{ $jumlah_notif }}</span>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Terdapat <strong class="text-primary">{{ $jumlah_notif }}</strong> Notifikasi.</h6>
                </div>
                <!-- List group -->
                @foreach($notification as $notif)
                  @if($notif->stok != 0)
                <div class="list-group list-group-flush">
                  <a href="{{route('daftar_produk.notif')}}" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">{{ $notif->nama_barang }}</h4>
                          </div>
                          <div class="text-right text-muted">
                            <span class="badge badge-lg badge-primary">Hampir Habis</span>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Stok tersisa {{ $notif->stok }}</p>
                      </div>
                    </div>
                  </a>
                </div>
                @else
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">{{ $notif->nama_barang }}</h4>
                          </div>
                          <div class="text-right text-muted">
                            <span class="badge badge-lg badge-danger">Habis</span>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Stok tersisa {{ $notif->stok }}</p>
                      </div>
                    </div>
                  </a>
                </div>
                @endif
                @endforeach
                <!-- View all -->
                <a href="{{route('daftar_produk.notif')}}" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('assets') }}/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">{{ Auth::user()->nama_user }}</h6>
                </div>
                @if (Auth::user()->role == "superadmin")
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Data Admin</span>
                </a>
                @endif
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>