        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Griya Depo <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            @if (Auth::user()->id == 1 || Auth::user()->id == 2  || Auth::user()->id == 3)
                
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-users"></i>
                    <span> Home</span></a>
            </li>

            @endif

            @if (Auth::user()->id == 1 || Auth::user()->id == 2 )
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Project Management</span></a>
            </li>
            @endif

            @if (Auth::user()->id == 1 || Auth::user()->id == 2 || Auth::user()->id == 3)
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Report</span></a>
            </li>
            @endif
            
            @if (Auth::user()->id == 1)
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>User Management</span></a>
            </li>
            @endif

     

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{ asset('assets/img/undraw_rocket.svg') }}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->