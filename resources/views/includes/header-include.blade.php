<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/circle.png')}}" alt="" height="10">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('assets/images/sprout-logo-new.png')}}" alt="" height="60">
                                </span>
                </a>

                <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/circle.png')}}" alt="" height="20">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('assets/images/sprout-logo-new.png')}}" alt="" height="60">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                    id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>



        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">

            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-user font-size-24 align-middle"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href=""><i class="bx bx-user font-size-16 align-middle mr-1"></i>
                        Profile</a>
                    <a class="dropdown-item text-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>


        </div>
    </div>
</header>