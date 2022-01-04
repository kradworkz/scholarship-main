<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <router-link :to="{ name: 'home' }" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </router-link>
                </li>
                @if(Auth::user()->role == "Administrator")
                <li>
                    <router-link :to="{ name: 'agencies' }" class="waves-effect">
                        <i class="bx bxs-institution"></i>
                        <span key="t-dashboards">Agencies</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'locations' }" class="waves-effect">
                        <i class="bx bxs-map"></i>
                        <span key="t-dashboards">PH Address</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'schools' }" class="waves-effect">
                        <i class="bx bx-buildings"></i>
                        <span key="t-dashboards">Schools</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'courses' }" class="waves-effect">
                        <i class="bx bxs-graduation"></i>
                        <span key="t-dashboards">Courses</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'dropdowns' }" class="waves-effect">
                        <i class="bx bx-category"></i>
                        <span key="t-dashboards">Dropdowns</span>
                    </router-link>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>