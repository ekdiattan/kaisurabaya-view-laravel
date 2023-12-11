@extends('partials.connection')

@section('content')
<body>
  <div class="container-scroller d-flex">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item sidebar-category">
            <p>Navigasi</p>
            <span></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="fas fa-home"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item sidebar-category">
            <p>Surat</p>
            <span></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fa-solid fa-envelope"></i>
              <span class="menu-title">Surat Masuk</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/suratmasuk">List Surat Masuk</a></li>
                <li class="nav-item"> <a class="nav-link" href="/listdisposisi">List Disposisi</a></li>
                <li class="nav-item"> <a class="nav-link" href="/disposisi">Tambah Disposisi</a></li>
                <li class="nav-item"> <a class="nav-link" href="/surateksternal">Tambah Surat Eksternal</a></li>
                <li class="nav-item"> <a class="nav-link" href="/suratinternal">Tambah Surat Internal</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fa-solid fa-envelope"></i>
              <span class="menu-title">Surat Keluar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/suratkeluar">List Surat Keluar</a></li>
                <li class="nav-item"> <a class="nav-link" href="/addsuratkeluar">Tambah Surat Keluar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item sidebar-category">
            <p>User</p>
            <span></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="fas fa-user"></i>
                <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/showemployee">List Pegawai</a></li>
                <li class="nav-item"> <a class="nav-link" href="/addemployee">Tambah Pegawai</a></li>
                <li class="nav-item"> <a class="nav-link" href="/showuser">List User</a></li>
                <li class="nav-item"> <a class="nav-link" href="/adduser">Tambah User</a></li>
                <li class="nav-item"> <a class="nav-link" href="/role">List Jabatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/addrole">Tambah Jabatan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/hakakses">List Hak Akses</a></li>
                <li class="nav-item"> <a class="nav-link" href="/addhakases">Tambah Hak Akses</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg-xUT9Qdlq9Wo8vAi_K0GnJ_CawBU3Lqg6g&usqp=CAU" alt="logo" id="logokai"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1" id="tulisan">{{$greetings}} , {{$user->user->UserName}}</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">{{$date}}</h4>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Unknown_person.jpg/434px-Unknown_person.jpg" alt="profile"/>
                <span class="nav-profile-name">{{$user->user->UserName}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="/setting">
                  <i class="fa-solid fa-gear"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="/logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
              @yield('main')
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection