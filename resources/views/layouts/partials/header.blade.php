    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom">
        <div class="topbar container-fluid">
            <div class="d-flex align-items-center gap-lg-2 gap-1">

                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="index.html" class="logo-light">
                        <span class="logo-lg">
                            <img src="{{ asset('assets') }}/images/logo.png" alt="logo">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('assets') }}/images/logo-sm.png" alt="small logo">
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <span class="logo-lg">
                            <img src="{{ asset('assets') }}/images/logo-dark.png" alt="dark logo">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('assets') }}/images/logo-dark-sm.png" alt="small logo">
                        </span>
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>

            <ul class="topbar-menu d-flex align-items-center gap-3">
                <li class="dropdown d-lg-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ri-search-line font-22"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="search" class="form-control" placeholder="Search ..."
                                aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                <li class="d-none d-sm-inline-block">
                    <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Theme Mode">
                        <i class="ri-moon-line font-22"></i>
                    </div>
                </li>


                <li class="d-none d-md-inline-block">
                    <a class="nav-link" href="" data-toggle="fullscreen">
                        <i class="ri-fullscreen-line font-22"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="{{ asset('assets') }}/images/users/avatar-1.jpg" alt="user-image" width="32"
                                class="rounded-circle">
                        </span>
                        <span class="d-lg-flex flex-column gap-1 d-none">
                            <h5 class="my-0">{{ Auth::user()->name }}</h5>
                            <h6 class="my-0 fw-normal">{{ ucWords(Auth::user()->type) }}</h6>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#resetModal">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>Change Password</span>
                        </a>



                        <!-- item-->
                        <a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>


            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="resetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label class="form-label" for="currentPassword">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" name="current_password" placeholder="Enter current password" required>
                        </div>
                        <div class="form-group mb-2">
                            <label class="form-label" for="newPassword">New Password</label>
                            <input type="password" class="form-control" id="newPassword" name="new_password" placeholder="Enter new password" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="new_password_confirmation" placeholder="Confirm new password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ========== Topbar End ========== -->
