 <!-- Sidebar -->
   <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="{{asset('assets/img/kaiadmin/logo_light.svg')}}"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item active">
            <a href="{{route('admin.dashbord')}}"> <i class="fas fa-home"></i> <p>Dashboard</p></a>
          </li>
          {{-- <li class="fas fa-home mx-2"><a href="{{route('admin.dashbord')}}"><p>Dashbord</p></a></li> --}}
          <li class="nav-item active">
            <a href="{{route('warentycard.index')}}"><i class="fas fa-table"></i><p>Warenty Card</p> </a>
          </li>
          <li class="nav-item active">
            <a href="{{route('complain.index')}}"><i class="fas fa-table"></i><p>Complain Form</p> </a>
          </li>
          <li class="nav-item active">
            <a href="{{route('userregister.index')}}"><i class="fas fa-table"></i><p>User Inquiry Form</p> </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->
