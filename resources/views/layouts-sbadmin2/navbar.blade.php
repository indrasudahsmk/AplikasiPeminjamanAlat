<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                data-toggle="dropdown">
                <span class="mr-2 text-dark">{{ Auth::user()->name }}</span>
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D6EFD&color=fff"
                    class="rounded-circle" width="32" height="32">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <a class="dropdown-item" href="#"><i
                        class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile</a>
                <a class="dropdown-item" href="#"><i
                        class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Pengaturan</a>
                <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>Log
                    aktivitas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
