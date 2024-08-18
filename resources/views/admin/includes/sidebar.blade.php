<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.index') }}">
            <h4>Luggage App</h4>
        </a>
    </div>

    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.index') ? 'active text-white bg-gradient-primary' : '' }}" href="{{ route('admin.index') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->routeIs('admin.index') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-home text-lg {{ request()->routeIs('admin.index') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.customers') ? 'active text-white bg-gradient-primary' : '' }}" href="{{ route('admin.customers') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->routeIs('admin.customers') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-bullhorn text-lg {{ request()->routeIs('admin.customers') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Customers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('billing.php') ? 'active text-white bg-gradient-primary' : '' }}" href="billing.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->is('billing.php') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-invoice-dollar text-lg {{ request()->is('billing.php') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Billing</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('services.php') ? 'active text-white bg-gradient-primary' : '' }}" href="services.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->is('services.php') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-concierge-bell text-lg {{ request()->is('services.php') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('users.php') ? 'active text-white bg-gradient-primary' : '' }}" href="users.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->is('users.php') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-plus text-lg {{ request()->is('users.php') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Admin</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('social_media.php') ? 'active text-white bg-gradient-primary' : '' }}" href="social_media.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->is('social_media.php') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-hashtag text-lg {{ request()->is('social_media.php') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Social Media</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('add_users.php') ? 'active text-white bg-gradient-primary' : '' }}" href="add_users.php">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->is('add_users.php') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-edit text-lg {{ request()->is('add_users.php') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3">
        <a class="btn  bg-primary mt-3 w-70 text-white" href="">Logout</a>
    </div>
</aside>
