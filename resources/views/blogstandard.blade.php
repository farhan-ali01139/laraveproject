<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estate Sale - Blog</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/Blog.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="container nav-content">

            <div class="logo">
                <i class="fa-solid fa-house"></i>
                <span>Estate Sale</span>
            </div>

            <nav>
                <a href="{{route('index')}}">Home</a>
                <a href="listing.html">Listing</a>

                <a href="Single property.html">
                    Property <i class="fa-solid fa-chevron-down"></i>
                </a>

                <a href="Blog standard.html" class="active">
                    Blog <i class="fa-solid fa-chevron-down"></i>
                </a>

                <a href="#">
                    Pages <i class="fa-solid fa-chevron-down"></i>
                </a>
            </nav>

            <div class="nav-right">

                <button class="add-btn">
                    <i class="fa-solid fa-house"></i>
                    Add listing
                </button>

                <i class="fa-solid fa-magnifying-glass nav-icon"></i>

                <i class="fa-regular fa-moon nav-icon"></i>

            </div>

        </div>

    </header>


    <!-- ================= BREADCRUMB ================= -->

    <section class="breadcrumb">

        <div class="container">

            <span>Home</span>
            <i class="fa-solid fa-angle-right"></i>

            <span>Blog</span>
            <i class="fa-solid fa-angle-right"></i>

            <strong>Blog Standard</strong>

        </div>

    </section>


    <!-- ================= BLOG AREA ================= -->

    <section class="blog-section">

        <div class="container blog-layout">


            <!-- ========== LEFT BLOG ========== -->

            <main class="blog-content">

                <div class="blog-grid">


                    <!-- BLOG CARD 1 -->

                    <article class="blog-card">

                        <div class="blog-image">

                            <img src="../images/1.png" alt="House">

                            <div class="date-box">
                                <span>2020</span>
                                <strong>16</strong>
                                <small>October</small>
                            </div>

                        </div>

                        <div class="blog-info">

                            <p class="category">
                                Uncategorized
                            </p>

                            <h2>
                                Retail banks wake up to digital
                                lending this year
                            </h2>

                            <p class="description">
                                Lorem ipsum dolor sit amet ad minus
                                libero ullam ipsam quas earum!
                            </p>

                        </div>

                    </article>


                    <!-- BLOG CARD 2 -->

                    <article class="blog-card">

                        <div class="blog-image">

                            <img src="../images/2.png" alt="House">

                            <div class="date-box">
                                <span>2020</span>
                                <strong>19</strong>
                                <small>October</small>
                            </div>

                        </div>

                        <div class="blog-info">

                            <p class="category">
                                Uncategorized
                            </p>

                            <h2>
                                A digital prescription for the
                                pharma industry
                            </h2>

                            <p class="description">
                                Lorem ipsum dolor sit amet ad minus
                                libero ullam ipsam quas earum!
                            </p>

                        </div>

                    </article>


                    <!-- BLOG CARD 3 -->

                    <article class="blog-card">

                        <div class="blog-image">

                            <img src="../images/3.png" alt="Property">

                            <div class="date-box">
                                <span>2020</span>
                                <strong>20</strong>
                                <small>October</small>
                            </div>

                        </div>

                        <div class="blog-info">

                            <p class="category">
                                Uncategorized
                            </p>

                            <h2>
                                Modern homes and better
                                living spaces
                            </h2>

                            <p class="description">
                                Lorem ipsum dolor sit amet ad minus
                                libero ullam ipsam quas earum!
                            </p>

                        </div>

                    </article>


                    <!-- BLOG CARD 4 -->

                    <article class="blog-card">

                        <div class="blog-image">

                            <img src="../images/5.png" alt="Property">

                            <div class="date-box">
                                <span>2020</span>
                                <strong>19</strong>
                                <small>October</small>
                            </div>

                        </div>

                        <div class="blog-info">

                            <p class="category">
                                Uncategorized
                            </p>

                            <h2>
                                A digital prescription for the
                                pharma industry
                            </h2>

                            <p class="description">
                                Lorem ipsum dolor sit amet ad minus
                                libero ullam ipsam quas earum!
                            </p>

                        </div>

                    </article>


                    <!-- BLOG CARD 5 -->

                    <article class="blog-card">

                        <div class="blog-image">

                            <img src="../images/6.png" alt="Building">

                            <div class="date-box">
                                <span>2020</span>
                                <strong>22</strong>
                                <small>October</small>
                            </div>

                        </div>

                        <div class="blog-info">

                            <p class="category">
                                Uncategorized
                            </p>

                            <h2>
                                Retail banks wake up to digital
                                lending this year
                            </h2>

                            <p class="description">
                                Lorem ipsum dolor sit amet ad minus
                                libero ullam ipsam quas earum!
                            </p>

                        </div>

                    </article>


                    <!-- BLOG CARD 6 -->

                    <article class="blog-card">

                        <div class="blog-image">

                            <img src="../images/7.png" alt="Villa">

                            <div class="date-box">
                                <span>2020</span>
                                <strong>21</strong>
                                <small>October</small>
                            </div>

                        </div>

                        <div class="blog-info">

                            <p class="category">
                                Uncategorized
                            </p>

                            <h2>
                                Beautiful homes for modern
                                families
                            </h2>

                            <p class="description">
                                Lorem ipsum dolor sit amet ad minus
                                libero ullam ipsam quas earum!
                            </p>

                        </div>

                    </article>

                </div>


                <!-- ========== PAGINATION ========== -->

                <div class="pagination">

                    <a href="#" class="selected">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">...</a>
                    <a href="#">15</a>
                    <a href="#" class="next">Next <i class="fa-solid fa-angle-right"></i></a>

                </div>

            </main>


            <!-- ========== SIDEBAR ========== -->

            <aside class="sidebar">


                <!-- SEARCH -->

                <div class="side-box">

                    <h2>Search here</h2>

                    <div class="search-box">

                        <input type="text" placeholder="Search...">

                        <button>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                    </div>

                </div>


                <!-- CATEGORIES -->

                <div class="side-box">

                    <h2>Blog Categories</h2>

                    <ul class="category-list">

                        <li>Multimedia Insights</li>
                        <li>Industry Insights</li>
                        <li>Partner Insights</li>
                        <li>Company Insights</li>

                    </ul>

                </div>


                <!-- LATEST POSTS -->

                <div class="side-box">

                    <h2>Latest Post</h2>


                    <div class="latest-post">

                        <img src="../images/3.png" alt="Post">

                        <div>
                            <h3>
                                Why we are the best in
                                the business
                            </h3>

                            <p>
                                Oct 19, 2020 - 2 comments
                            </p>
                        </div>

                    </div>


                    <div class="latest-post">

                        <img src="../images/5.png" alt="Post">

                        <div>
                            <h3>
                                Build your next landing
                                page.
                            </h3>

                            <p>
                                Oct 20, 2020 - 2 comments
                            </p>
                        </div>

                    </div>


                    <div class="latest-post">

                        <img src="../images/6.png" alt="Post">

                        <div>
                            <h3>
                                Simply the best. Better
                                than the rest.
                            </h3>

                            <p>
                                Oct 21, 2020 - 2 comments
                            </p>
                        </div>

                    </div>

                </div>


                <!-- TAGS -->

                <div class="side-box">

                    <h2>Tags</h2>

                    <div class="tags">

                        <a href="#">Listing</a>
                        <a href="#">Property</a>
                        <a href="#">Rent</a>
                        <a href="#">Sale</a>
                        <a href="#">Estate</a>
                        <a href="#">Villa</a>
                        <a href="#">Home</a>

                    </div>

                </div>

            </aside>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>

        <div class="container footer-top">


            <div class="footer-column">

                <i class="fa-regular fa-comments footer-icon"></i>

                <p class="orange">
                    FREE CONSULTATION
                </p>

                <h3>
                    Schedule a free consultation
                    with our specialist.
                </h3>

                <button class="footer-btn">
                    Schedule now
                    <i class="fa-solid fa-arrow-right"></i>
                </button>

            </div>


            <div class="footer-column">

                <i class="fa-solid fa-phone footer-icon"></i>

                <p class="orange">
                    HELP DESK
                </p>

                <h3>
                    Do you have questions or
                    want more information?
                    Call Now
                </h3>

                <h2 class="phone">
                    +1-2345-678-11
                </h2>

            </div>


            <div class="footer-column newsletter">

                <h2>
                    Signup for newsletter
                </h2>

                <p>
                    and get latest news and updates
                </p>

                <div class="subscribe">

                    <input type="email" placeholder="Enter your email">

                    <button>
                        Subscribe
                    </button>

                </div>

                <h3>Follow us</h3>

                <div class="social">

                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                </div>

            </div>

        </div>


        <div class="copyright">

            © 2026 Estate Sale. All rights reserved.

        </div>

    </footer>


    <!-- BACK TO TOP -->

    <a href="#" class="top-btn">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

</body>

</html>