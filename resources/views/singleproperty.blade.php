<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estate Sale - Property</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/singleproperty.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">

            <a class="navbar-brand logo" href="#">
                <i class="fa-solid fa-house"></i>
                Estate Sale
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="listing.html">Listing</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="property.html">
                            Property
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Blog
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Pages
                        </a>
                    </li>

                </ul>

                <a href="#" class="add-btn">
                    <i class="fa-solid fa-house"></i>
                    Add listing
                </a>

                <i class="fa-solid fa-magnifying-glass nav-icon"></i>
                <i class="fa-regular fa-moon nav-icon"></i>

            </div>
        </div>
    </nav>


    <!-- ================= BREADCRUMB ================= -->

    <div class="breadcrumb-area">
        <div class="container">
            <p>
                Home
                <span>›</span>
                Property
                <span>›</span>
                <strong>Property Single</strong>
            </p>
        </div>
    </div>


    <!-- ================= PROPERTY HEADER ================= -->

    <section class="property-section">

        <div class="container">

            <div class="property-top">

                <div class="property-info">

                    <div class="property-status">
                        <span>Buy</span>
                        <span>Rent</span>

                        <small>
                            <i class="fa-regular fa-clock"></i>
                            5 months ago
                        </small>

                        <small>
                            <i class="fa-regular fa-eye"></i>
                            250 views
                        </small>
                    </div>

                    <h1>
                        A digital prescription for the pharma industry
                    </h1>

                    <div class="property-meta">

                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            San Francisco, CA 94102
                        </span>

                        <span>
                            <i class="fa-solid fa-bed"></i>
                            3 Beds
                        </span>

                        <span>
                            <i class="fa-solid fa-bath"></i>
                            4 Baths
                        </span>

                        <span>
                            <i class="fa-solid fa-expand"></i>
                            1258 sqft
                        </span>

                    </div>

                </div>

                <div class="price">
                    $25,0045
                </div>

            </div>


            <!-- ================= IMAGE + AGENT ================= -->

            <div class="row g-4">

                <div class="col-lg-8">

                    <div class="main-image">

                        <img src="../images/1.png" alt="Property">

                        <button class="slider-btn left">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>

                        <button class="slider-btn right">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>

                    </div>

                </div>


                <div class="col-lg-4">

                    <div class="agent-card">

                        <h3>Contact an Agent</h3>

                        <div class="agent">

                            <img src="../images/8.png" alt="Agent">

                            <div>
                                <h4>Company realty</h4>
                                <p>+12 324 567 89</p>
                                <p>companyrealty@mail.com</p>
                            </div>

                        </div>

                        <button class="request-btn">
                            Request details
                        </button>

                    </div>

                </div>

            </div>


            <!-- ================= DESCRIPTION ================= -->

            <div class="row content-row">

                <div class="col-lg-8">

                    <div class="content-box">

                        <h2>Description</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Various versions have evolved over the years,
                            sometimes by accident, sometimes on purpose.
                        </p>

                        <p>
                            When you decide to put your business online it is a
                            little tricky step for novice computer users because
                            they want to keep data safe and secure.
                        </p>

                    </div>


                    <!-- ================= PROPERTY DETAIL ================= -->

                    <div class="content-box">

                        <h2>Property detail</h2>

                        <div class="details-grid">

                            <p><strong>Property id:</strong> PRPT12345</p>
                            <p><strong>Property size:</strong> 1200 sqft</p>
                            <p><strong>Rooms:</strong> 2</p>

                            <p><strong>Bedrooms:</strong> 5</p>
                            <p><strong>Bathrooms:</strong> 2</p>
                            <p><strong>Exterior material:</strong> Brick</p>

                            <p><strong>Structure type:</strong> Wood</p>
                            <p><strong>Garage size:</strong> 15 cars</p>
                            <p><strong>Garages:</strong> 15</p>

                            <p><strong>Property Price:</strong> $750</p>
                            <p><strong>Built Year:</strong> 2018</p>
                            <p><strong>Available from:</strong> Aug 2019</p>

                        </div>

                    </div>


                    <!-- ================= AMENITIES ================= -->

                    <div class="content-box">

                        <h2>Amenities</h2>

                        <div class="amenities-grid">

                            <span>Air Conditioning</span>
                            <span>Built-In Wardrobes</span>
                            <span>Dishwasher</span>

                            <span>Floor Coverings</span>
                            <span>Medical / Clinic</span>
                            <span>Fencing</span>

                            <span>Internet and wifi</span>

                        </div>

                    </div>


                    <!-- ================= LOCATION ================= -->

                    <div class="content-box">

                        <h2>Location</h2>

                        <div class="map">
                            <iframe src="https://www.google.com/maps?q=New%20York&output=embed" loading="lazy">
                            </iframe>
                        </div>

                    </div>


                    <!-- ================= VIDEO ================= -->

                    <div class="content-box">

                        <h2>Video</h2>

                        <div class="video-box">

                            <img src="../images/9.png" alt="Video">

                            <div class="play-button">
                                <i class="fa-solid fa-play"></i>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- ================= SIDEBAR ================= -->

                <div class="col-lg-4">

                    <div class="sidebar-box">

                        <h3>Popular Post</h3>

                        <div class="post">

                            <img src="../images/2.png">

                            <div>
                                <h4>Why we are the best in the business</h4>
                                <small>Sep 09, 2020 - 2 comments</small>
                            </div>

                        </div>

                        <div class="post">

                            <img src="3.png">

                            <div>
                                <h4>Build your next landing page.</h4>
                                <small>Sep 09, 2020 - 2 comments</small>
                            </div>

                        </div>

                        <div class="post">

                            <img src="4.png">

                            <div>
                                <h4>Simply the best. Better than the rest.</h4>
                                <small>Sep 10, 2020 - 2 comments</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="container">

            <div class="footer-grid">

                <div>
                    <i class="fa-solid fa-comments footer-icon"></i>

                    <h5>FREE CONSULTATION</h5>

                    <h3>
                        Schedule a free consultation
                        with our specialist.
                    </h3>

                    <button>Schedule now →</button>
                </div>


                <div>

                    <i class="fa-solid fa-phone footer-icon"></i>

                    <h5>HELP DESK</h5>

                    <h3>
                        Do you have questions or
                        want more information?
                    </h3>

                    <strong class="phone">
                        +1-2345-678-11
                    </strong>

                </div>


                <div>

                    <h3>Signup for newsletter</h3>

                    <p>and get latest news and updates</p>

                    <div class="newsletter">

                        <input type="email" placeholder="Enter your email">

                        <button>Subscribe</button>

                    </div>

                    <h3>Follow us</h3>

                    <div class="social">

                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-instagram"></i>

                    </div>

                </div>

            </div>

            <hr>

            <p class="copyright">
                © 2026 Estate Sale. All rights reserved.
            </p>

        </div>

    </footer>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>