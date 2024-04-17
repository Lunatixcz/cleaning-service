<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">
                <!-- Visible only in mini mode -->
                <div class="smini-visible-block animated fadeIn px-3">
                    <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="smini-hidden text-center mx-auto">
                    <a class="img-link" href="javascript:void(0)">
                        <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
                    </a>
                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="link-fx text-dual fs-sm fw-semibold text-uppercase"
                                href="javascript:void(0)">{{ $username }}</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle"
                                href="javascript:void(0)">
                                <i class="fa fa-moon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="link-fx text-dual" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            @if (Auth::user()->level == 'admin')
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        {{-- <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                <i class="nav-main-link-icon fa fa-house-user"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li> --}}
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('adminUser') ? ' active' : '' }}"
                                href="{{ route('adminUser.index') }}">
                                <i class="nav-main-link-icon fa fa-user"></i>
                                <span class="nav-main-link-name">Users</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('employees') ? ' active' : '' }}"
                                href="{{ route('employees.index') }}">
                                <i class="nav-main-link-icon fa fa-address-card"></i>
                                <span class="nav-main-link-name">Employee</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('adminOrder') ? ' active' : '' }}"
                                href="{{ route('adminOrder.index') }}">
                                <i class="nav-main-link-icon fa fa-scroll"></i>
                                <span class="nav-main-link-name">Order</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @else
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                <i class="nav-main-link-icon fa fa-house-user"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Order</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('order/create') ? ' active' : '' }}"
                                href="{{ route('order.create') }}">
                                <i class="nav-main-link-icon fa fa-phone"></i>
                                <span class="nav-main-link-name">Order Service</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('order') ? ' active' : '' }}"
                                href="{{ route('order.index') }}">
                                <i class="nav-main-link-icon fa fa-spinner"></i>
                                <span class="nav-main-link-name">Pending Order</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('history') ? ' active' : '' }}"
                                href="{{ route('payment.index') }}">
                                <i class="nav-main-link-icon fa fa-clock-rotate-left"></i>
                                <span class="nav-main-link-name">Order History</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">About</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('about') ? ' active' : '' }}"
                                href="{{ route('about') }}">
                                <i class="nav-main-link-icon fa fa-circle-info"></i>
                                <span class="nav-main-link-name">About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            @endif
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->
