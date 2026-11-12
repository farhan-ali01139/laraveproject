<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate Sale</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->
<header class="navbar">
    <div class="nav-container">

        <a href="index.html" class="logo">
            <i class="fa-solid fa-house"></i>
            Estate Sale
        </a>

        <input type="checkbox" id="menu">
        <label for="menu" class="menu-icon">
            <i class="fa-solid fa-bars"></i>
        </label>

        <nav class="nav-links">

            <a href="{{route('index')}}" class="active">Home</a>
            <a href="{{route('listing')}}">Listing</a>

            <div class="dropdown">
                <a href="property.html">
                    Property
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('singleproperty')}}">Single Property</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="#">
                    Blog
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('blogstandard')}}">Blog Standard</a>
                    <a href="{{route('singlepost')}}">Single Post</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="#">
                    Pages
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <div class="dropdown-menu">
                    <a href="{{route('aboutus')}}">About Us</a>
                    <a href="{{route('agentus')}}">Agent page</a>
                    <a href="{{route('agentsingle')}}">Agent single</a>
                    <a href="{{route('page')}}">404 Page</a>
                    <a href="{{route('contactus')}}">Contact Us</a>
                    <a href="{{route('landingpage')}}">Landing page</a>
                </div>
            </div>

        </nav>

        <div class="nav-right">

            <a href="#contact" class="add-btn">
                <i class="fa-solid fa-house"></i>
                Add listing
            </a>

            <i class="fa-solid fa-magnifying-glass nav-icon"></i>
            <i class="fa-regular fa-moon nav-icon"></i>

        </div>

    </div>
</header>


<!-- ================= HERO ================= -->
<section class="hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <p>It's great to be home!</p>

        <h1>Find a property today</h1>

        <div class="search-title">
            <strong>Most Searches</strong>
            <a href="#">Villa</a>
            <a href="#">Apartment</a>
            <a href="#">Private house</a>
        </div>

        <div class="search-box">

            <input type="text" placeholder="Enter keywords">

            <select>
                <option>Office</option>
                <option>Villa</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Shop</option>
            </select>

            <select>
                <option>Select Country</option>
                <option>Pakistan</option>
                <option>America</option>
                <option>India</option>
                <option>France</option>
                <option>UK</option>
            </select>

            <button>Search</button>

        </div>

    </div>

    <div class="scroll">
        <span></span>
        <p>Scroll</p>
    </div>

</section>


<!-- ================= TOP PROPERTIES ================= -->
<section class="section" id="properties">

    <div class="section-title">
        <h2>Top Properties</h2>
    </div>

    <div class="container property-grid">
         @foreach($crud as $data)
         
        <div class="property-card">    
            <img src="{{ asset('upload/' . $data->image) }}" alt="Property">
            <div class="card-overlay"></div>
            <div class="property-text">
            <h3>{{$data->price}}</h3>
            <p>{{$data->tittle}}</p>
            </div>
        </div>
        @endforeach


        <div class="property-card">
            <img src="../images/3.png" alt="Property">
            <div class="card-overlay"></div>
            <div class="property-text">
                <h3>$37,00,000</h3>
                <p>51 Merrick Way, Coral Gables, USA</p>
            </div>
        </div>

        <div class="property-card">
            <img src="../images/4.png" alt="Property">
            <div class="card-overlay"></div>
            <div class="property-text">
                <h3>$41,00,000</h3>
                <p>51 Merrick Way, Coral Gables, USA</p>
            </div>
        </div>

        <div class="property-card">
            <img src="../images/5.png" alt="Property">
            <div class="card-overlay"></div>
            <div class="property-text">
                <h3>$19,00,000</h3>
                <p>51 Merrick Way, Coral Gables, USA</p>
            </div>
        </div>

        <div class="property-card">
            <img src="../images/6.png" alt="Property">
            <div class="card-overlay"></div>
            <div class="property-text">
                <h3>$26,00,000</h3>
                <p>51 Merrick Way, Coral Gables, USA</p>
            </div>
        </div>

        <div class="property-card">
            <img src="../images/7.png" alt="Property">
            <div class="card-overlay"></div>
            <div class="property-text">
                <h3>$34,00,000</h3>
                <p>51 Merrick Way, Coral Gables, USA</p>
            </div>
        </div>

    </div>
</section>


<!-- ================= ABOUT ================= -->
<section class="about section">

    <div class="container about-container">

        <div class="about-image">
            <img src="../images/8.png" alt="About">
        </div>

        <div class="about-content">

            <span class="small-title">WHO WE ARE</span>

            <h2>
                The experts in local and
                international property
            </h2>

            <p>
                We have over 15 year experience, Over 20,000 people
                work for us in more than 70 countries all over the world.
                Learn more about our work! Lorem ipsum vive dolor sit amet.
            </p>

            <p>
                Viverra feugiat. Pellen tesque libero ut justo,
                ultrices in ligula. Semper at tempufddfel lorem ipsum.
            </p>

            <div class="checks">

                <div>
                    <p>✓ Outstanding property</p>
                    <p>✓ Get expert advice</p>
                    <p>✓ Specialist services</p>
                </div>

                <div>
                    <p>✓ Social responsibility</p>
                    <p>✓ Group structure</p>
                    <p>✓ Vision & strategy</p>
                </div>

            </div>

            <a href="#" class="orange-btn">
                Discover our services
            </a>

        </div>

    </div>

</section>


<!-- ================= SERVICES ================= -->
<section class="section services">

    <div class="container services-grid">

        <div class="service">
            <i class="fa-solid fa-house"></i>

            <h2>Buy a home</h2>

            <p>
                Vivamus a ligula quam. Ut blandit eu leo non.
                Duis sed dolor amet ipsum primis in faucibus orci.
            </p>

            <a href="#">Read More →</a>
        </div>


        <div class="service">
            <i class="fa-solid fa-house"></i>

            <h2>Rent a home</h2>

            <p>
                Vivamus a ligula quam. Ut blandit eu leo non.
                Duis sed dolor amet ipsum primis in faucibus orci.
            </p>

            <a href="#">Read More →</a>
        </div>


        <div class="service">
            <i class="fa-solid fa-building"></i>

            <h2>See neighbourhoods</h2>

            <p>
                Vivamus a ligula quam. Ut blandit eu leo non.
                Duis sed dolor amet ipsum primis in faucibus orci.
            </p>

            <a href="#">Read More →</a>
        </div>

    </div>

</section>


<!-- ================= LOCATIONS ================= -->
<section class="locations section">

    <div class="section-title">
        <span>EXPLORE CITIES</span>
        <h2>Popular Locations lllllllll</h2>
    </div>

    <div class="container location-grid">
         @foreach($locations as $datas)
        <div class="location-card location1"
             style="background-image: url('{{ asset('upload/' . $datas->image) }}');">

            <h3>{{ $datas->Title }}</h3>
            <p>{{ $datas->Subtittle }}</p>

        </div>
    @endforeach

        
        <div class="location-card location2">
            <h3>California</h3>
            <p>4 listings</p>
        </div>

        <div class="location-card location3">
            <h3>Las Vegas</h3>
            <p>4 listings</p>
        </div>

        <div class="location-card location4">
            <h3>Malaysia</h3>
            <p>4 listings</p>
        </div>

        <div class="location-card location5">
            <h3>Paris</h3>
            <p>4 listings</p>
        </div>

        <div class="location-card location6">
            <h3>New Jersey</h3>
            <p>4 listings</p>
        </div>

        <div class="location-card location7">
            <h3>France</h3>
            <p>4 listings</p>
        </div>

        <div class="location-card location8">
            <h3>Newyork</h3>
            <p>4 listings</p>
        </div>

    </div>

</section>


<!-- ================= CLIENT ================= -->
<section class="section">

    <div class="container client-container">

        <div class="client-image">
            <img src="../images/9.png" alt="Client">
        </div>

        <div class="client-content">

            <span class="small-title">OUR CLIENTS</span>

            <h2>We value client relationships</h2>

            <h3>John Wilson</h3>

            <p class="position">
                Communication executive
            </p>

            <blockquote>
                “OMG! I cannot believe that I have got a property new
                private house after getting villa. It was very comfortable.
                I can't say enough about Real Estate.”
            </blockquote>

            <a href="#" class="orange-btn">
                Contact our agents
            </a>

        </div>

    </div>

</section>


<!-- ================= EXTRA SERVICES ================= -->
<section class="section extra-services">

    <div class="container services-grid">

        <div class="extra">
            <i class="fa-solid fa-magnifying-glass-plus"></i>

            <span>ALL IN ONE PLACE</span>

            <h2>
                Your One-Stop Shop for
                Finding Your Dream Home
            </h2>

            <p>
                Vivamus a ligula quam. Ut blandit eu leo non.
                Duis sed dolor in orci.
            </p>

            <a href="#">Search for home →</a>
        </div>


        <div class="extra">
            <i class="fa-regular fa-user"></i>

            <span>CONNECT TO AN AGENT</span>

            <h2>
                Schedule a Free,
                No-Obligation Appointment
            </h2>

            <p>
                Vivamus a ligula quam. Ut blandit eu leo non.
                Duis sed dolor in orci.
            </p>

            <a href="#">Find an agent →</a>
        </div>


        <div class="extra">
            <i class="fa-solid fa-house"></i>

            <span>GET A HOME VALUATION</span>

            <h2>
                Understand the Value
                of Your Property
            </h2>

            <p>
                Vivamus a ligula quam. Ut blandit eu leo non.
                Duis sed dolor in orci.
            </p>

            <a href="#">Submit info →</a>
        </div>

    </div>

</section>


<!-- ================= BLOG ================= -->
<section class="section blog">

    <div class="section-title">
        <h2>Tips and Advices</h2>
    </div>

    <div class="container blog-grid">

        <article class="blog-card">

            <div class="blog-img">
                <img src="../images/2.png" alt="Blog">
            </div>

            <div class="date">
                <b>2020</b>
                <strong>16</strong>
                <span>October</span>
            </div>

            <div class="blog-content">
                <span>Uncategorized</span>

                <h2>
                    Retail banks wake up to
                    digital lending this year
                </h2>

                <p>
                    Lorem ipsum dolor sit amet ad minus libero
                    ullam ipsam quas earum!
                </p>
            </div>

        </article>


        <article class="blog-card">

            <div class="blog-img">
                <img src="../images/3.png" alt="Blog">
            </div>

            <div class="date">
                <b>2020</b>
                <strong>19</strong>
                <span>October</span>
            </div>

            <div class="blog-content">
                <span>Uncategorized</span>

                <h2>
                    A digital prescription
                    for the pharma industry
                </h2>

                <p>
                    Lorem ipsum dolor sit amet ad minus libero
                    ullam ipsam quas earum!
                </p>
            </div>

        </article>


        <article class="blog-card">

            <div class="blog-img">
                <img src="../images/4.png" alt="Blog">
            </div>

            <div class="date">
                <b>2020</b>
                <strong>20</strong>
                <span>October</span>
            </div>

            <div class="blog-content">
                <span>Uncategorized</span>

                <h2>
                    Harvest great ideas from
                    your company's best assets
                </h2>

                <p>
                    Lorem ipsum dolor sit amet ad minus libero
                    ullam ipsam quas earum!
                </p>
            </div>

        </article>

    </div>

</section>



<!-- LOGOS -->
<section class="brands">
  <div class="wrap brands-row">

    <div class="brand b1">
      <i class="fa-solid fa-house-chimney-window"></i>
      <b>JEFF &amp; JAN BRUNO</b>
      <small>REALTORS</small>
    </div>

    <div class="brand b2">
      <div class="blocks"><span></span><span></span><span></span></div>
      <b>AMYROSE<strong>SMITH</strong></b>
    </div>

    <div class="brand b3">
      <span class="sq"><i class="fa-solid fa-s"></i></span>
      <div><b>DAVE<br>SCHURHOFF</b><small>REALTOR</small></div>
    </div>

    <div class="brand b4">
      <span class="ny">NY</span>
      <b>michelle robichaud</b>
      <small>REALTOR</small>
    </div>

    <div class="brand b5">
      <span class="script">Sue Layng</span>
      <small>REALTOR<sup>®</sup></small>
    </div>

    <div class="brand b6">
      <i class="fa-solid fa-border-none"></i>
      <b>EMILY ESTRADA</b>
      <small>realtor</small>
    </div>

  </div>
</section>














<!-- ================= FOOTER ================= -->
<footer id="contact">

    <div class="container footer-grid">

        <div class="footer-box">

            <i class="fa-solid fa-comments"></i>

            <span>FREE CONSULTATION</span>

            <h2>
                Schedule a free consultation
                with our specialist.
            </h2>

            <a href="#" class="orange-btn">
                Schedule now →
            </a>

        </div>


        <div class="footer-box">

            <i class="fa-solid fa-phone"></i>

            <span>HELP DESK</span>

            <h2>
                Do you have questions or
                want more information?
                Call Now
            </h2>

            <strong>+1-2345-678-11</strong>

        </div>


        <div class="footer-box">

            <h2>Signup for newsletter</h2>

            <p>and get latest news and updates</p>

            <div class="newsletter">

                <input type="email"
                       placeholder="Enter your email">

                <button>
                    Subscribe
                </button>

            </div>

            <h2>
                Follow us
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-instagram"></i>
            </h2>

        </div>

    </div>


    <div class="copyright">
        © 2020 Estate sale. All rights reserved |
        Designed by W3layouts
    </div>

</footer>


<a href="#" class="top-btn">↑</a>

</body>
</html>