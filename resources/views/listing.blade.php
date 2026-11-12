<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate Sale - Property Listing</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Your CSS (Bootstrap ke BAAD) -->
    <link rel="stylesheet" href="../css/listing.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->    <nav class="navbar navbar-expand-lg estate-navbar">
        <div class="container">

            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-house house-icon"></i> Estate Sale
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav ms-lg-5 me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('listing')}}">Listing</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="property.html" data-bs-toggle="dropdown">Property</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Single Property</a></li>
                            <li><a class="dropdown-item" href="#">Property Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Blog Standard</a></li>
                            <li><a class="dropdown-item" href="#">Single Post</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">About Agent</a></li>
                            <li><a class="dropdown-item" href="#">Contact Us</a></li>
                            <li><a class="dropdown-item" href="#">404 Page</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="nav-right">
                    <a href="#" class="add-listing"><i class="fa-solid fa-house"></i> Add listing</a>
                    <button class="icon-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button class="icon-button"><i class="fa-regular fa-moon"></i></button>
                </div>

            </div>
        </div>
    </nav>


    <!-- ================= TOP BANNER ================= -->
    <div class="top-banner"></div>


    <!-- ================= BREADCRUMB ================= -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-content">
                <a href="#">Home</a>
                <i class="fa-solid fa-angle-right"></i>
                <strong>Listing</strong>
            </div>
        </div>
    </section>


    <!-- ================= PROPERTY LISTINGS ================= -->
    <section class="property-section">
        <div class="container">
            <div class="row">

                <!-- 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/2.png" alt="Cottage Villa">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$25,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Cottage villa</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/16.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/3.png" alt="Sand House">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$32,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Sand house</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/17.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/5.png" alt="Extension Villa">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$47,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Extension villa</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/18.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/2.png" alt="Corner House">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$19,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Corner house</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/16.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/3.png" alt="Beach House">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$34,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Beach House</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/17.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/5.png" alt="Modern Villa">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$29,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Modern villa</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/18.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/2.png" alt="Beach House">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$38,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Beach House</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/16.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="../images/3.png" alt="Cottage Villa">
                            <div class="property-badges"><span>Buy</span><span>Rent</span></div>
                            <div class="property-price">$51,00,000</div>
                        </div>
                        <div class="property-content">
                            <h2>Cottage villa</h2>
                            <p class="address">Unnamed Road, Vegas, NV 89103.</p>
                            <div class="property-details">
                                <span><i class="fa-solid fa-bed"></i> 1 Bed</span>
                                <span><i class="fa-solid fa-shower"></i> 2 Baths</span>
                                <span><i class="fa-solid fa-maximize"></i> 1760 Sqft</span>
                            </div>
                            <div class="agent">
                                <div class="agent-image"><img src="../images/17.png" alt="Agent"></div>
                                <div>
                                    <h4>Laura Antiochus</h4>
                                    <p>Selling agent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="pagination-box">
                <a href="#" class="page active">1</a>
                <a href="#" class="page">2</a>
                <a href="#" class="page">3</a>
                <span class="page dots">...</span>
                <a href="#" class="page">15</a>
                <a href="#" class="page next">Next <i class="fa-solid fa-angle-right"></i></a>
            </div>

        </div>
    </section>


    <!-- ================= FOOTER ================= -->
    <section class="footer-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 footer-col">
                    <i class="fa-solid fa-comments footer-icon"></i>
                    <p class="orange-text">FREE CONSULTATION</p>
                    <h3>Schedule a free consultation with our specialist.</h3>
                    <a href="#" class="schedule-button">Schedule now <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="col-lg-4 footer-col">
                    <i class="fa-solid fa-phone footer-icon"></i>
                    <p class="orange-text">HELP DESK</p>
                    <h3>Do you have questions or want more information? Call Now</h3>
                    <a href="tel:+12345678911" class="phone-number">+1-2345-678-11</a>
                </div>

                <div class="col-lg-4 footer-col newsletter">
                    <h2>Signup for newsletter</h2>
                    <p>and get latest news and updates</p>

                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>

                    <div class="social-links">
                        <strong>Follow us</strong>
                        <a href="#" class="s-twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="s-facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="s-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="s-instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="copyright">
        <div class="container">
            <p>© 2020 Estate sale. All rights reserved | Designed by W3layouts</p>
        </div>
    </footer>


    <!-- ================= BACK TO TOP ================= -->
    <a href="#" class="back-to-top"><i class="fa-solid fa-arrow-up"></i></a>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Navbar: scroll par white -->
    <script>
        const nav = document.querySelector('.estate-navbar');
        const toggleNav = () => nav.classList.toggle('scrolled', window.scrollY > 60);
        window.addEventListener('scroll', toggleNav);
        toggleNav();
    </script>

</body>

</html>