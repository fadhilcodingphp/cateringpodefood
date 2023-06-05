<?php
require 'custFunction.php';
$ID_Pelanggan = $_SESSION["ID_Pelanggan"];
if (!isset($_SESSION["login"]) && !isset($_SESSION["ID_Pelanggan"])) {
  header("Location: login.php");
  exit;
}
//ambil data di URL
$id = $_GET["id"];
// query data mhs berdasarkan id
$ubahProduk = query("SELECT * FROM produk, kategori_produk WHERE ID_Produk = '$id' AND produk.ID_Kategori = kategori_produk.ID_Kategori")[0];

if (isset($_POST["submit"])) {
  //cek apakah data berhasil diubah atau tidak
  if (tambahKeranjang() > 0) {
    echo "
        <script>
        document.location.href='Keranjang.php';
        </script>
        ";
  } else {
    echo "
        <script>
        alert('Data Gagal Diubah');
        document.location.href='Menu.php';
        </script>
        ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Detail Menu | Pode Food</title>
  <?php
  include 'header.php';
  ?>
  <section class="section pb-0" id="about">
    <!-- Content -->

    <div class="container mt-5 mb-5 g-4">
      <div class="row align-items-center">
        <h2>Detail Produk</h2>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-border2">
            <img class="img-fluid" src="assets/img/<?php echo $ubahProduk['Gambar']; ?>" alt="" />
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ms-3 mt-5 ">
          <div class="fs-6">
            <i class="bi-clock me-1"></i>
            <span><?= $ubahProduk['Ketahanan_Produk'] . ' | ' ?></span>
            <?= $ubahProduk['Nama_Kategori'] ?>
          </div>
          <div class="small mb-1">
            <?= $ubahProduk['Nama_Kategori'] ?>
          </div>
          <h1 class="display-5 fw-bolder">
            <?= $ubahProduk['Nama_Produk'] ?>
          </h1>
          <div class="fs-5 mb-5">
            <span><?= 'Rp. ' . number_format($ubahProduk['Harga'], 2, ',', '.'); ?></span>
          </div>
          <p class="lead">
            <i class="bi-clock me-1"></i>
            <span><?= "Ketahanan Produk: " . $ubahProduk['Ketahanan_Produk'] ?></span><br>
            <?= $ubahProduk['Keterangan'] ?>
          </p>
          <div class="d-flex">
            <form action="" method="post">
              <div class="input-group mb-3" style="max-width: 120px;">
                <div class="">
                  <button class="btn btn-outline-primary" onclick="countMinus()" type="button">&minus;</button>
                </div>
                <input type="text" name="Jumlah_Barang" class="form-control text-center" id="counter" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="">
                  <button class="btn btn-outline-primary js-btn-plus" onclick="countPlus()" type="button">&plus;</button>
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-outline-primary flex-shrink-0">
                <i class="bi-cart-fill me-1"></i>
                Tambahkan Ke Keranjang
              </button>
            </form>

          </div>
        </div>
      </div>
      <!-- / .row -->
    </div>
    <!-- / .container -->
  </section>

  <div class="container py-5">

  </div>
  <?php
  include 'footer.php';
  ?>
  <script>
    const counter = document.getElementById('counter');
    let counterValue = counter.value;

    function countPlus() {
      counter.value = ++counterValue;
    }

    function countMinus() {
      if (counter.value != 1) {
        counter.value = --counterValue;
      } else {
        counter.value = 1;
      }

    }
  </script>