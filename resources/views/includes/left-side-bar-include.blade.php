<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">User Menu</li>
                @if(auth()->user()->role !== 'regular')

                   <li>
                        <a href="/admin/dashboard" class=" waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>Dashboard(Admin)</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span>Activities</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/admin/dashboard/individuals">Individuals</a></li>
                            <li><a href="/admin/dashboard/companies">Companies</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-store"></i>
                            <span>Transactions</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="/admin/dashboard/safevest">Safevest</a></li>
                            <li><a href="/admin/dashboard/fxremit">Fx-Remit</a></li>
                            <li><a href="/admin/dashboard/companies">Money Transfer</a></li>
                        </ul>
                    </li>
                @endif
                @if(auth()->user()->role !== 'admin')
                <li>
                    <a href="/appdashboard" class=" waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>   
                @endif
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span>Apps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/safevest">Safevest </a></li>
                        <li><a href="/moneytransfer">Money Transfer</a></li>
                        <li><a href="/fx-remit">FX-remit</a></li>
                    </ul>
                </li>
              

                
                
                <li>
                    <a class="waves-effect text-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off"></i><span>{{ __('Logout') }}</span> </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
