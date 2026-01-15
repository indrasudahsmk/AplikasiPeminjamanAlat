<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alatapake Welcome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background: #f8f9fa;
        }

        .navbar {
            background: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 60px;
        }

        .equipment-card {
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            background: #ffffff;
        }

        .equipment-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12) !important;
        }

        .card-img-container {
            position: relative;
            height: 220px;
            overflow: hidden;
            border-radius: 12px 12px 0 0;
            background: #f8f9fa;
        }

        .card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rating-badge {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .verified-badge {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: #ffc107;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .equipment-title {
            font-size: 16px;
            font-weight: 600;
            color: #212529;
            min-height: 48px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .location-text {
            color: #6c757d;
            font-size: 13px;
        }

        .location-icon {
            width: 16px;
            height: 16px;
            background: #dc3545;
            border-radius: 50%;
            display: inline-block;
        }

        .pricing-section {
            border-top: 1px solid #e9ecef;
            padding-top: 12px;
        }

        .price-item {
            text-align: center;
        }

        .price-label {
            font-size: 11px;
            color: #6c757d;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .price-value {
            font-size: 14px;
            font-weight: 600;
            color: #212529;
        }

        .star-icon {
            color: #ffc107;
        }

        .nav-link {
            color: #495057;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .nav-link:hover {
            background: #f8f9fa;
            color: #212529;
        }

        .btn-primary-custom {
            background: #667eea;
            color: white;
            border: none;
            padding: 8px 24px;
            border-radius: 4px;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-primary-custom:hover {
            background: #5568d3;
            color: white;
        }

        .search-bar {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Container dengan padding lebih besar untuk card */
        .equipment-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
        }

        @media (max-width: 768px) {
            .equipment-container {
                padding: 0 20px;
            }
        }

        .how-it-works-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 60px 0;
        }

        .footer {
            background: #ffffff;
            border-top: 1px solid #e9ecef;
            padding: 40px 0;
            margin-top: 60px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="bi bi-gear-fill text-primary"></i> Alatapake Rental
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#browse">Cari Alat</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">Cara Kerja</a></li>

                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn-primary-custom ms-2">Register</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarProfile"
                                role="button" data-bs-toggle="dropdown">
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D6EFD&color=fff"
                                    class="rounded-circle me-2" width="32" height="32">
                                <span>{{ Auth::user()->email }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Alatapake Rental</h1>
            <p class="lead mb-4">Ambil alatnya, pakai seperlunya.</p>

            <!-- Search Bar -->
            <div class="search-bar">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="Cari untuk peralatan...">
                    <button class="btn btn-light" type="button">
                        <i class="bi bi-search"></i> Cari
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipment Grid -->
    <section id="browse" class="py-5">
        <div class="equipment-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Semua Alat</h2>
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm" style="width: auto;">
                        <option>Sort by: Popular</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- Card 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card equipment-card shadow-sm">
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=500"
                                alt="JLG Scissor Lift">
                            <div class="rating-badge">
                                <i class="bi bi-star-fill star-icon"></i>
                                <span>4.8/5</span>
                            </div>
                            <div class="verified-badge">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Verified</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="equipment-title">2010 JLG 1930ES Electric Scissor Lift</h5>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="location-icon"></span>
                                <span class="location-text">Singapore Mainland</span>
                            </div>
                            <div class="pricing-section">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="price-item">
                                            <div class="price-label">Daily</div>
                                            <div class="price-value">SGD375</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="price-item">
                                            <div class="price-label">Weekly</div>
                                            <div class="price-value">SGD392</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="price-item">
                                            <div class="price-label">Monthly</div>
                                            <div class="price-value">SGD392</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-5">
        <div class="container">
            <div class="how-it-works-section">
                <h2 class="text-center fw-bold mb-5">Cara Kerjanya</h2>
                <div class="row g-4 px-4">
                    <div class="col-md-4 text-center">
                        <div class="mb-3"> <i class="bi bi-search" style="font-size: 3rem; color: #667eea;"></i>
                        </div>
                        <h5 class="fw-bold">1. Jelajahi Peralatan</h5>
                        <p class="text-muted">Cari dari berbagai pilihan peralatan berkualitas sesuai kebutuhan.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="mb-3"> <i class="bi bi-calendar-check"
                                style="font-size: 3rem; color: #667eea;"></i> </div>
                        <h5 class="fw-bold">2. Pesan & Bayar</h5>
                        <p class="text-muted">Pilih durasi sewa dan selesaikan proses pembayaran yang aman.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="mb-3"> <i class="bi bi-truck" style="font-size: 3rem; color: #667eea;"></i>
                        </div>
                        <h5 class="fw-bold">3. Terima & Gunakan</h5>
                        <p class="text-muted">Peralatan dikirim dan siap digunakan untuk memulai pekerjaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-gear-fill text-primary"></i> AlatApake
                    </h5>
                    <p class="text-muted">Platform peminjaman alat untuk kebutuhan proyek dan kegiatan.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Beranda</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Kategori</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Cara Kerja</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">Informasi</h5>
                    <ul class="list-unstyled">
                        <li class="text-muted">Email: jackganma@gmail.com</li>
                        <li class="text-muted">Telp: 0812-3456-7890</li>
                        <li class="text-muted">Alamat: Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>

            <hr>

            <div class="text-center text-muted small">
                &copy; 2026 AlatApake Rental. Semua hak dilindungi.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
