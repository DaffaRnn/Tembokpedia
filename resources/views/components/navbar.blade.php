    <nav class="navbar navbar-expand-lg fixed-top shadow bg-light">
        <div class="container">
            <a class="navbar-brand me-auto fs-3" href="#">Tembokpedia</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title fs-2" id="offcanvasNavbarLabel">Tembokpedia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="font-size: 23px">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item"><x-nav-link href="/">Beranda</x-nav-link></li>
                    <li class="nav-item"><x-nav-link href="/tentang">Tentang</x-nav-link></li>
                    <li class="nav-item"><x-nav-link href="/program">Program</x-nav-link></li>
                    <li class="nav-item"><x-nav-link href="/galeri">Galeri</x-nav-link></li>
                    <li class="nav-item"><x-nav-link href="/histori">Histori</x-nav-link></li>
                </ul>
            </div>
            </div>
            <a href="" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>