<?php $current_url = $_SERVER['REQUEST_URI']; ?>

<nav id="desktop-nav">
    <a class="logo-link" href="/">
        <img src="/assets/images/logos/logo-primary.png" alt="Logo">
    </a>
    <ul>
        <a class="logo-link" href="/">
            <img src="/assets/images/logos/logo-primary.png" alt="Logo">
        </a>
        <li>
            <a href="/" class="<?php echo ($current_url == '/') ? 'current' : ''; ?>">Home</a>
        </li>
        <li>
            <a href="/paint-a-pot" class="<?php echo ($current_url === '/paint-a-pot/') ? 'current' : ''; ?>">Paint A Pot</a>
        </li>
        <li>
            <a href="/throwing" class="<?php echo ($current_url === '/throwing/') ? 'current' : ''; ?>">Throwing</a>
        </li>
        <li>
            <a href="/events" class="<?php echo ($current_url === '/events/') ? 'current' : ''; ?>">Events</a>
        </li>
        <li>
            <a href="/stays" class="<?php echo ($current_url === '/stays/') ? 'current' : ''; ?>">Stays</a>
        </li>
        <li>
            <a href="/garden-and-gallery" class="<?php echo ($current_url == '/garden-and-gallery/') ? 'current' : ''; ?>">Garden & Gallery</a>
        </li>
        <li>
            <a href="/about" class="<?php echo ($current_url == '/about/') ? 'current' : ''; ?>">Our Story</a>
        </li>
        <li>
            <a href="/contact" class="<?php echo ($current_url == '/contact/') ? 'current' : ''; ?>">Contact</a>
        </li>
    </ul>
    <div id="hamburger-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <line x1="4" x2="20" y1="12" y2="12" />
            <line x1="4" x2="20" y1="6" y2="6" />
            <line x1="4" x2="20" y1="18" y2="18" />
        </svg>
    </div>
</nav>

<nav id="hamburger-nav">
    <ul class="main-nav">
        <div class="close-nav">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>
        </div>
        <a class="logo-link" href="/">
            <img src="/assets/images/logos/logo-primary.png" alt="Logo">
        </a>
        <li>
            <a href="/" class="<?php echo ($current_url == '/') ? 'current' : ''; ?>">Home</a>
        </li>
        <li>
            <a href="/paint-a-pot" class="<?php echo ($current_url === '/paint-a-pot/') ? 'current' : ''; ?>">Paint A Pot</a>
        </li>
        <li>
            <a href="/throwing" class="<?php echo ($current_url === '/throwing/') ? 'current' : ''; ?>">Throwing</a>
        </li>
        <li>
            <a href="/events" class="<?php echo ($current_url === '/events/') ? 'current' : ''; ?>">Events</a>
        </li>
        <li>
            <a href="/stays" class="<?php echo ($current_url === '/stays/') ? 'current' : ''; ?>">Stays</a>
        </li>
        <li>
            <a href="/garden-and-gallery" class="<?php echo ($current_url == '/garden-and-gallery/') ? 'current' : ''; ?>">Garden & Gallery</a>
        </li>
        <li>
            <a href="/about" class="<?php echo ($current_url == '/about/') ? 'current' : ''; ?>">Our Story</a>
        </li>
        <li>
            <a href="/contact" class="<?php echo ($current_url == '/contact/') ? 'current' : ''; ?>">Contact</a>
        </li>
    </ul>
</nav>