<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate Sale - About Us</title>

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../css/about.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg estate-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class="fa-solid fa-house house-icon"></i> Estate Sale</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-lg-5 me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="listing.html">Listing</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Property</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Single property.html">Single Property</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Blog standard.html">Blog Standard</a></li>
                            <li><a class="dropdown-item" href="Single post.html">Single Post</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="About us.html">About Us</a></li>
                            <li><a class="dropdown-item" href="Agent us.html">About page</a></li>
                            <li><a class="dropdown-item" href="Contact us.html">Contact Us</a></li>
                            <li><a class="dropdown-item" href="404 page.html">404 Page</a></li>
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


    <!-- ================= BANNER + BREADCRUMB ================= -->
    <div class="top-banner"></div>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-content">
                <a href="index.html">Home</a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="#" class="crumb-dark">Pages</a>
                <i class="fa-solid fa-angle-right"></i>
                <strong>About Us</strong>
            </div>
        </div>
    </section>


    <!-- ================= ABOUT INTRO CARD ================= -->
    <section class="about-section">
        <div class="container">
            <div class="about-card">

                <div class="about-card-img"><img src="../images/9.png" alt="About us"></div>

                <div class="about-card-body">
                    <span class="label-small">About Us</span>
                    <h2>Our long-standing experience</h2>

                    <p class="lead-text">
                        We have over 15 year experience, Over 20,000 people work for us in more
                        than 70 countries all over the world. Lorem ipsum viverra feugiat dolor sit amet.
                    </p>

                    <p class="sub-text">
                        Viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                        tempufddfel lorem ipsum. Lorem ipsum viverra feugiat dolor sit amet primis in faucibus orci.
                    </p>

                    <a href="#" class="story-link">
                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" stroke="#ff9d2e" stroke-width="2"
                            stroke-linejoin="round">
                            <circle cx="31" cy="31" r="29.5" />
                            <polygon points="25,20 25,42 43,31" />
                        </svg>
                        See Our Story
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= 3 FEATURES ================= -->
    <section class="feature-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-house"></i>
                        <h3>Guidance you need</h3>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed et
                            dolor amet.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                        <h3>Search that feels familiar</h3>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et amet.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h3>Premium values</h3>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et amet.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= WHY US ================= -->
    <section class="why-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <img src="../images/17.png" alt="Why us" class="why-img">
                </div>

                <div class="col-lg-6">
                    <span class="label-small">Why Us</span>
                    <h2 class="why-title">To help members become more profitable and successful</h2>

                    <p class="sub-text">
                        We have over 15 year experience in business consulting arena. Learn more
                        about our work! Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel
                    </p>

                    <ul class="check-list">
                        <li><i class="fa-solid fa-check"></i> Help sellers get the most for their properties</li>
                        <li><i class="fa-solid fa-check"></i> Help sellers price their properties fairly</li>
                        <li><i class="fa-solid fa-check"></i> Help buyers find the property that fits their needs</li>
                        <li><i class="fa-solid fa-check"></i> Avoid over paying by strategically negotiating purchase
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= MEET OUR AGENTS ================= -->
    <section class="agents-section">
        <div class="container">

            <div class="section-head">
                <span class="label-team">Our Team</span>
                <h2>Meet our Agents</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="agent-card">
                        <img src="../images/18.png" alt="Agent">
                        <div class="agent-card-body">
                            <p class="role">Selling Agent</p>
                            <h4>Laura Antiochus</h4>
                            <p class="phone">+1-2345-678-11</p>
                            <a href="#" class="view-btn">View Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="agent-card">
                        <img src="../images/17.png" alt="Agent">
                        <div class="agent-card-body">
                            <p class="role">Selling Agent</p>
                            <h4>Laura Antiochus</h4>
                            <p class="phone">+1-2345-678-11</p>
                            <a href="#" class="view-btn">View Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="agent-card">
                        <img src="../images/18.png" alt="Agent">
                        <div class="agent-card-body">
                            <p class="role">Selling Agent</p>
                            <h4>Laura Antiochus</h4>
                            <p class="phone">+1-2345-678-11</p>
                            <a href="#" class="view-btn">View Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="agent-card">
                        <img src="../images/16.png" alt="Agent">
                        <div class="agent-card-body">
                            <p class="role">Selling Agent</p>
                            <h4>Laura Antiochus</h4>
                            <p class="phone">+1-2345-678-11</p>
                            <a href="#" class="view-btn">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ================= STATS ================= -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-6">
                    <h3>1,250+</h3>
                    <p>Homes For Sale</p>
                </div>
                <div class="col-lg-3 col-6">
                    <h3>980+</h3>
                    <p>Homes For Rent</p>
                </div>
                <div class="col-lg-3 col-6">
                    <h3>2,400+</h3>
                    <p>Recently Sold</p>
                </div>
                <div class="col-lg-3 col-6">
                    <h3>5,000+</h3>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </section>


    <!-- ================= FOOTER ================= -->
    <section class="footer-section">
        <div class="container">
            <div class="row">

                <div class="footer-col fc1">
                    <i class="fa-solid fa-comments footer-icon"></i>
                    <p class="orange-text">FREE CONSULTATION</p>
                    <h3>Schedule a free consultation with our specialist.</h3>
                    <a href="#" class="schedule-button">Schedule now <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="footer-col fc2">
                    <i class="fa-solid fa-phone footer-icon"></i>
                    <p class="orange-text">HELP DESK</p>
                    <h3>Do you have questions or want more infomation? Call Now</h3>
                    <a href="tel:+12345678911" class="phone-number">+1-2345-678-11</a>
                </div>

                <div class="footer-col fc3">
                    <h2 class="news-title">Signup for newsletter</h2>
                    <p class="news-sub">and get latest news and updates</p>

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

    <a href="#" class="back-to-top" aria-label="Back to top">⤴</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const nav = document.querySelector('.estate-navbar');
        const toggleNav = () => nav.classList.toggle('scrolled', window.scrollY > 60);
        window.addEventListener('scroll', toggleNav);
        toggleNav();
    </script>

</body>

</html>