<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">
        <img src="./img/logo.png" alt="" class="img-logo" />
      </label>
      <ul class="navbar">
        <li><a class="active" href="./index.html">Home</a></li>
        <li><a href="./categories.html">Categories</a></li>
        <li><a href="#">Foods</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <section id="section-search">
      <div class="container-section-search">
        <div class="background-search">
          <img src="./img/bg.jpg" alt="bgr-search" />
        </div>
        <div class="form">
          <input
            type="text"
            placeholder="Search for Food ..."
            class="input-search"
          />
          <!-- <button class="btn-search">Search</button> -->
          <input type="button" value="Search" class="btn-search" />
        </div>
      </div>
    </section>
    <article style="padding-bottom: 50px">
      <div class="container-article">
        <div class="title-food-menu">Food Menu</div>
        <div class="container-menu">
          <div class="container-item">
            <img src="./img/menu-pizza.jpg" alt="" class="bgr-item" />
            <div class="item-content">
              <h6 class="title-item">Pizza</h6>
              <span class="price-item">$2.3</span>
              <p class="des-item">
                Made with Italia Sauce, Chicken, and organice vegatables
              </p>
              <a href="./order.html" class="oder-item">Order now</a>
            </div>
          </div>
          <div class="container-item">
            <img src="./img/menu-burger.jpg" alt="" class="bgr-item" />
            <div class="item-content">
              <h6 class="title-item">Smoky Burger</h6>
              <span class="price-item">$2.3</span>
              <p class="des-item">
                Made with Italia Sauce, Chicken, and organice vegatables
              </p>
              <a href="./order.html" class="oder-item">Order now</a>
            </div>
          </div>
          <div class="container-item">
            <img src="./img/menu-momo.jpg" alt="" class="bgr-item" />
            <div class="item-content">
              <h6 class="title-item">Food title</h6>
              <span class="price-item">$2.5</span>
              <p class="des-item">
                Made with Italia Sauce, Chicken, and organice vegatables
              </p>
              <a href="./order.html" class="oder-item">Order now</a>
            </div>
          </div>
          <div class="container-item">
            <img src="./img/menu-burger.jpg" alt="" class="bgr-item" />
            <div class="item-content">
              <h6 class="title-item">Nice Burger</h6>
              <span class="price-item">$2.5</span>
              <p class="des-item">
                Made with Italia Sauce, Chicken, and organice vegatables
              </p>
              <a href="./order.html" class="oder-item">Order now</a>
            </div>
          </div>
          <div class="container-item">
            <img src="./img/menu-pizza.jpg" alt="" class="bgr-item" />
            <div class="item-content">
              <h6 class="title-item">Pizza Canada</h6>
              <span class="price-item">$2.5</span>
              <p class="des-item">
                Made with Italia Sauce, Chicken, and organice vegatables
              </p>
              <a href="./order.html" class="oder-item">Order now</a>
            </div>
          </div>
          <div class="container-item">
            <img src="./img/menu-momo.jpg" alt="" class="bgr-item" />
            <div class="item-content">
              <h6 class="title-item">Steam Momo</h6>
              <span class="price-item">$3.5</span>
              <p class="des-item">
                Made with Italia Sauce, Chicken, and organice vegatables
              </p>
              <a href="order.html" class="oder-item">Order now</a>
            </div>
          </div>
        </div>
      </div>
    </article>
    <footer>
      <div class="container-footer">
        <div class="social-network-icon">
          <div class="icon-fb">
            <a href="https://www.facebook.com/WowFoodPage"
              ><img src="./img/facebook_icon-icons.com_59205.png" alt=""
            /></a>
          </div>
          <div class="icon-insta">
            <a href="https://www.instagram.com/wowfoodrus/"
              ><img src="./img/intsa-icon.png" alt=""
            /></a>
          </div>
          <div class="icon-twitter">
            <a href="https://twitter.com/WOWFoodPics"
              ><img src="./img/twitter_socialnetwork_20007.png" alt=""
            /></a>
          </div>
        </div>
        <div class="license">
          <p>
            All rights reversed. Designed by <a href="">Nguy???n Ng???c Giang</a>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
