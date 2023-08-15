<nav class="navbar">
    <div class="navbar-wrap">
        <div class="logo">
            <img src="/logo.svg" alt="logo" class="w-[50px] h-[50px]" />
            <span class="brand-name">Java Joy</span>
        </div>
        <div class="nav-menu">
            <a href="{{ route('welcome') }}" @class(['nav-link', 'active'=> request()->routeIs('welcome')]) wire.navigate>
                <span>Home</span>
            </a>
            <a href="{{ route('products.index') }}" @class(['nav-link', 'active'=> request()->routeIs('products.index')]) wire.navigate>
                <span>Menu</span>
            </a>
            <a href="{{ route('posts.index') }}" @class(['nav-link', 'active'=> request()->routeIs('posts.index')]) wire.navigate>
                <span>Blog</span>
            </a>
            <a href="{{ route('about-me') }}" @class(['nav-link', 'active'=> request()->routeIs('about-me')]) wire.navigate>
                <span>About Me</span>
            </a>
        </div>
        <div id="hamburger-menu">
            <div class="hamburger-item hamburger-top"></div>
            <div class="hamburger-item hamburger-middle"></div>
            <div class="hamburger-item hamburger-bottom"></div>
        </div>
    </div>
    <div id="mobile-menu">
        <a href="{{ route('welcome') }}" @class(['nav-link', 'active'=> request()->routeIs('welcome')]) wire.navigate>
            <span>Home</span>
        </a>
        <a href="{{ route('products.index') }}" @class(['nav-link', 'active'=> request()->routeIs('products.index')]) wire.navigate>
            <span>Menu</span>
        </a>
        <a href="{{ route('posts.index') }}" @class(['nav-link', 'active'=> request()->routeIs('posts.index')]) wire.navigate>
            <span>Blog</span>
        </a>
        <a href="{{ route('about-me') }}" @class(['nav-link', 'active'=> request()->routeIs('about-me')]) wire.navigate>
            <span>About Me</span>
        </a>
    </div>
</nav>
