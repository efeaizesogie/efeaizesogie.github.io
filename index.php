<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Bethany Pie is a pie serving company that is devoted to bringing quality pies with affordable prices to your 
    doorsteps"
    />
    <link rel="stylesheet" type="text/css" href="./resources/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./resources/css/queries.css" />
    <link rel="stylesheet" href="./vendors/css/grid.css" />
    <link rel="stylesheet" href="./vendors/css/animate.css" />
    <link rel="stylesheet" href="./vendors/css/ionicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,100;1,300&family=Noto+Sans+JP:wght@100;300;400&display=swap"
      rel="stylesheet"
    />
    <title>Bethany Pie</title>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/resources/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/resources/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/resources/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="/resources/favicons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="/resources/favicons/safari-pinned-tab.svg"
      color="#5f9fb2"
    />
    <link rel="shortcut icon" href="/resources/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta
      name="msapplication-config"
      content="/resources/favicons/browserconfig.xml"
    />
    <meta name="theme-color" content="#ffffff" />
  </head>

  <body>
    <a class="nav-icon js--mobile-nav"><i class="ion-navicon-round"></i></a>
    <header id="home">
      <nav>
        <div class="row">
          <a href="#home"
            ><img
              src="./resources/img/bethanylogo.png"
              alt="Bethany Pie logo"
              class="logo"
          /></a>

          <ul class="navList">
            <li><a href="index.html">Home</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact-us">Contact Us</a></li>
          </ul>
        </div>
      </nav>
      <div class="hero-section">
        <p>It's not just any pie but</p>
        <h1>Bethany pie</h1>
        <button><a href="#" class="js--order">Order Now</a></button>
      </div>
    </header>

    <section class="sidebar js--sidebar change">
      <ul class="sidebar-nav">
        <li><a href="index.html" data-content="Home">Home</a></li>
        <li><a href="#product" data-content="Product">Product</a></li>
        <li><a href="#blog" data-content="Blog">Blog</a></li>
        <li><a href="#contact-us" data-content="Contact Us">Contact Us</a></li>
      </ul>
      <ul class="sidebar-link">
        <li>
          <a href="#"><i class="ion-social-facebook icons"></i></a>
        </li>
        <li>
          <a href="#"><i class="ion-social-twitter icons"></i></a>
        </li>
        <li>
          <a href="#"><i class="ion-social-instagram icons"></i></a>
        </li>
        <li>
          <a href="#"><i class="ion-social-googleplus icons"></i></a>
        </li>
      </ul>
    </section>

    <section class="about-section js--section-about" id="blog">
      <div class="about-wrapper js--wp-1">
        <div class="row">
          <h2>About Us</h2>
        </div>
        <div class="about-content">
          <p>
            For many years <strong> Bethany</strong> has been baking the most
            delicous pies at her home. in 2013, we opened our first store in
            Brussel (Belgium) in a cosy little street near the Grand Market.
            People from all over the world fell in love with the soft cakes,
            heavenly cheese cakes, spicy apple pies... The store became a
            success in no time. In 2015, no less than 100 pies were sold every
            day and Bethany's Pie Shop moved into a larger building.After
            receiving many requests, it became clear that our next step was
            making it possible to order pies from the comfort of your own home
            and from anywhere in the world. You are now looking at the result of
            this: our very own webstore, making it possible to order Bethany's
            delicious pies whenever you feel like it!
          </p>
        </div>
        <div class="bg-color"></div>
      </div>
    </section>

    <section class="features js--product-section" id="product">
      <div class="row">
        <h2>Our Products</h2>
      </div>
      <div class="products">
        <div class="product-items">
          <img src="./resources/img/products/applepie.jpg" alt="Apple Pie" />
          <div class="meal-heading">
            <h3>Apple pie</h3>
            <p>&dollar;15</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/cranberrypiesmall.jpg"
            alt="Cran Berry Pie"
          />
          <div class="meal-heading">
            <h3>Cran Berry Pie</h3>
            <p>&dollar;10</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/cheesecake.jpg"
            alt="Cheese Cake"
          />
          <div class="meal-heading">
            <h3>Cheese Cake</h3>
            <p>&dollar;18</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/pumpkinpiesmall.jpg"
            alt="Pumpkin Pie"
          />
          <div class="meal-heading">
            <h3>Pumpkin Pie</h3>
            <p>&dollar;12</p>
          </div>
        </div>
      </div>
      <div class="products">
        <div class="product-items">
          <img
            src="./resources/img/products/strawberrycheesecakesmall.jpg"
            alt="Strawberry Cheese Cake"
          />
          <div class="meal-heading">
            <h3>Strawberry Cheese Cake</h3>
            <p>&dollar;16</p>
          </div>
        </div>

        <div class="product-items">
          <img
            src="./resources/img/products/christmasapplepiesmall.jpg"
            alt="Christmas Apple Pie"
          />
          <div class="meal-heading">
            <h3>Christmas Apple Pie</h3>
            <p>&dollar;34</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/blueberrycheesecakesmall.jpg"
            alt="Blueberry Cheese Cake"
          />
          <div class="meal-heading">
            <h3>Blueberry Cheese Cake</h3>
            <p>&dollar;32</p>
          </div>
        </div>
      </div>
      <div class="products">
        <div class="product-items">
          <img
            src="./resources/img/products/cherrypiesmallcopy.jpg"
            alt="Cherry Pie"
          />
          <div class="meal-heading">
            <h3>Cherry Pie</h3>
            <p>&dollar;23</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/peachpiesmall.jpg"
            alt="Peach Pie"
          />
          <div class="meal-heading">
            <h3>Peach Pie</h3>
            <p>&dollar;27</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/strawberrypiesmall.jpg"
            alt="Strawberry Pie"
          />
          <div class="meal-heading">
            <h3>Strewberry Pie</h3>
            <p>&dollar;20</p>
          </div>
        </div>
        <div class="product-items">
          <img
            src="./resources/img/products/rhubarbpiesmall.jpg"
            alt="Rhubarb Pie"
          />
          <div class="meal-heading">
            <h3>Rhubarb Pie</h3>
            <p>&dollar;12</p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-us" id="contact-us">
      <div class="row">
        <h2>Contact Us</h2>
      </div>

      <div class="messages-wrapper">

        <?php

        if($_GET['success'] == 1){
            echo "<div class=\"form-messages success\"> Thank you, your message have been recieved! </div>";
        }

        if($_GET['success']  == -1){
            echo "<div class=\"form-messages error\"> Oops, something went wrong! please try again.</div>";
        }
    
        ?>


      <div class="contact-wrapper js--wp-2" id="form">
        <div class="contact-left"></div>
        <div class="contact-right">
          <form action="mailer.php" method="POST">
            <div class="contact-items">
              <div class="col span-1-of-4 contact-label">
                <label for="name">Name</label>
              </div>
              <div class="col span-3-of-4">
                <input
                  type="text"
                  id="name"
                  placeholder="Input your name"
                  required
                />
              </div>
            </div>
            <div class="contact-items">
              <div class="col span-1-of-4 contact-label">
                <label for="email">Email</label>
              </div>
              <div class="col span-3-of-4">
                <input
                  type="email"
                  id="email"
                  placeholder="Input your Email"
                  required
                />
              </div>
            </div>
            <div class="contact-items">
              <div class="col span-1-of-4 contact-label">
                <label for="newsletter">Newsletter</label>
              </div>
              <div class="col span-3-of-4">
                <input type="checkbox" id="newsletter" /> Yes, please
              </div>
            </div>
            <div class="contact-items">
              <div class="col span-1-of-4 contact-label">
                <label for="message">Leave us a message:</label>
              </div>
              <div class="col span-3-of-4">
                <textarea
                  name="message-us"
                  id="message"
                  placeholder="Your message"
                  fixed
                ></textarea>
              </div>
            </div>
            <div class="contact-items">
              <div class="col span-1-of-4 contact-label">
                <label>&nbsp;</label>
              </div>
              <div class="col span-3-of-4">
                <input type="submit" value="Send" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div class="row">
        <p>Copyright &copy; 2021 by Bethany Pie. All rights reserved</p>
        <ul>
          <li>
            <a href="#"><i class="ion-social-facebook icons"></i></a>
          </li>
          <li>
            <a href="#"><i class="ion-social-twitter icons"></i></a>
          </li>
          <li>
            <a href="#"><i class="ion-social-instagram icons"></i></a>
          </li>
          <li>
            <a href="#"><i class="ion-social-googleplus icons"></i></a>
          </li>
        </ul>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="./vendors/js/tilt.js"></script>
    <script src="./vendors/js/jquery.waypoints.min.js"></script>
    <script src="./resources/js/script.js"></script>
  </body>
</html>
