    <ul id="side-menu">

        <li class="menu-title">Menu</li>

        <li>
            <a href="{{ route('home') }}" class="tp-link">
                <i data-feather="home"></i>
                <span> Home </span>
            </a>
        </li>
        <li>
            <a href="#sidebarDashboards" data-bs-toggle="collapse">
                <i data-feather="calendar"></i>
                <span> Menu </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarDashboards">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('category') }}" class="tp-link">Category</a>
                    </li>
                    <li>
                        <a href="{{ route('food') }}" class="tp-link">Foods</a>
                    </li>
                    <li>
                        <a href="{{ route('order') }}" class="tp-link">Order List</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="#sidebarDashboards2" data-bs-toggle="collapse">
                <i data-feather="settings"></i>
                <span> Settings </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarDashboards2">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{route('profile')}}" class="tp-link">Settings</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
