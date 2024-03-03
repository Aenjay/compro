
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{route('dashboard.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Request::is('admin/blog') ? 'active' : '' }}" href="{{route('blog.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    Blog
                </a>
                <a class="nav-link {{ Request::is('admin/service') ? 'active' : '' }}" href="{{route('service.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Service
                </a>
                <a class="nav-link {{ Request::is('admin/contact') ? 'active' : '' }}" href="{{route('contact.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>
                    Contact
                </a>
                @if (auth()->user()->role == "Super Admin")
                    <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{route('users.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Users
                    </a>
                @endif
            </div>
        </div>
    </nav>
</div>