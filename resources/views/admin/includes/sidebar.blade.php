<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
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
                <a class="nav-link {{ request()->routeIs(['admin.customers', 'admin.customer-add']) ? 'active text-white bg-gradient-primary' : '' }}" href="{{ route('admin.customers') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->routeIs(['admin.customers', 'admin.customer-add']) ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-list text-lg {{ request()->routeIs(['admin.customers', 'admin.customer-add']) ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Customers-Tabular</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.cardular') ? 'active text-white bg-gradient-primary' : '' }}" href="{{ route('admin.customer-card') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->routeIs('admin.customer-card') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-id-card text-lg {{ request()->routeIs('admin.cardular') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Customers-Cards</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.luggageList') ? 'active text-white bg-gradient-primary' : '' }}" href="{{ route('admin.luggageList') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md {{ request()->routeIs('admin.luggageList') ? 'bg-gradient-primary text-white' : 'bg-white' }} text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-list text-lg {{ request()->routeIs('admin.luggageList') ? 'text-white' : '' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Luggage Items</span>
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
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn bg-primary mt-5 w-70 text-white">
                Logout
            </button>
        </form>
    </div>

</aside>
