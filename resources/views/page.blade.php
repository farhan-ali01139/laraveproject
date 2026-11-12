<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estate Sale - Error Page</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/page.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- ================= HEADER ================= -->

    <header class="header">

        <div class="container nav-container">

            <!-- Logo -->
            <a href="#" class="logo">
                <span class="home-icon">
                    <i class="fa-solid fa-house"></i>
                </span>
                <span>Estate Sale</span>
            </a>

            <!-- Navigation -->
            <nav class="navbar">

                <a href="{{route('index')}}">Home</a>

                <a href="listing.html">Listing</a>

                <a href="#">
                    Property
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <a href="#">
                    Blog
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <a href="#" class="active">
                    Pages
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

            </nav>

            <!-- Right Side -->
            <div class="nav-right">

                <a href="listing.html" class="add-listing">
                    <i class="fa-solid fa-house"></i>
                    Add listing
                </a>

                <button class="icon-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                <button class="icon-btn">
                    <i class="fa-regular fa-moon"></i>
                </button>

            </div>

        </div>

    </header>


    <!-- ================= BREADCRUMB ================= -->

    <section class="breadcrumb">

        <div class="container breadcrumb-inner">

            <a href="#">Home</a>

            <span>
                <i class="fa-solid fa-angle-right"></i>
            </span>

            <a href="#">Pages</a>

            <span>
                <i class="fa-solid fa-angle-right"></i>
            </span>

            <strong>Error Page</strong>

        </div>

    </section>


    <!-- ================= ERROR SECTION ================= -->

    <main class="error-section">

        <div class="container error-container">

            <!-- Error Image -->
            <div class="error-image">

                <!-- Replace this image with your own image -->
                <img src="../images/20.png" alt="404 Error">

            </div>

            <!-- Error Text -->
            <h1>Sorry, We Can't Find That Page!</h1>

            <p>
                The page you are looking for was moved, removed,
                renamed or never existed.
            </p>

            <div class="error-buttons">

                <a href="#" class="btn orange-btn">
                    <i class="fa-solid fa-house"></i>
                    Back to Home
                </a>

                <a href="#" class="btn white-btn">
                    Contact Us
                </a>

            </div>

        </div>

    </main>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <div class="container footer-top">

            <!-- Consultation -->
            <div class="footer-box">

                <div class="footer-icon">
                    <i class="fa-regular fa-comments"></i>
                </div>

                <h4>FREE CONSULTATION</h4>

                <h3>
                    Schedule a free consultation
                    with our specialist.
                </h3>

                <a href="#" class="schedule-btn">
                    Schedule now
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>


            <!-- Help Desk -->
            <div class="footer-box">

                <div class="footer-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <h4>HELP DESK</h4>

                <h3>
                    Do you have questions or
                    want more information?
                    Call Now
                </h3>

                <a href="tel:+1234567811" class="phone">
                    +1-2345-678-11
                </a>

            </div>


            <!-- Newsletter -->
            <div class="footer-box newsletter">

                <h2>Signup for newsletter</h2>

                <p>
                    and get latest news and updates
                </p>

                <div class="subscribe">

                    <input type="email" placeholder="Enter your email">

                    <button>
                        Subscribe
                    </button>

                </div>

                <div class="follow">

                    <strong>Follow us</strong>

                    <a href="#" class="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#" class="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="linkedin">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#" class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- Copyright -->
        <div class="container copyright">

            <p>
                © 2026 Estate Sale. All rights reserved |
                Designed by Estate Sale
            </p>

        </div>

    </footer>


    <!-- ================= BACK TO TOP ================= -->

    <a href="#" class="back-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

</body>

</html>