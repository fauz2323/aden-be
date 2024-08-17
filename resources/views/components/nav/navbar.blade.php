    <ul id="side-menu">

        <li class="menu-title">Menu</li>

        <li>
            <a href="{{ route('home') }}" class="tp-link">
                <i data-feather="calendar"></i>
                <span> Calendar </span>
            </a>
        </li>
        <li>
            <a href="#sidebarDashboards" data-bs-toggle="collapse">
                <i data-feather="home"></i>
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
                </ul>
            </div>
        </li>

        <li>
            <a href="#sidebarDashboards" data-bs-toggle="collapse">
                <i data-feather="home"></i>
                <span> Settings </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarDashboards">
                <ul class="nav-second-level">
                    <li>
                        <a href="index.html" class="tp-link">Analytical</a>
                    </li>
                    <li>
                        <a href="ecommerce.html" class="tp-link">E-commerce</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
