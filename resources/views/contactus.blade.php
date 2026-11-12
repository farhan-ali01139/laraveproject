<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate Sale - Contact Us</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>

    <!-- ================= HEADER ================= -->
    <header class="header">

        <div class="navbar">

            <!-- Logo -->
            <a href="#" class="logo">
                <span class="logo-home">⌂</span>
                Estate Sale
            </a>

            <!-- Navigation -->
            <nav class="nav-menu">
                <a href="{{route('index')}}">Home</a>
                <a href="listing.html">Listing</a>

                <a href="Single property.html" class="dropdown">
                    Property <span>⌄</span>
                </a>

                <a href="Blog standard.html" class="dropdown">
                    Blog <span>⌄</span>
                </a>

                <a href="#" class="active dropdown">
                    Pages <span>⌄</span>
                </a>
            </nav>

            <!-- Right Side -->
            <div class="nav-right">

                <a href="#" class="add-listing">
                    <span>⌂</span> Add listing
                </a>

                <button class="search-btn">⌕</button>

                <button class="moon-btn">☾</button>

            </div>

        </div>

    </header>


    <!-- ================= BREADCRUMB ================= -->
    <section class="breadcrumb">

        <div class="container">

            <span>Home</span>
            <b>›</b>
            <span>Pages</span>
            <b>›</b>
            <strong>Contact Us</strong>

        </div>

    </section>


    <!-- ================= CONTACT AREA ================= -->
    <main>

        <section class="contact-section">

            <div class="container contact-grid">

                <!-- Contact Form -->
                <div class="contact-card">

                    <h2>Get in touch</h2>

                    <p class="intro">
                        Your email address will not be published.
                        Required fields are marked *
                    </p>

                    <form>

                        <div class="input-row">

                            <input type="text" placeholder="Your Name" required>

                            <input type="email" placeholder="Email" required>

                        </div>

                        <textarea placeholder="Message" rows="6"></textarea>

                        <label class="checkbox">

                            <input type="checkbox">

                            <span>
                                Save my name, email, and website in this browser
                                for the next time I comment
                            </span>

                        </label>

                        <button type="submit" class="submit-btn">
                            Submit
                        </button>

                    </form>

                </div>


                <!-- Office Information -->
                <aside class="info-card">

                    <h2>Our Office Address</h2>

                    <div class="address">

                        <span class="icon">⌖</span>

                        <p>
                            Estate sale office, 32, My Street,
                            <br>
                            Kingston, New York 12401.
                        </p>

                    </div>


                    <h2 class="phone-title">
                        Phone information
                    </h2>

                    <div class="contact-info">

                        <p>
                            <span>▯</span>
                            <strong>Phone :</strong>
                            (+1) 366 411 499
                        </p>

                        <p>
                            <span>⌕</span>
                            <strong>Tel :</strong>
                            (+1) 366 411 499
                        </p>

                        <p>
                            <span>✉</span>
                            <strong>Email :</strong>
                            mail@example.com
                        </p>

                    </div>

                </aside>

            </div>

        </section>


        <!-- ================= MAP ================= -->
        <section class="map-section">

            <iframe
                src="https://www.openstreetmap.org/export/embed.html?bbox=-74.25%2C40.55%2C-73.60%2C40.95&layer=mapnik"
                loading="lazy">
            </iframe>

        </section>

    </main>


    <!-- ================= FOOTER ================= -->
    <footer class="footer">

        <div class="container footer-grid">


            <!-- Consultation -->
            <div class="footer-column">

                <div class="footer-icon">
                    ☁
                </div>

                <div class="footer-label">
                    FREE CONSULTATION
                </div>

                <h3>
                    Schedule a free consultation
                    <br>
                    with our specialist.
                </h3>

                <a href="#" class="orange-btn">
                    Schedule now
                    <span>→</span>
                </a>

            </div>


            <!-- Help Desk -->
            <div class="footer-column">

                <div class="footer-icon phone-icon">
                    ☎
                </div>

                <div class="footer-label">
                    HELP DESK
                </div>

                <h3>
                    Do you have questions or
                    <br>
                    want more information?
                    <br>
                    Call Now
                </h3>

                <div class="phone-number">
                    +1-2345-678-11
                </div>

            </div>


            <!-- Newsletter -->
            <div class="footer-column newsletter">

                <h2>
                    Signup for newsletter
                </h2>

                <p>
                    and get latest news and updates
                </p>

                <div class="subscribe-box">

                    <input type="email" placeholder="Enter your email">

                    <button>
                        Subscribe
                    </button>

                </div>


                <div class="follow">

                    <strong>Follow us</strong>

                    <div class="socials">

                        <a href="#">♥</a>
                        <a href="#">f</a>
                        <a href="#">in</a>
                        <a href="#">◎</a>

                    </div>

                </div>

            </div>

        </div>


        <!-- Copyright -->
        <div class="copyright container">

            <p>
                © 2020 Estate sale. All rights reserved |
                Designed by <span>W3layouts</span>
            </p>

        </div>

    </footer>


    <!-- Back To Top -->
    <a href="#" class="back-top">
        ↑
    </a>

</body>

</html>