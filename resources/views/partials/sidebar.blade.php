<div class="sidebar">
    <div class="logo" style="display: flex; align-items: center;">
        <img src="{{ asset('assets/jobjiv.png') }}" alt="JobsJive Logo" class="logo-img" width="100">
        <span class="logo_name" style="color: #fff;  font-size: 24px;">JobsJive</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/employee" class="{{ request()->is('employee*') ? 'active' : '' }}">
                <i class="bx bx-user"></i>
                <span class="links_name">Employee</span>
            </a>
        </li>
        <li>
            <a href="/jobs" class="{{ request()->is('jobs*') ? 'active' : '' }}">
                <i class="bx bx-briefcase"></i>
                <span class="links_name">Jobs</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-log-out"></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
