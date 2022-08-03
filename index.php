<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KT's Red Light Blog</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body class="light-theme">

  <!--
    - #HEADER
  -->

  <header>

    <div class="container">

      <nav class="navbar">

        <a href="#kt">
          <img src="./assets/images/logo-light.png" alt="KT's Logo" width="150" class="logo-light">
          <img src="./assets/images/logo-dark.png" alt="KT's Logo" width="150" class="logo-dark">
        </a>

        <div class="btn-group">

          <button class="theme-btn theme-btn-mobile light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

          <button class="nav-menu-btn">
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

        <div class="flex-wrapper">

          <ul class="desktop-nav">

            <li>
              <a href="#kt" class="nav-link">Home</a>
            </li>

            <li>
              <a href="pl_h.html" class="nav-link">About Me</a>
            </li>

            <li>
              <a href="pl_h.html" class="nav-link">Contact</a>
            </li>

          </ul>

          <button class="theme-btn theme-btn-desktop light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

        </div>

        <div class="mobile-nav">

          <button class="nav-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <div class="wrapper">

            <p class="h3 nav-title">Main Menu</p>

            <ul>
              <li class="nav-item">
                <a href="#kt" class="nav-link">Home</a>
              </li>

              <li class="nav-item">
                <a href="pl_h.html" class="nav-link">About Me</a>
              </li>

              <li class="nav-item">
                <a href="pl_h.html" class="nav-link">Contact</a>
              </li>
            </ul>

          </div>

          <div>

            <p class="h3 nav-title">Topics</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Database</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Accessibility</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Web Performance</a>
              </li>
            </ul>

          </div>

        </div>

      </nav>

    </div>

  </header>





  <main>

    <!--
      - #HERO SECTION
    -->

    <div class="hero" id="kt">

      <div class="container">

        <div class="left">

          <h1 class="h1">
            Hi, I'm <b>Kukhanya&nbsp;Tsabedze</b>.
            <br>Web Developer
          </h1>

          <p class="h3">
            Specialized in <abbr title="Accessibility">Full stack web development</abbr>
            and Core Web Vitals
          </p>

          <div class="btn-group">
            <a href="pl_h.html" class="btn btn-primary">Contact Me</a>
            <a href="pl_h.html" class="btn btn-secondary">About Me</a>
          </div>

        </div>

        <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="./assets/images/hero.png" alt="Kukhanya Tsabedze" class="hero-img">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div>

      </div>

    </div>





    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Latest Blog Post</h2>

          <div class="blog-card-group">

            <!-- <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-1.png" alt="Building microservices with Dropwizard, MongoDB & Docker"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3>
                  <a href="#" class="h3">
                    Building microservices with Dropwizard, MongoDB & Docker
                  </a>
                </h3>

                <p class="blog-text">
                  This NoSQL database oriented to documents (by documents like JSON) combines some of the features from
                  relational
                  databases, easy to use and the multi-platform is the best option for scale up and have fault
                  tolerance, load balancing,
                  map reduce, etc.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia Walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Julia Walker</a>

                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 17, 2022</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div> -->


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-2.png" alt="Fast web page loading on a $20 feature phone" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">How we help your Business</button>

                <h3><a href="" class="h3">The Red Light Inc is Available to make a perfect Website for your company </a></h3>

                <p class="blog-text">
                  We make Responsive and secure WEBSITES, Prices Varries from the kind of website our client
                  admires.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="KT" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-12-10"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-3.png" alt="Accessibility Tips for Web Developers" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Accessibility Tips for Web Developers</a></h3>

                <p class="blog-text">
                  It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key
                  areas of
                  disability we can optimize for: visual, hearing, mobility, cognition, speech and neural. Many tools
                  and resources can
                  help here, even if you're totally new to web accessibility.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="KT" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-11-28"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-4.png" alt="Dynamically Securing Databases using Hashicorp Vault"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Dynamically Securing Databases using Hashicorp Vault</a></h3>

                <p class="blog-text">
                  Nowadays, it's hard to profoundly talk about security in the IT industry, since it has to be
                  considered on so many
                  different levels: from securing code chunks, securing containers, up to securing complex
                  infrastructures and defining
                  strong authorization and authentication policies across the enterprise.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="KT" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-11-20"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-5.png"
                  alt="Adaptive Loading - Improving Web Performance on low-end devices" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Adaptive Loading - Improving Web Performance on low-end devices</a></h3>

                <p class="blog-text">
                  Adaptive Loading: Do not just respond based on screen size, adapt based on actual device hardware.
                  Any user can have a slow experience. In a world with widely varying device capabilities, a "one-size"
                  fits all
                  experience may not always work. Sites that delight users on high-end devices can be unusable on
                  low-end ones,
                  particularly on median mobile and desktop hardware and in emerging markets.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="KT" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-11-10"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-6.png"
                  alt="Don't Develop Just for Yourself - A Developer's Checklist to Accessibility" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">Don't Develop Just for Yourself - A Developer's Checklist to Accessibility</a>
                </h3>

                <p class="blog-text">
                  We, as developers, tend to develop sites unconsciously for people like ourselves. If we don't actively
                  pay attention,
                  the sites are often accessible only for certain types of people: Sighted mouse-users, who have good
                  fine motor skills
                  and are good at using computers.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Kukhanya Tsabedze" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-10-25"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <!-- <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-7.png"
                  alt="Building a Restful CRUD API with Node JS, Express, and MongoDB" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">Building a Restful CRUD API with Node JS, Express, and MongoDB</a></h3>

                <p class="blog-text">
                  Application Programming Interface is the abbreviation for API. An API is a software interface that
                  enables two apps to
                  communicate with one another. In other words, an API is a messenger that sends your request to the
                  provider and then
                  returns the response to you.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="KT" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-10-15"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div> -->


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-8.png" alt="Monitoring Performance with the PageSpeed Insights API"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Web Performance</button>

                <h3><a href="" class="h3">Monitoring Performance with the PageSpeed Insights API</a></h3>

                <p class="blog-text">
                  The PageSpeed Insights API provides free access to performance monitoring for web pages and returns
                  data with
                  suggestions for how to improve. The V5 API includes lab data from Lighthouse and real-world data from
                  the Chrome User
                  Experience Report (CrUX).
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-10-03"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT5M">5 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-9.png" alt="The best web accessibility tools for developers in 2021"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="" class="h3">The best web accessibility tools for developers in 2021</a>
                </h3>

                <p class="blog-text">
                  The quality of the tools you use defines the speed with which you can diagnose and resolve problems.
                  Each year the landscape changes dramatically in web technologies, and of late the tooling for
                  accessibility is no
                  exception.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Kukhanya Tsabedze" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-09-13"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT7M">7 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>


            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-10.png"
                  alt="How to connect a React frontend with a NodeJS/Express backend" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Database</button>

                <h3><a href="" class="h3">How to connect a React frontend with a NodeJS/Express backend</a></h3>

                <p class="blog-text">
                  The (mySQL, MySQLite, React, NodeJS) stack is very popular for making full stack applications,
                  utilizing
                  Javascript for both the backend and frontend as well as a relational database.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Kukhanya Tsabedze" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Kukhanya Tsabedze</a>

                    <p class="text-sm">
                      <time datetime="2021-09-21"><span id='date-time'></span></time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

          </div>

          <button class="btn load-more">Load More</button>

        </div>





        <!--
          - ASIDE
        -->

        <div class="aside">

          <div class="topics">

            <h2 class="h2">Topics</h2>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="server-outline"></ion-icon>
              </div>

              <p>Database</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>

              <p>Accessibility</p>
            </a>

            <a href="#" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>

              <p>Web Performance</p>
            </a>

          </div>

          <div class="tags">

            <h2 class="h2">Tags</h2>

            <div class="wrapper">

              <button class="hashtag">#mySQL</button>
              <button class="hashtag">#AngularJS</button>
              <button class="hashtag">#html</button>
              <button class="hashtag">#PHP</button>
              <button class="hashtag">#Java</button>
              <button class="hashtag">#Css</button>
              <button class="hashtag">#Bootstrap</button>
              <button class="hashtag">#Javascript</button>

            </div>

          </div>

          <div class="contact">

            <h2 class="h2">Let's Talk</h2>

            <div class="wrapper">

              <p>
                Do you want to learn more about how I can help your company overcome problems? Let us have a
                conversation.
              </p>

              <ul class="social-link">

                <li>
                  <a href="#" class="icon-box discord">
                    <ion-icon name="logo-discord"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="icon-box facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

          </div>

          <div class="newsletter">

            <h2 class="h2">Send us a message</h2>

            <div class="wrapper">

              <p>
                Please contact us by filling the form below.
              </p>

              <!-- <form action="emaillist.php" method="post">
                <input type="email" name="email" placeholder="kutsabedze@gmail.com" required>

                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form> -->

              <form action="./assets/php/sendmail.php" method="post">
                First Name: <input type="text" name="first_name" required><br>
                Last Name: <input type="text" name="last_name" required><br>
                Email: <input type="text" name="email" placeholder="kutsabedze@gmail.com" required><br>
                Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - #FOOTER
  -->

  <footer>

    <div class="container">

      <div class="wrapper">

        <a href="#" class="footer-logo">
          <img src="./assets/images/logo-light.png" alt="KT's Logo" width="150" class="logo-light">
          <img src="./assets/images/logo-dark.png" alt="KT's Logo" width="150" class="logo-dark">
        </a>

        <p class="footer-text">
          Learn about Web accessibility, Web performance, and Database management.
        </p>

      </div>

      <div class="wrapper">

        <p class="footer-title">Quick Links</p>

        <ul>

          <li>
            <a href="pl_h.html" class="footer-link">Advertise with us</a>
          </li>

          <li>
            <a href="pl_h.html" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="pl_h.html" class="footer-link">Contact Us</a>
          </li>

        </ul>

      </div>

      <div class="wrapper">

        <p class="footer-title">Legal Stuff</p>

        <ul>

          <li>
            <a href="pl_h.html" class="footer-link">Privacy Notice</a>
          </li>

          <li>
            <a href="pl_h.html" class="footer-link">Cookie Policy</a>
          </li>

          <li>
            <a href="pl_h.html" class="footer-link">Terms Of Use</a>
          </li>

        </ul>

      </div>

    </div>

    <p class="copyright">
      &copy; Copyright 2023 <a href="#">RedLightKT</a>
    </p>

  </footer>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- Date Js -->
  <script>
    // var dt = new Date();
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    //var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    var dt = date+' '+time;
    document.getElementById('date-time').innerHTML=dt;
    </script>
    <!-- alert -->
    <script>
      alert("Please note that some parts of the page are under development. For further question plz contact KT on 76789027" );
    </script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>