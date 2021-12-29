<nav class="sidenav shadow-right sidenav-dark">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <div class="sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                Charts
            </a>
        </div>
    </div>
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
