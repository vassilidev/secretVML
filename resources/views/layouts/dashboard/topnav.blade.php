<nav class="topnav navbar navbar-expand navbar-dark bg-dark" id="sidenavAccordion">
    <a class="navbar-brand" href="index.html">SB Admin Pro</a>
    <button class="btn btn-icon btn-transparent-white order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
            data-feather="menu"></i></button>
    <ul class="navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown no-caret mr-2 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
               href="javascript:void(0);" role="button" data-toggle="dropdown">
                <img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"/>
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#!">
                    <div class="dropdown-item-icon">
                        <i data-feather="settings"></i>
                    </div>
                    Account
                </a>
                <a class="dropdown-item text-danger" href="#!">
                    <div class="dropdown-item-icon text-danger">
                        <i data-feather="log-out"></i>
                    </div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
