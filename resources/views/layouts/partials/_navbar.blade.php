<nav class="st-navbar">
    <div class="st-navbar__nav ml-auto">
        <button class="navbar__nav-item btn btn-outline-light d-xl-none" type="button" data-toggle="show"
            data-target="#js-st-sidebar">
            <i class="fad fa-arrow-right"></i>
        </button>
        <div class="navbar__nav-item dropdown">
            <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown">
                <img src="assets/images/people/206.jpg" alt="user" class="avatar avatar--xs rounded-circle">
                <span>John Doe</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">
                    <i class="fad fa-user-alt mr-3"></i>
                    <span>My Profile</span>
                </a>
                <a class="dropdown-item" href="gallery.html">
                    <i class="fad fa-camera-retro mr-3"></i>
                    <span>My photos</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="fad fa-cog mr-3"></i>
                    <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="fad fa-sign-out-alt mr-3"></i>
                        <span>Logout</span>
                    </button>
                </form>
                
            </div>
        </div>
    </div>
</nav>