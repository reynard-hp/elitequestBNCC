<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/recipes*') ? 'active' : '' }}" href="/dashboard/recipes">
                    <span data-feather="file-text"></span>
                    My Recipes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span data-feather="corner-down-left"></span>
                    Back to Home
                </a>
            </li>

        </ul>

    </div>
</nav>
