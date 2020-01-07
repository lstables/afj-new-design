<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-block d-sm-none d-none d-sm-block d-md-none">
        <div class="pt-3">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="nav-link" href="https://www.facebook.com/AForeignersJourney/" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link" href="https://www.youtube.com/channel/UCwtBSk1kwHm9jCbXdtm1-Nw?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link" href="https://twitter.com/afjrock" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="nav-link" href="https://www.instagram.com/aforeignersjourney/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex justify-content-center flex-fill">
            {{-- <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#tour') }}">Tour</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#band">The Band</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            {{--<li class="nav-item {{ Request::is('videos') ? 'active' : '' }}">
                <a class="nav-link" href="/videos">Videos</a>
            </li> --}}
            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}" style="margin-right: 20px;">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                <a class="nav-link" href="https://www.facebook.com/AForeignersJourney/" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="nav-item d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                <a class="nav-link" href="https://www.youtube.com/channel/UCwtBSk1kwHm9jCbXdtm1-Nw?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
            </li>
            <li class="nav-item d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                <a class="nav-link" href="https://twitter.com/afjrock" target="_blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                <a class="nav-link" href="https://www.instagram.com/aforeignersjourney/" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>

        </ul>
    </div>
    </div>
</nav>
