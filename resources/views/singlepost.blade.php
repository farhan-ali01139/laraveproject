<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate Sale - Single Post</title>

    <!-- Google Font (same look as original template) -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

    <!-- Your CSS (Bootstrap ke BAAD rakhein) -->
    <link rel="stylesheet" href="../css/blog2.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">

            <a class="navbar-brand logo" href="#">
                <i class="fa-solid fa-house-chimney"></i> Estate Sale
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">

                <ul class="navbar-nav ms-5">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="listing.html">Listing</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Property</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Single property.html">Single Property</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Blog standard.html">Blog Standard</a></li>
                            <li><a class="dropdown-item" href="Single post.html">Single Post</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="About us.html">About Us</a></li>
                            <li><a class="dropdown-item" href="Agent single.html">About Agent</a></li>
                            <li><a class="dropdown-item" href="404 page.html">404 Page</a></li>
                            <li><a class="dropdown-item" href="Contact us.html">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="right-menu ms-auto">
                    <button class="add-btn"><i class="fa-solid fa-house"></i> Add listing</button>
                    <i class="fa-solid fa-magnifying-glass menu-icon"></i>
                    <i class="fa-regular fa-moon menu-icon"></i>
                </div>

            </div>
        </div>
    </nav>


    <!-- ================= BREADCRUMB ================= -->
    <div class="breadcrumb-area">
        <div class="container">
            <span>Home</span>
            <i class="fa-solid fa-angle-right"></i>
            <span>Blog</span>
            <i class="fa-solid fa-angle-right"></i>
            <strong>Single Post</strong>
        </div>
    </div>


    <!-- ================= POST + SIDEBAR ================= -->
    <section class="blog-section">
        <div class="container">
            <div class="row g-5">

                <!-- Article -->
                <div class="col-lg-8">
                    <article class="single-post">

                        <h1>Why we are the best in the real estate business</h1>

                        <div class="post-info">
                            <div class="author">
                                <div class="author-img"><img src="../images/16.png" alt="Author"></div>
                                <span>by</span>
                                <strong><i class="fa-regular fa-user"></i> Antichous</strong>
                                <span><i class="fa-regular fa-calendar"></i> Oct 20, 2020</span>
                            </div>

                            <div class="social-icons">
                                <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="google"><i class="fa-brands fa-google"></i></a>
                            </div>
                        </div>

                        <img src="../images/19.png" class="main-post-image" alt="Real Estate">

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, amet fuga
                            harum nulla laborum aliquid maxime accusamus vitae quas minima nisi facere quidem
                            omnis perferendis voluptatum corrupti, voluptatem aperiam quod.
                        </p>

                        <p>
                            It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                            that it has a more-or-less normal distribution of letters.
                        </p>

                        <p>
                            Lorem ipsum as their default model text, and a search for lorem ipsum will uncover
                            many web sites still in their infancy. Various versions have evolved over the
                            years, sometimes by accident, sometimes on purpose.
                        </p>

                        <p>
                            When you decide to put your business online it is a little tricky step for novice
                            computer users because they want to keep data safe &amp; secure. This problem
                            developed from companies which did not take security seriously.
                        </p>

                        <blockquote>
                            <h3>
                                "Discuss the solution goals and constraints. i.e, What we want to see happen
                                and what we have to work with to make it happen."
                            </h3>
                            <span>— Alexander smith</span>
                        </blockquote>

                        <p>
                            The SCO trick is to draw traffic with desirable content, and to reduce the traffic
                            into portions of the site that may not directly have anything to do with the content.
                        </p>

                        <h2>Why we are the best in the real estate business</h2>

                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, amet fuga
                            harum nulla laborum aliquid maxime accusamus vitae quas minima nisi facere quidem omnis.
                        </p>

                        <div class="image-text">
                            <img src="../images/2.png" alt="Property">
                            <p>
                                Vestibulum feugiat tortor vitae diam euismod, ut et inter dum nisi fermentum.
                                Pellentesque sed sodales nunc. Vestibulum laoreet erat nisi, sit amet ultrices.
                                <br><br>
                                Vestibulum feugiat tortor vitae diam euismod, ut et interdum nisi fermentum.
                                Pellentesque sed sodales nunc.
                            </p>
                        </div>

                        <h2>Mosaic gallery fringilla velaliquet nec.</h2>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui quia repudiandae
                            ducimus minus itaque magni laboriosam sapiente eos.
                        </p>

                    </article>
                </div>


                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="sidebar">

                        <div class="sidebar-box">
                            <h3>Latest Post</h3>

                            <div class="side-post">
                                <img src="../images/6.png" alt="">
                                <div>
                                    <h4>Why we are the best in the business</h4>
                                    <span>Oct 20, 2020 - 2 comments</span>
                                </div>
                            </div>

                            <div class="side-post">
                                <img src="../images/7.png" alt="">
                                <div>
                                    <h4>Build your next landing page.</h4>
                                    <span>Oct 21, 2020 - 2 comments</span>
                                </div>
                            </div>

                            <div class="side-post">
                                <img src="../images/4.png" alt="">
                                <div>
                                    <h4>Simply the best. Better than the rest.</h4>
                                    <span>Oct 19, 2020 - 2 comments</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3>Categories</h3>
                            <ul class="category-list">
                                <li>Services Insights</li>
                                <li>Company Insights</li>
                                <li>Uncategorized</li>
                            </ul>
                        </div>

                        <div class="sidebar-box">
                            <h3>Popular Post</h3>

                            <div class="side-post">
                                <img src="../images/4.png" alt="">
                                <div>
                                    <h4>Why we are the best in the business</h4>
                                    <span>Oct 19, 2020 - 2 comments</span>
                                </div>
                            </div>

                            <div class="side-post">
                                <img src="../images/5.png" alt="">
                                <div>
                                    <h4>Build your next landing page.</h4>
                                    <span>Oct 20, 2020 - 2 comments</span>
                                </div>
                            </div>

                            <div class="side-post">
                                <img src="../images/7.png" alt="">
                                <div>
                                    <h4>Simply the best. Better than the rest.</h4>
                                    <span>Oct 21, 2020 - 2 comments</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-box">
                            <h3>Tags</h3>
                            <div class="tags">
                                <span>Listing</span>
                                <span>Property</span>
                                <span>Rent</span>
                                <span>Sale</span>
                                <span>Estate</span>
                                <span>Villa</span>
                                <span>Home</span>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>


    <!-- ================= PREV/NEXT + COMMENTS + REPLY ================= -->
    <section class="comments-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Prev / Next Post -->
                    <div class="post-nav">

                        <a href="#" class="post-nav-item prev">
                            <span class="post-nav-label"><i class="fa-solid fa-arrow-left"></i> Prev Post</span>
                            <div class="post-nav-body">
                                <img src="../images/6.png" alt="Previous post">
                                <h4>Why we are the best in the real estate business</h4>
                            </div>
                        </a>

                        <a href="#" class="post-nav-item next">
                            <span class="post-nav-label">Next Post <i class="fa-solid fa-arrow-right"></i></span>
                            <div class="post-nav-body">
                                <h4>Retail banks wake up to digital lending this year</h4>
                                <img src="../images/7.png" alt="Next post">
                            </div>
                        </a>

                    </div>


                    <!-- Comments -->
                    <h2 class="comments-title">Comments</h2>

                    <div class="comment">
                        <img src="../images/16.png" alt="Bradley" class="comment-avatar">
                        <div class="comment-box">
                            <h4>Bradley</h4>
                            <p class="comment-date">21 Oct 2020 / <a href="#">Reply</a></p>
                            <p class="comment-text">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            </p>
                        </div>
                    </div>

                    <div class="comment">
                        <img src="../images/17.png" alt="Harold" class="comment-avatar">
                        <div class="comment-box">
                            <h4>Harold</h4>
                            <p class="comment-date">22 Oct 2020 / <a href="#">Reply</a></p>
                            <p class="comment-text">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            </p>

                            <!-- Nested reply -->
                            <div class="comment reply">
                                <img src="../images/18.png" alt="Dennis Jack" class="comment-avatar">
                                <div class="comment-box">
                                    <h4>Dennis Jack</h4>
                                    <p class="comment-date">22 Oct 2020 / <a href="#">Reply</a></p>
                                    <p class="comment-text">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel ante. Cras
                                        purus odio, in vulputate at.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment">
                        <img src="../images/17.png" alt="Anthony" class="comment-avatar">
                        <div class="comment-box">
                            <h4>Anthony</h4>
                            <p class="comment-date">23 Oct 2020 / <a href="#">Reply</a></p>
                            <p class="comment-text">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                turpis. Fusce condimentum nunc ac nisi vulputate.
                            </p>
                        </div>
                    </div>


                    <!-- Leave a reply -->
                    <h2 class="comments-title reply-title">Leave a reply</h2>

                    <form class="reply-form" action="#" method="post">
                        <textarea placeholder="Your Message" rows="4"></textarea>

                        <div class="form-row-2">
                            <input type="text" placeholder="Your Name*" required>
                            <input type="email" placeholder="Email*" required>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="submit-btn">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
        <div class="container">

            <div class="row footer-row">

                <div class="col-lg-4 footer-col">
                    <i class="fa-solid fa-comments footer-icon"></i>
                    <span class="footer-label">FREE CONSULTATION</span>
                    <h3>Schedule a free consultation with our specialist.</h3>
                    <a href="#" class="footer-btn">Schedule now <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="col-lg-4 footer-col">
                    <i class="fa-solid fa-phone footer-icon"></i>
                    <span class="footer-label">HELP DESK</span>
                    <h3>Do you have questions or want more information? Call Now</h3>
                    <a href="tel:+1234567811" class="footer-phone">+1-2345-678-11</a>
                </div>

                <div class="col-lg-4 footer-col newsletter-col">
                    <h3>Signup for newsletter</h3>
                    <p>and get latest news and updates</p>

                    <form class="newsletter-form" action="#" method="post">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>

                    <div class="follow">
                        <h3>Follow us</h3>
                        <a href="#" class="s-twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="s-facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="s-linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="s-instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

            </div>

            <div class="footer-copy">
                © 2020 Estate sale. All rights reserved | Designed by W3layouts
            </div>

        </div>
    </footer>


    <!-- ================= BACK TO TOP ================= -->
    <a href="#" class="back-top"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>