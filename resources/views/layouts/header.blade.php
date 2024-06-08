<div id="page-content-wrapper">
    <!-- Top navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="/path/to/logo.png" alt="Logo" class="rounded-circle logo">
            </a>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto mb-2 mb-md-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pesanan">pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/review">Review</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">pegawai</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="/kategori">kategori</a>
                    </li> 
                </ul>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white @yield('navLogin')" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
