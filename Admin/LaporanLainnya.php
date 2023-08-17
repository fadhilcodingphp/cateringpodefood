<?php
require 'AdminFunction.php';
if (!isset($_SESSION["roleadmin"])) {
   header("Location: ../login.php");
   exit;
}
$conn = new mysqli("localhost", "root", "", "podefood");
$awalTgl = "";
$akhirTgl = "";
$tglAwal = "";
$tglAkhir = "";
if (isset($_POST['btnTampil'])) {
   $tglAwal = isset($_POST['txtTglAwal']) ? $_POST['txtTglAwal'] : "01-";
   $tglAkhir = isset($_POST['txtTglAkhir']) ? $_POST['txtTglAkhir'] : "01-";
   $sqlPeriode = "AND pesanan.Tgl_Pesan BETWEEN '$tglAwal' AND '$tglAkhir'";
} else {
   $sqlPeriode = "AND pesanan.Tgl_Pesan";
}
?>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Laporan | Pode Food</title>
   <?php
   include 'header.php';
   ?>
   <main id="main" class="main">
      <div class="pagetitle">
         <h1>Laporan</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Laporan</a></li>
               <li class="breadcrumb-item active">Acara Lainnya</li>
            </ol>
         </nav>
      </div>
      <?php $i = 1; ?>
      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Laporan Acara Lainnya</h5>
                     <a class="btn btn-primary" href="LaporanExcel.php?awal=<?= $tglAwal; ?> &&akhir=<?= $tglAkhir; ?>" target="_blank" alt="Edit Data"> <i class="ri-download-2-fill"></i> Download Excel</a>
                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th scope="col">No.</th>
                              <th scope="col">ID Psn</th>
                              <th scope="col">Tanggal Pesan</th>
                              <th scope="col">Nama Customer</th>
                              <th scope="col">Status </th>
                              <th scope="col">Nama Produk</th>
                              <th scope="col">Harga Produk</th>
                              <th scope="col">Jumlah</th>
                              <th scope="col">Total</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $ambil = mysqli_query($conn, "SELECT * FROM pesanan
                             INNER JOIN pembayaran ON pesanan.ID_Pesanan = pembayaran.ID_Pesanan
                             INNER JOIN produk_item ON pesanan.ID_Pesanan = produk_item.ID_Pesanan 
                             INNER JOIN produk ON produk_item.ID_Produk = produk.ID_Produk
                             INNER JOIN pelanggan ON pesanan.ID_Pelanggan = pelanggan.ID_Pelanggan WHERE pesanan.Jenis_Acara='Lainnya'") ?>
                           <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
                              <tr>
                                 <td><?= $i ?></td>
                                 <td scope="row"><?php echo $pecah['ID_Pesanan']; ?></td>
                                 <td scope="row"><?php echo $pecah['Tgl_Pesan']; ?></td>
                                 <td scope="row"><?php echo $pecah['Nama_Pelanggan']; ?></td>
                                 <td scope="row">
                                    <?php
                                    $bayar = $pecah['status_Pembayaran'];
                                    $status = $pecah['status'];
                                    if ($status == "Menunggu Pembayaran") {
                                       echo "<span class='badge bg-warning'> <h6><b> $status </b></h6> </span>";
                                    } elseif ($status == "Menunggu Konfirmasi Pembayaran") {
                                       echo "<span class='badge bg-danger'> <h6><b> $status </b></h6> </span>";
                                    } elseif ($status == "Diproses") {
                                       echo "<span class='badge bg-warning'> <h6><b> $status </b></h6> </span>";
                                    } elseif ($status == "Pesanan Selesai") {
                                       echo "<span class='badge bg-success'> <h6><b> $status </b></h6> </span>";
                                    } else {
                                       echo "<span class='badge bg-info'> <h6><b> $status </b></h6> </span>";
                                    }
                                    ?>
                                 </td>
                                 <td scope="row"><?php echo $pecah['Nama_Produk']; ?></td>
                                 <td scope="row"><?php echo 'Rp. ' . number_format($pecah['Harga'], 2, ',', '.'); ?></td>
                                 <td scope="row"><?php echo $pecah['Jumlah_Barang']; ?></td>
                                 <td scope="row"><?php echo 'Rp. ' . number_format($pecah['Total_pesanan'] + $pecah['Biaya_pengiriman'] - $pecah['Diskon_Pesanan'], 2, ',', '.'); ?></td>
                                 <td>
                                    <a class="btn btn-info" href="PesananDetail.php?id=<?= $pecah['ID_Pesanan']; ?>">Detail</a>
                                 </td>
                              </tr>
                           <?php } ?>
                           <?php $total_Penjualan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(Total_Prodit) AS total FROM produk_item"))["total"]; ?>
                           <tr>
                              <td></td>
                              <td colspan="3">Total Penjualan Pode Food : </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><b>Rp.<?php echo number_format($total_Penjualan, 2, ',', '.') ?></b></td>
                           </tr>
                           <?php $i++; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   <?php
   include 'footer.php';
   ?>