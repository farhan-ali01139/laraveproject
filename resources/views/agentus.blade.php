<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estate Sale - Agents</title>
  <link rel="stylesheet" href="../css/agent.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>

<body>

  <header class="header">
    <div class="nav container">
      <a class="brand" href="#"><i class="fa-solid fa-house"></i> Estate Sale</a>

      <input type="checkbox" id="menu-toggle">
      <label class="menu-toggle" for="menu-toggle"><i class="fa-solid fa-bars"></i></label>

      <nav class="links">
        <a href="{{route('index')}}">Home</a>
        <a href="listing.html">Listing</a>

        <div class="drop">
          <a href="#">Property <i class="fa-solid fa-chevron-down"></i></a>
          <div class="drop-menu"><a href="Single property.html">Single Property</a></div>
        </div>

        <div class="drop">
          <a href="#">Blog <i class="fa-solid fa-chevron-down"></i></a>
          <div class="drop-menu"><a href="Blog standard.html">Blog Standard</a><a href="Single post.html">Single
              Post</a></div>
        </div>

        <div class="drop">
          <a class="current" href="#">Pages <i class="fa-solid fa-chevron-down"></i></a>
          <div class="drop-menu">
            <a href="About us.html">About Us</a><a href="Agent us.html">Agent page</a><a href="Agent single.html">Agent
              single</a>
            <a href="404 page.html">404 Page</a><a href="Contact us.html">Contact Us</a><a
              href="Landing page.html">Landing page</a>
          </div>
        </div>
      </nav>

      <div class="nav-actions">
        <a class="add-listing" href="#">⌂ Add listing</a>
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="fa-regular fa-moon"></i>
      </div>
    </div>
  </header>

  <section class="crumb-bar">
    <div class="crumb container">
      <a href="#">Home</a><span>›</span><a href="#">Pages</a><span>›</span><b>Agents Page</b>
    </div>
  </section>

  <main class="container page">

    <section class="agents-area">
      <div class="agent-grid">

        <article class="agent">
          <img src="../images/16.png" alt="Agent">
          <div class="agent-body">
            <span>Selling Agent</span>
            <h2>Laura Antiochus</h2>
            <p>+1-2345-678-11</p>
            <a class="profile" href="#">View Profile</a>
          </div>
        </article>

        <article class="agent">
          <img src="../images/17.png" alt="Agent">
          <div class="agent-body">
            <span>Selling Agent</span>
            <h2>Laura Antiochus</h2>
            <p>+1-2345-678-11</p>
            <a class="profile" href="#">View Profile</a>
          </div>
        </article>

        <article class="agent">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=900&q=80"
            alt="Agent">
          <div class="agent-body">
            <span>Selling Agent</span>
            <h2>Laura Antiochus</h2>
            <p>+1-2345-678-11</p>
            <a class="profile" href="#">View Profile</a>
          </div>
        </article>

        <article class="agent">
          <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=900&q=80"
            alt="Agent">
          <div class="agent-body">
            <span>Selling Agent</span>
            <h2>Laura Antiochus</h2>
            <p>+1-2345-678-11</p>
            <a class="profile" href="#">View Profile</a>
          </div>
        </article>

      </div>
    </section>

    <aside class="sidebar">

      <div class="join-card">
        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1000&q=80"
          alt="House">
        <div class="join-overlay">
          <h2>Do you want to join our real estate network?</h2>
          <a href="#">Get started</a>
        </div>
      </div>

      <div class="side-box news">
        <a class="news-item" href="#">
          <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=250&q=80">
          <div>
            <h3>How to start a real estate business</h3><small>Oct 19, 2020 - 2 comments</small>
          </div>
        </a>
        <a class="news-item" href="#">
          <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=250&q=80">
          <div>
            <h3>Build your next landing page.</h3><small>Oct 20, 2020 - 2 comments</small>
          </div>
        </a>
        <a class="news-item" href="#">
          <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?auto=format&fit=crop&w=250&q=80">
          <div>
            <h3>Simply the best. Better than the rest.</h3><small>Oct 21, 2020 - 2 comments</small>
          </div>
        </a>
      </div>

      <div class="side-box featured">
        <h2>Featured agents</h2>
        <div class="featured-agent">
          <img src="../images/https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=250&q=80">
          <div><b>Johnson kerald</b>
            <p>Kerald@gmail.com</p>
          </div>
        </div>
        <div class="featured-agent">
          <img src="../images/https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=250&q=80">
          <div><b>Sarah Wilson</b>
            <p>Sarah@gmail.com</p>
          </div>
        </div>
      </div>

    </aside>
  </main>

  <footer>
    <div class="container footer-grid">
      <div class="footer-col">
        <i class="fa-solid fa-comments footer-icon"></i>
        <span>FREE CONSULTATION</span>
        <h2>Schedule a free consultation<br>with our specialist.</h2>
        <a class="orange-button" href="#">Schedule now →</a>
      </div>

      <div class="footer-col">
        <i class="fa-solid fa-phone footer-icon"></i>
        <span>HELP DESK</span>
        <h2>Do you have questions or<br>want more information?<br>Call Now</h2>
        <strong>+1-2345-678-11</strong>
      </div>

      <div class="footer-col newsletter-col">
        <h2>Signup for newsletter</h2>
        <p>and get latest news and updates</p>
        <div class="newsletter">
          <input type="email" placeholder="Enter your email">
          <button>Subscribe</button>
        </div>
        <div class="social">
          <b>Follow us</b>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-linkedin-in"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
      </div>
    </div>
    <div class="copyright container">© 2020 Estate sale. All rights reserved | Designed by W3layouts</div>
  </footer>

  <a class="back-top" href="#">↑</a>
</body>

</html>