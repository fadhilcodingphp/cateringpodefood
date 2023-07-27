<?php
require 'custFunction.php';
?>

<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="keywords" />
<meta content="" name="description" />

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon" />

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet" />

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" />
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="css/scss.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="Home.php" class="navbar-brand p-4">
      <img class="img-fluid me-3" src="img/icon/logo.jpg" alt="Icon" />
      <h1 class="m-0 text-primary">Pode Food Makassar</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
      <div class="navbar-nav ms-auto">
        <a href="Login.php" class="btn btn-primary">Login<i class="fa fa-arrow-right ms-3"></i></a>&nbsp &nbsp
      </div>
    </div>
  </nav>
  <!-- Navbar End -->


  <div class="hero" style="background-image: url('img/beranda.jpg');"></div>
  <br>
  <div id="caraPesan" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-8">
          <h1 class="display-5 mb-0">
            Berbagai menu yang tersedia di
            <span class="text-primary">Pode Food Makassar</span>
          </h1>
        </div>
      </div>
      <div class="row g-4">

      </div>
    </div>
  </div>
  <!-- Header Start -->
  <div style="width:60%;" class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/car2.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/car3.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/car4.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/car3.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/carousel-2.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/carousel-3.png" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Header End -->

  <!-- Cara Pesan -->
  <div id="caraPesan" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-8">
          <h1 class="display-5 mb-0">
            Cara memesan lewat website
            <span class="text-primary">Pode Food Makassar</span>
          </h1>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="membership-item position-relative" style="background: white; border-style: solid; border-color: #295c33;">
            <h1 class=" text-black">01</h1>
            <h3 class="text-black mb-12">Pilih Menu</h3>
            <p style="color: black;">
              Kamu dapat memilih menu dengan masuk ke pilihan menu. Pilih menu yang kamu mau lalu masukkan menu tersebut ke keranjang belanja.
            </p>
            <a class="btn btn-outline-primary px-4 mt-3" href="Menu.php">Pilih Menu</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="membership-item position-relative" style="background: white; border-style: solid; border-color: #295c33;">
            <h1 class=" text-black">02</h1>
            <h3 class="text-black mb-12">Pesan Menu</h3>
            <p style="color: black;">
              Check out menu pilihan yang sudah ada di keranjang belanja dengan menekan "Pesan Sekarang" dan tunggu tagihan anda muncul.
            </p>
            <a class="btn btn-outline-primary px-4 mt-3" href="Keranjang.php">Pesan Menu</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="membership-item position-relative" style="background: white; border-style: solid; border-color: #295c33;">
            <h1 class=" text-black">03</h1>
            <h3 class="text-black mb-12">Bayar Pesanan</h3>
            <p style="color: black;">
              Bayar tagihan anda dengan cara masuk ke menu tagihan. Pilih tagihan yang akan dibayar dan isi detail tagihan pada form yang muncul.
            </p>
            <a class="btn btn-outline-primary px-4 mt-3" href="TagihanBayar.php">Bayar Tagihan</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="membership-item position-relative" style="background: white; border-style: solid; border-color: #295c33;">
            <h1 class=" text-black">04</h1>
            <h3 class="text-black mb-12">Selesai</h3>
            <p style="color: black;">
              Bila pembayaran kamu telah dikonfirmasi, maka tunggu pesanan kamu sampai di tujuan sesuai dengan pesanan yang sudah disepakati.
            </p>
            <a class="btn btn-outline-primary px-4 mt-3" href="">Pesanan Kamu</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cara Pesan -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
        Testimoni
      </h1>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

        <?php
        $ambil = mysqli_query($conn, "SELECT * FROM penilaian");
        ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
          <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="assets/img/<?php echo $pecah['Foto_Produk']; ?>" style="width: 100px; height: 100px" />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                <?php echo $pecah['Testimoni']; ?></a>
              </p>
              <h5 class="mb-1"><?php echo $pecah['Nama_Penerima']; ?></a></h5>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

  <?php
  include 'footer.php';
  ?>