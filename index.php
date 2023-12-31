<?php

require_once "config.php";

$title = "Dashboard - CoffeeKiran";

require_once "koneksi.php";
require_once "config.php";
require_once('proses_form.php');
?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CoffeeKiran</title>

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet" />

  <!--feather icons-->
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">

  <!--my style -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <!--navbar start-->
  <nav class="navbar">
    <a href="#" class="navbar-logo">coffe<span>kiran</span>.</a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">produk</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- search from start -->
    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here..." />
      <label for="search-box"><i data-feather="search"></i></label>
    </div>
    <!-- search from end -->

    <!-- shopping cart start -->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/produk.jpg" alt="product 1" />
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/produk.jpg" alt="product 1" />
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
      <div class="cart-item">
        <img src="img/products/produk.jpg" alt="product 1" />
        <div class="item-detail">
          <h3>Product 1</h3>
          <div class="item-price">IDR 30K</div>
        </div>
        <i data-feather="trash-2" class="remove-item"></i>
      </div>
    </div>
    <!-- shopping cart end -->
  </nav>
  <!--navbar end-->

  <!-- Hero Sections start  -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Mari Nikmati secangkir <span>kopi</span></h1>
      <p>
        lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
        enim.
      </p>
      <a href="#" class="cta">Beli Sekarang</a>
    </main>
  </section>
  <!-- Hero Sections end  -->

  <!-- about sections start-->
  <section id="about" class="about">
    <h2><span>Tentang </span>Kami</h2>
    <div class="row">
      <div class="about-img">
        <img src="img/tentag-kami.jpg" alt="tentag-kami" />
      </div>
      <div class="content">
        <h3>Kenapa memilih kopi kami?</h3>
        <p>
          lorem ipsum dolor sit amet consectetur adipisicing elit.
          Accusantium, enim. lorem ipsum dolor sit amet consectetur
          adipisicing elit. Accusantium, enim.
        </p>
        <p>
          lorem ipsum dolor sit amet consectetur adipisicing elit.
          Accusantium, enim. lorem ipsum dolor sit amet consectetur
          adipisicing elit. Accusantium, enim.
        </p>
      </div>
    </div>
  </section>
  <!-- about sections end-->

  <!-- menu section start -->
  <section id="menu" class="menu">
    <h2><span>Menu </span>Kami</h2>
    <p>
      lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
      enim. lorem ipsum dolor sit amet consectetur adipisicing elit.
      Accusantium, enim.
    </p>

    <div class="row">
      <div class="menu-card">
        <img src="img/menu/kopi.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">- Espresso</h3>
        <p class="menu-card-price">IDR 15k</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/kopi.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">- Espresso</h3>
        <p class="menu-card-price">IDR 15k</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/kopi.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">- Espresso</h3>
        <p class="menu-card-price">IDR 15k</p>
      </div>
      <div class="menu-card">
        <img src="img/menu/kopi.jpg" alt="Espresso" class="menu-card-img" />
        <h3 class="menu-card-tittle">- Espresso</h3>
        <p class="menu-card-price">IDR 15k</p>
      </div>
    </div>
  </section>
  <!-- menu section end -->

  <!-- product section start -->
  <section class="products" id="products">
    <h2><span>Produk Unggulan</span> Kami</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
      saepe necessitatibus deserunt consequatur sed tempora?
    </p>
    <div class="row">
      <div class="product-card">
        <div class="product-icon">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/produk.jpg" alt="product 1" />
        </div>
        <div class="product-contetnt">
          <h3>Coffe Beans</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icon">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/produk.jpg" alt="product 1" />
        </div>
        <div class="product-contetnt">
          <h3>Coffe Beans</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
      <div class="product-card">
        <div class="product-icon">
          <a href="#"><i data-feather="shopping-cart"></i></a>
          <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
        </div>
        <div class="product-image">
          <img src="img/products/produk.jpg" alt="product 1" />
        </div>
        <div class="product-contetnt">
          <h3>Coffe Beans</h3>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
        </div>
      </div>
    </div>
  </section>
  <!-- product section end -->

  <!-- contact section star -->
  <section id="contact" class="contact">
    <h2><span>Kontak </span>Kami</h2>
    <p>
      lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium,
      enim.
    </p>

    <div class="row">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.501205157614!2d109.24635070000004!3d-7.629121999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65416d9931a213%3A0xe72cf30650d8f7db!2sBryan%20Gass!5e0!3m2!1sid!2sid!4v1692364498925!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="proses_form.php" method="post" class="form-group">
        <label for="nama" placeholder="nama"></label>
        <input placeholder="Nama" type="text" id="nama" name="nama" required /><br />

        <label for="email"></label>
        <input placeholder="Email" type="email" id="email" name="email" required /><br />

        <label for="no_hp"></label>
        <input placeholder="No Hp" type="tel" id="no_hp" name="no_hp" required /><br />

        <input type="submit" value="Kirim" />
      </form>
    </div>
  </section>
  <!-- contact section end -->

  <!-- footer start -->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#products">produk</a>
      <a href="#contact">Kontak</a>
    </div>
    <p>Created by <a href="https://github.com/AkmalBay">AkmalBay</a>. | &copy; 2023.</p>
    <div class="credit"></div>
  </footer>
  <!-- footer end -->

  <!-- modal box item detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/8.jpg" alt="product 1" />
        <div class="product-content">
          <h3>Product 1</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem
            ipsum dolor sit qwerty
          </p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i><span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- modal box item detail end -->

  <!--feather icons-->
  <script>
    feather.replace();
  </script>

  <!-- My Javascript -->
  <script src="js/script.js"></script>
</body>


