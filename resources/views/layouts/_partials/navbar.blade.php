<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/images/name.svg" alt="Logo" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(request()->url() == route('home')) active @endif"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item @if(request()->url() == route('menu')) active @endif"><a href="/menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href="/reservation" class="nav-link">Book a table</a></li>
            </ul>
        </div>
    </div>
</nav>
