<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background: #f5f5f5;
        }

        .equipment-card {
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
            border: none;
            border-radius: 12px;
        }

        .equipment-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15) !important;
        }

        .card-img-container {
            position: relative;
            height: 220px;
            overflow: hidden;
            border-radius: 12px 12px 0 0;
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
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
            color: #333;
            min-height: 48px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .location-text {
            color: #666;
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
            border-top: 1px solid #eee;
            padding-top: 12px;
        }

        .price-item {
            text-align: center;
        }

        .price-label {
            font-size: 11px;
            color: #999;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .price-value {
            font-size: 14px;
            font-weight: 600;
            color: #333;
        }

        .star-icon {
            color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <h1 class="mb-4">Equipment Rental</h1>
        
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card equipment-card shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=500" alt="Scissor Lift">
                        <div class="rating-badge">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>3.9/5</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="equipment-title">2013 Genie GS-3246 Electric Scissor Lift</h5>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="location-icon"></span>
                            <span class="location-text">Singapore Mainland</span>
                        </div>
                        <div class="pricing-section">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Daily</div>
                                        <div class="price-value">SGD500</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Weekly</div>
                                        <div class="price-value">SGD600</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Monthly</div>
                                        <div class="price-value">SGD700</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card equipment-card shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=500" alt="Boom Lift">
                        <div class="rating-badge">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>4.0/5</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="equipment-title">2016 Genie Z-45/25J DC Electric Articulating Boom Lift</h5>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="location-icon"></span>
                            <span class="location-text">Singapore Mainland</span>
                        </div>
                        <div class="pricing-section">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Daily</div>
                                        <div class="price-value">SGD500</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Weekly</div>
                                        <div class="price-value">SGD800</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Monthly</div>
                                        <div class="price-value">SGD1200</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card equipment-card shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1614613535308-eb5fbd3d2c17?w=500" alt="Floor Polishing">
                        <div class="rating-badge">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>4.0/5</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="equipment-title">2022 Klenco CYCLONE S351 Floor Polishing Machine</h5>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="location-icon"></span>
                            <span class="location-text">Singapore Mainland</span>
                        </div>
                        <div class="pricing-section">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Daily</div>
                                        <div class="price-value">SGD80</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Weekly</div>
                                        <div class="price-value">SGD250</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Monthly</div>
                                        <div class="price-value">SGD450</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card equipment-card shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=500" alt="JLG Scissor Lift">
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

            <!-- Card 5 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card equipment-card shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=500" alt="Zoomlion Scissor Lift">
                        <div class="rating-badge">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>4.1/5</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="equipment-title">2023 Zoomlion ZS0607HD Electric Scissor Lift</h5>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="location-icon"></span>
                            <span class="location-text">Singapore Mainland</span>
                        </div>
                        <div class="pricing-section">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Daily</div>
                                        <div class="price-value">SGD350</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Weekly</div>
                                        <div class="price-value">SGD350</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Monthly</div>
                                        <div class="price-value">SGD450</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card equipment-card shadow-sm">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=500" alt="Equipment">
                        <div class="rating-badge">
                            <i class="bi bi-star-fill star-icon"></i>
                            <span>4.5/5</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="equipment-title">2020 Equipment Model Example</h5>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="location-icon"></span>
                            <span class="location-text">Singapore Mainland</span>
                        </div>
                        <div class="pricing-section">
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Daily</div>
                                        <div class="price-value">SGD400</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Weekly</div>
                                        <div class="price-value">SGD500</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-item">
                                        <div class="price-label">Monthly</div>
                                        <div class="price-value">SGD600</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>