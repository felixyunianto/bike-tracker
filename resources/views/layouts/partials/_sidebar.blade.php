<aside class="st-sidebar" id="js-st-sidebar" data-backdrop="true">
    <div class="d-flex p-3 d-xl-none">
        <button class="toggle-btn btn btn-outline-light ml-auto d-xl-none" type="button" data-toggle="show"
            data-target="#js-st-sidebar">
            <i class="fad fa-arrow-left"></i>
        </button>
    </div>
    <div class="st-logo">
        <a href="index.html">
            <img src="{{asset('assets/images/logo.svg')}}" alt="logo">
        </a>
    </div>
    <div class="st-nav">
        <div class="scrollable">
            <div class="scrollable__container">
                <ul class="st-menu">
                    <li class="st-menu__item">
                        <a href="{{ route('home') }}" class="st-menu__link">
                            <i class="st-menu__icon fad fa-house-flood"></i>
                            <span class="st-menu__text">Dashboard</span>
                        </a>
                    </li>
                    <li class="st-menu__item">
                        <a href="{{ route('garage.index') }}" class="st-menu__link">
                            <i class="st-menu__icon fad fa-garage"></i>
                            <span class="st-menu__text">Garage</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
