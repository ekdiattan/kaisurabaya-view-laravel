@extends('partials.connection')

@section('content')
<div class="container-scroller d-flex">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigasi</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/main">
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
              <li class="nav-item"> <a class="nav-link" href="/suratmasukmagang">Surat Masuk Magang</a></li>
              <li class="nav-item"> <a class="nav-link" href="/suratinternal">Surat Internal</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="fa-solid fa-envelope"></i>
            <span class="menu-title">Surat Keluar</span>
          </a>
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
              <li class="nav-item"> <a class="nav-link" href="/adduser">Tambah User</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    
    {{-- COVER --}}
    <div class="container-fluid page-body-wrapper">
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg-xUT9Qdlq9Wo8vAi_K0GnJ_CawBU3Lqg6g&usqp=CAU" alt="logo" id="logokai"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1" id="tulisan">Selamat Datang , Attan</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">20 November 2023</h4>
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
                <!-- <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search"> -->
                <!-- <marquee>Selamat datang</marquee> -->
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="https://img.a.transfermarkt.technology/portrait/big/8198-1694609670.jpg?lm=1" alt="profile"/>
                <span class="nav-profile-name">Attan</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="fa-solid fa-gear"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="/">
                    <i class="fa-solid fa-right-from-bracket"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    </div>
  </div>
@endsection