<header class="header header-default site-header header-transparent">
    <div class="header__outer">
        <div class="header__inner header--fixed">
            <div class="container">
                <div class="header__main">
                    <div class="header__col header__left">
                        <a href="index.html" class="logo">
                            <figure class="logo--normal">
                                <img src="/client/img/logo/logo.png" alt="Logo">
                            </figure>
                            <figure class="logo--transparency">
                                <img src="/client/img/logo/logo.png" alt="Logo">
                            </figure>
                        </a>
                    </div>
                    <div class="header__col header__center">
                        <nav class="main-navigation d-none d-lg-block">
                            
                            <ul class="mainmenu">
                            
                                <li class="mainmenu__item">
                                    <a href="{{ route('home') }}" class="mainmenu__link">Home</a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="{{ route('shop') }}" class="mainmenu__link">Shop</a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="{{ route('about') }}" class="mainmenu__link">About Us</a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="{{ route('contact') }}" class="mainmenu__link">Contact Us</a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="header__col header__right">
                        <div class="toolbar-item d-none d-lg-block">
                            <a href="login-register.html" class="toolbar-btn">
                                <span>Login</span>
                            </a>
                        </div>
                        <div class="toolbar-item d-block d-lg-none">
                            <a href="#offcanvasnav" class="hamburger-icon js-toolbar menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <div class="toolbar-item">
                            <a href="wishlist.html" class="toolbar-btn">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="toolbar-item mini-cart-btn">
                            <a href="#miniCart" class="toolbar-btn js-toolbar">
                                <span class="mini-cart-btn__icon">
                                    <i class="flaticon-bag"></i>
                                </span>
                                <sup class="mini-cart-btn__count">
                                    0
                                </sup>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky-height"></div>
    </div>
</header>