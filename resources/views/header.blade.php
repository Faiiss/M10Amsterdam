<header>
        <div class="menu">
            <button class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <ul class="menu-items">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('project') }}">Projecten</a></li>
                <li><a href="{{ route('over-ons') }}">Over ons</a></li>
            </ul>
        </div>
        <div class="logo">
            <img src="/images/Logo_of_Gemeente_Amsterdam.svg" alt="Gemeente Amsterdam Logo">
        </div>

        <div class="search">
            <button class="search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="text" placeholder="Search">
            <div class="contact-button"><a href="{{ route('contact') }}">Contact</a></div>
        </div>

    </header>
    <ul class="menu-items-mobile">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('project') }}">Projecten</a></li>
        <li><a href="{{ route('over-ons') }}">Over ons</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
