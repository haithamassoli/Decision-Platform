<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('black') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('black') }}/img/logo.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('black') }}/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('black') }}/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('black') }}/demo/demo.css" rel="stylesheet" />
</head>

<body class=" rtl menu-on-right ">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper" style="background-color:#0597d9; border-radius:5px" >
        <div class="logo">
          <div class="simple-text logo-normal" style="font-size: x-large;font-weight:bolder">
        لوحة التحكم
          </div>
        </div>
        <ul class="nav">
          <li @yield('main-active')>
            <a href="{{ route('home') }}" >
              <i class="tim-icons icon-chart-pie-36"></i>
              <p style="font-size:large">لوحة القيادة</p>
            </a>
          </li>
          {{-- <li @yield('admin-active')>
            <a href="{{ route('admin.manage_admins.index') }}">
              <i class="tim-icons icon-badge"></i>
              <p style="font-size:large">إدارة المشرفين</p>
            </a>
          </li> --}}
          <li @yield('user-active')>
            <a href="{{ route('manage_user') }}">
              <i class="tim-icons icon-single-02"></i>
              <p style="font-size:large">إدارة االمستخدمين</p>
            </a>
          </li>
          <li @yield('cat-active')>
            <a href="{{ route('admin.manage_categories.index') }}">
              <i class="tim-icons icon-align-left-2"></i>
              <p style="font-size:large">إدارة الأصناف</p>
            </a>
          </li>
          <li @yield('post-active')>
            <a href="{{ route('admin.manage_posts.index') }}">
              <i class="tim-icons icon-single-copy-04"></i>
              <p style="font-size:large">إدارة المنشورات</p>
            </a>
          </li>
          <li @yield('comment-active')>
            <a href="{{ route('admin.manage_comments.index') }}">
              <i class="tim-icons icon-chat-33"></i>
              <p style="font-size:large">إدارة التعليقات</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            {{-- <a class="navbar-brand" href="javascript:void(0)">RTL</a> --}}
            <img src="{{ asset('black') }}/img/logo.png" alt="" width="40px" height="40px" class="ml-2">
            <p style="font-size:large;font-weight:bolder">منصة المناقشات - لوحة التحكم</p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav  mr-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ asset('black') }}/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    تسجيل الخروج
                  </p>
                </a>
                <ul class="dropdown-menu ">
                  {{-- <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li> --}}
                  {{-- <li class="dropdown-divider"></li> --}}
                  <li class="nav-link">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                        @csrf
                        <button class="nav-item dropdown-item" style="cursor:pointer" type="submit">تسجيل الخروج</button>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
