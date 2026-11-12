<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estate Sale - Real Estate Category</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../css/landingpage.css">
</head>

<body>

  <!-- NAVBAR -->
  <header class="navbar" id="navbar">
    <div class="wrap nav-in">
      <a href="#" class="logo"><i class="fa-solid fa-house"></i> Estate Sale</a>
      <input type="checkbox" id="menu"><label for="menu" class="burger"><i class="fa-solid fa-bars"></i></label>
      <nav class="links">
        <a href="{{route('index')}}" class="active">Home</a>
        <a href="#properties">Properties</a>
        <div class="dd"><a href="#">Blocks <i class="fa-solid fa-chevron-down"></i></a>
          <div class="dd-menu"><a href="#">Block One</a><a href="#">Block Two</a></div>
        </div>
        <div class="dd"><a href="#">More <i class="fa-solid fa-chevron-down"></i></a>
          <div class="dd-menu"><a href="About us.html">About Us</a><a href="Agent us.html">Agents</a><a
              href="#">Blog</a></div>
        </div>
        <a href="Contact us.html">Contact us</a>
      </nav>
      <div class="nav-r">
        <a href="#contact" class="btn"><i class="fa-solid fa-house"></i> Add listing</a>
        <i class="fa-solid fa-magnifying-glass ico"></i>
        <i class="fa-regular fa-moon ico"></i>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-in">
      <p class="tag">It's great to be home!</p>
      <h1>Find a property today</h1>
      <div class="most"><strong>Most Searches</strong><a href="#">Villa</a><a href="#">Apartment</a><a href="#">Private
          house</a></div>
      <form class="search" onsubmit="return false">
        <input type="text" placeholder="Enter keywords">
        <select>
          <option>Office</option>
          <option>Villa</option>
          <option>Apartment</option>
          <option>Shop</option>
        </select>
        <select>
          <option>Select Country</option>
          <option>Pakistan</option>
          <option>USA</option>
          <option>UK</option>
        </select>
        <button>Search</button>
      </form>
    </div>
    <div class="scroll"><i class="fa-solid fa-chevron-down"></i><span>Scroll</span></div>
  </section>

  <!-- PROPERTIES -->
  <section class="sec grey" id="properties">
    <div class="wrap grid3">
      <a href="#" class="prop"><img src="../images/2.png" alt="">
        <div class="tags"><span>Buy</span><span>Rent</span></div>
        <div class="pt">
          <h3>$25,00,000</h3>
          <p>51 Merrick Way, Coral Gables, USA</p>
        </div>
      </a>
      <a href="#" class="prop"><img src="../images/3.png" alt="">
        <div class="tags"><span>Buy</span><span>Rent</span></div>
        <div class="pt">
          <h3>$37,00,000</h3>
          <p>51 Merrick Way, Coral Gables, USA</p>
        </div>
      </a>
      <a href="#" class="prop"><img src="../images/4.png" alt="">
        <div class="tags"><span>Buy</span><span>Rent</span></div>
        <div class="pt">
          <h3>$41,00,000</h3>
          <p>51 Merrick Way, Coral Gables, USA</p>
        </div>
      </a>
      <a href="#" class="prop"><img src="../images/5.png" alt="">
        <div class="tags"><span>Buy</span><span>Rent</span></div>
        <div class="pt">
          <h3>$19,00,000</h3>
          <p>51 Merrick Way, Coral Gables, USA</p>
        </div>
      </a>
      <a href="#" class="prop"><img src="../images/6.png" alt="">
        <div class="tags"><span>Buy</span><span>Rent</span></div>
        <div class="pt">
          <h3>$26,00,000</h3>
          <p>51 Merrick Way, Coral Gables, USA</p>
        </div>
      </a>
      <a href="#" class="prop"><img src="../images/7.png" alt="">
        <div class="tags"><span>Buy</span><span>Rent</span></div>
        <div class="pt">
          <h3>$34,00,000</h3>
          <p>51 Merrick Way, Coral Gables, USA</p>
        </div>
      </a>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="sec">
    <div class="wrap grid3 center">
      <div class="svc"><i class="fa-solid fa-house"></i>
        <h3>Buy a home</h3>
        <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci.</p><a
          href="#" class="more">Read More <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="svc"><i class="fa-solid fa-house"></i>
        <h3>Rent a home</h3>
        <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci.</p><a
          href="#" class="more">Read More <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="svc"><i class="fa-regular fa-building"></i>
        <h3>See neighbourhoods</h3>
        <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci.</p><a
          href="#" class="more">Read More <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="sec grey">
    <div class="wrap split card">
      <img src="../images/8.png" alt="" class="cover">
      <div class="split-t">
        <small>ABOUT US</small>
        <h2>Our long-standing experience</h2>
        <p class="lead">We have over 15 year experience, Over 20,000 people work for us in more than 70 countries all
          over the world. Lorem ipsum viverra feugiat dolor sit amet.</p>
        <p class="muted">Viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel lorem
          ipsum. Lorem ipsum viverra feugiat dolor sit amet primis in faucibus orci.</p>
        <a href="#" class="story"><span class="play"><i class="fa-solid fa-play"></i></span> See Our Story</a>
      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="sec grey pt0">
    <div class="wrap grid3">
      <div class="feat"><i class="fa-solid fa-house"></i>
        <h3>Guidance you need</h3>
        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed et dolor amet.</p>
      </div>
      <div class="feat"><i class="fa-solid fa-magnifying-glass-plus"></i>
        <h3>Search that feels familiar</h3>
        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor et amet.</p>
      </div>
      <div class="feat"><i class="fa-solid fa-dollar-sign"></i>
        <h3>Premium values</h3>
        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor et amet.</p>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="sec">
    <div class="wrap split why">
      <img src="../images/9.png" alt="" class="cover round">
      <div class="split-t">
        <small>WHY US</small>
        <h2>To help members become more profitable and successful</h2>
        <p class="muted">We have over 15 year experience in business consulting arena. Learn more about our work! Lorem
          ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at tempufddfel</p>
        <ul class="ticks">
          <li>Help sellers get the most for their properties</li>
          <li>Help sellers price their properties fairly</li>
          <li>Help buyers find the property that fits their needs</li>
          <li>Avoid over paying by strategically negotiating purchase</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="stats">
    <div class="wrap grid4">
      <div><b>5012 <em>+</em></b><span>Homes For Sale</span></div>
      <div><b>256 <em>+</em></b><span>Homes For Rent</span></div>
      <div><b>1300 <em>+</em></b><span>Recently Sold</span></div>
      <div><b>145 <em>k</em></b><span>Happy Clients</span></div>
    </div>
  </section>

  <!-- AGENTS -->
  <section class="sec grey">
    <div class="head"><small>OUR TEAM</small>
      <h2>Meet our Agents</h2>
    </div>
    <div class="wrap grid4">
      <div class="agent"><img src="../images/16.png" alt=""><small>Selling Agent</small>
        <h4>Laura Antiochus</h4>
        <p>+1-2345-678-11</p><a href="#" class="outline">View Profile</a>
      </div>
      <div class="agent"><img src="../images/17.png" alt=""><small>Selling Agent</small>
        <h4>Laura Antiochus</h4>
        <p>+1-2345-678-11</p><a href="#" class="outline">View Profile</a>
      </div>
      <div class="agent"><img src="../images/18.png" alt=""><small>Selling Agent</small>
        <h4>Laura Antiochus</h4>
        <p>+1-2345-678-11</p><a href="#" class="outline">View Profile</a>
      </div>
      <div class="agent"><img src="../images/17.png" alt=""><small>Selling Agent</small>
        <h4>Laura Antiochus</h4>
        <p>+1-2345-678-11</p><a href="#" class="outline">View Profile</a>
      </div>
    </div>
  </section>

  <!-- EXTRA -->
  <section class="sec">
    <div class="wrap grid3 extra">
      <div><i class="fa-solid fa-magnifying-glass-plus"></i><small>ALL IN ONE PLACE</small>
        <h3>Your One-Stop Shop for Finding Your Dream Home</h3>
        <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor in orci.</p><a href="#" class="more">Search for
          home <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div><i class="fa-regular fa-user"></i><small>CONNECT TO AN AGENT</small>
        <h3>Schedule a Free, No-Obligation Appointment</h3>
        <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor in orci.</p><a href="#" class="more">Find an
          agent <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div><i class="fa-solid fa-house"></i><small>GET A HOME VALUATION</small>
        <h3>Understand the Value of Your Property</h3>
        <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor in orci.</p><a href="#" class="more">Submit info
          <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- BLOG -->
  <section class="sec grey">
    <div class="head">
      <h2>Tips and Advices</h2>
    </div>
    <div class="wrap grid3">
      <article class="post">
        <div class="date"><b>2020</b><strong>16</strong><span>October</span></div><img src="2.png" alt="">
        <div class="pc"><a href="#" class="cat">Uncategorized</a>
          <h3>Retail banks wake up to digital lending this year</h3>
          <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
        </div>
      </article>
      <article class="post">
        <div class="date"><b>2020</b><strong>19</strong><span>October</span></div><img src="7.png" alt="">
        <div class="pc"><a href="#" class="cat">Uncategorized</a>
          <h3>A digital prescription for the pharma industry</h3>
          <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
        </div>
      </article>
      <article class="post">
        <div class="date"><b>2020</b><strong>20</strong><span>October</span></div><img src="3.png" alt="">
        <div class="pc"><a href="#" class="cat">Uncategorized</a>
          <h3>Harvest great ideas from your company's best assets</h3>
          <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
        </div>
      </article>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="sec grey pb0" id="contact">
    <div class="wrap contact">
      <form class="card form" onsubmit="return false">
        <h3>Get in touch</h3>
        <p class="muted">Your email address will not be published. Required fields are marked *</p>
        <div class="row"><input placeholder="Your Name"><input type="email" placeholder="Email"></div>
        <textarea rows="4" placeholder="Message"></textarea>
        <label class="chk"><input type="checkbox"> Save my name, email, and website in this browser for the next time I
          comment</label>
        <button class="btn">Submit</button>
      </form>
      <aside class="card info">
        <h3>Our Office Address</h3>
        <p class="muted"><i class="fa-solid fa-location-dot"></i> Estate sale office, 32, My Street, Kingston, New York
          12401.</p>
        <h3>Phone information</h3>
        <p class="muted"><i class="fa-solid fa-mobile-screen"></i> <b>Phone :</b> (+1) 366 411 499</p>
        <p class="muted"><i class="fa-solid fa-phone"></i> <b>Tel :</b> (+1) 366 411 499</p>
        <p class="muted"><i class="fa-solid fa-envelope"></i> <b>Email :</b> mail@example.com</p>
      </aside>
    </div>
  </section>

  <iframe class="map" title="Map" loading="lazy" src="https://www.google.com/maps?q=New+York&output=embed"></iframe>

  <div class="wrap logos"><span>JEFF &amp; JAN BRUNO</span><span>AMYROSESMITH</span><span>DAVE
      SCHURHOFF</span><span>michelle robichaud</span><span>Sue Layng</span><span>EMILY ESTRADA</span></div>

  <!-- FOOTER -->
  <footer>
    <div class="wrap fgrid">
      <div class="fb"><i class="fa-solid fa-comments g"></i><small>FREE CONSULTATION</small>
        <h3>Schedule a free consultation with our specialist.</h3><a href="#" class="btn">Schedule now <i
            class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="fb"><i class="fa-solid fa-phone g"></i><small>HELP DESK</small>
        <h3>Do you have questions or want more infomation? Call Now</h3><strong>+1-2345-678-11</strong>
      </div>
      <div class="fb nb">
        <h3>Signup for newsletter</h3>
        <p class="muted">and get latest news and updates</p>
        <form class="news" onsubmit="return false"><input type="email"
            placeholder="Enter your email"><button>Subscribe</button></form>
        <div class="follow">
          <h3>Follow us</h3><a class="tw"><i class="fa-brands fa-twitter"></i></a><a class="fbk"><i
              class="fa-brands fa-facebook-f"></i></a><a class="in"><i class="fa-brands fa-linkedin-in"></i></a><a
            class="ig"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="wrap copy">© 2020 Estate sale. All rights reserved | Designed by W3layouts</div>
  </footer>

  <a href="#" class="top"><i class="fa-solid fa-arrow-up"></i></a>

  <script>
    const nb = document.getElementById('navbar');
    const f = () => nb.classList.toggle('solid', scrollY > 60);
    addEventListener('scroll', f); f();
  </script>
</body>

</html>