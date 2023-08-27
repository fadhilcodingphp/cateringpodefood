<?php
require 'custFunction.php';
if (!isset($_SESSION["roleuser"])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Home | Pode Food</title>
  <?php
  include 'header.php';
  ?>

  <!-- Header Start -->
  <div style="width:40%;" class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/car1.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/car2.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/car3.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="img/car4.png" class="d-block w-100">
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
  <div class="text-center mt-2" style="font-size: 20px;">
    <?php
    $ambil = mysqli_query($conn, "SELECT * FROM bukatutup");
    ?>
    <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
      <?php
      $status = $pecah['status'];
      if ($status == "Buka Pesanan") {
        echo "";
      } elseif ($status == "Tutup Pesanan") {
        echo "Pesanan telah mencapai target, silahkan coba lagi di hari esok.";
      }
      ?>
    <?php } ?>
  </div>
  <div class="container-xxl py-5">
    <div class="container">
      <h1 class="display-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        Produk Promosi
      </h1>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s"">
        <?php
        $ambil = mysqli_query($conn, "SELECT * FROM produk WHERE produk.ID_Kategori = 'KPC002'");
        ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
          <div class=" testimonial-item text-center">
        <div class="testimonial-text rounded text-center p-4">
          <?php
          $tgl_now = date("Y-m-d");
          $tgl_exp = $pecah['Tgl_Promo']; //tanggal expired
          if ($tgl_now >= $tgl_exp) {
            $conn->query("DELETE FROM produk WHERE Tgl_Promo = '$tgl_exp'");
          } else {
          ?>
            <p>
              <img class="img-fluid border border-1 p-2 mx-auto mb-4" src="assets/img/<?php echo $pecah['Gambar']; ?>" style="width: 100px; height: 100px" />
            <h3><?php echo $pecah['Nama_Produk']; ?></h3>
            <h5 style="text-decoration: line-through;"><?php echo 'Rp. ' . number_format($pecah['Harga'], 2, ',', '.'); ?></h5>
            <h5>Sekarang Hanya : <?php echo 'Rp. ' . number_format($pecah['Promo'], 2, ',', '.'); ?></h5>
            <h6>Berlaku Sampai : <?php echo $pecah['Tgl_Promo']; ?></h6>
            </p>
            <div>
              <a href="tambahKeranjang.php?id=<?= $pecah['ID_Produk']; ?>" class="btn btn-success btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                  <line x1="12" y1="5" x2="12" y2="19"></line>
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>Tambah Ke Keranjang</a>
            </div>
        </div>
      <?php } ?>
      </div>
    <?php } ?>
    </div>
  </div>
  </div>
  <!-- About Start -->
  <div id="about" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">Selamat datang,</span><?= $_SESSION["ID_Pelanggan"] ?></p>
          <p><span class="text-primary me-2">#</span>Tentang Kami</p>
          <h1 class="display-5 mb-4">
            Kenapa memilih
            <span class="text-primary">Pode Food Makassar</span> untuk catering?
          </h1>
          <p class="mb-4">
            Pode Food Makassar sudah berdiri sejak 2016 dan sudah dipercaya oleh berbagai organisasi, perusahaan dan
            perorangan untuk menangani catering harian sampai acara besar.
          </p>
          <h5 class="mb-3"> <i class="far fa-check-circle text-primary me-3"></i> Terjangkau </h5>
          <h5 class="mb-3"> <i class="far fa-check-circle text-primary me-3"></i> Kualitas Terjamin </h5>
          <h5 class="mb-3"> <i class="far fa-check-circle text-primary me-3"></i> Pilihan Paket Beragam </h5>
          <h5 class="mb-3"> <i class="far fa-check-circle text-primary me-3"></i> Custom Pesanan Sesuai Keperluan dan Budget </h5>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-border">
            <img class="img-fluid" src="img/logo.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Contact Start -->
  <div id="kontak" class="container-xxl py-4">
    <div class="container">
      <div class="row g-4 mb-5">
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="h-100 bg-dark d-flex align-items-center p-5">
            <div class="btn-lg-square bg-black flex-shrink-0">
              <i class="fa fa-phone-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2 text-light">
                <span class="text-primary me-2">#</span>Telepon
              </p>
              <h5 class="text-light mb-0">082188289569</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="h-100 bg-dark d-flex align-items-center p-5">
            <div class="btn-lg-square bg-black flex-shrink-0">
              <i class="fa fa-whatsapp text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2 text-light">
                <span class="text-primary me-2">#</span>Whatsapp
              </p>
              <h5 class="text-light mb-0">082188289569</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100 bg-dark d-flex align-items-center p-5">
            <div class="btn-lg-square bg-black flex-shrink-0">
              <i class="fa fa-instagram text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2 text-light">
                <span class="text-primary me-2">#</span>Instagram
              </p>
              <h5 class="text-light mb-0">PodeFoodMakassar</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Cara Pesan -->
  <div id="caraPesan" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-8">
          <p><span class="text-primary me-2">#</span>Panduan Pemesanan</p>
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
            <a class="btn btn-outline-primary px-4 mt-3" href="MenuKategoriDetail.php?id=KPC001">Pilih Menu</a>
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
            <a class="btn btn-outline-primary px-4 mt-3" href="TagihanSaya.php">Bayar Tagihan</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="membership-item position-relative" style="background: white; border-style: solid; border-color: #295c33;">
            <h1 class=" text-black">04</h1>
            <h3 class="text-black mb-12">Selesai</h3>
            <p style="color: black;">
              Bila pembayaran kamu telah dikonfirmasi, maka tunggu pesanan kamu sampai di tujuan sesuai dengan pesanan yang sudah disepakati.
            </p>
            <a class="btn btn-outline-primary px-4 mt-3" href="PesananSaya.php">Pesanan Saya</a>
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
            <div class="testimonial-text rounded text-center p-4">
              <p>
                <img class="img-fluid border border-1 p-2 mx-auto mb-4" src="assets/img/<?php echo $pecah['Foto_Produk']; ?>" style="width: 100px; height: 100px" />
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