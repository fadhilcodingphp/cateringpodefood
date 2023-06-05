<?php
require 'AdminFunction.php';
if (!isset($_SESSION['admin'])) {
   header("Location: AdminLogin.php");
   exit;
}
?>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Pesanan | Pode Food</title>
   <?php
   include 'header.php';
   ?>
   <main id="main" class="main">
      <div class="pagetitle">
         <h1>Pesanan</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
               <li class="breadcrumb-item active">Pesanan</li>
            </ol>
         </nav>
      </div>
      <?php $i = 1; ?>
      <section class="section">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Pesanan</h5>
                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nama Customer</th>
                              <th scope="col">Tanggal Kirim</th>
                              <th scope="col">Status Pemesanan</th>
                              <th scope="col">Status Pembayaran</th>
                              <th scope="col">Total Pesanan</th>
                              <th scope="col">Biaya Pengiriman</th>
                              <th scope="col">Total_Order</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $ambil = mysqli_query($conn, "SELECT * FROM 
                            pelanggan INNER JOIN pesanan ON pesanan.ID_Pelanggan = pelanggan.ID_Pelanggan 
                            INNER JOIN pembayaran ON pesanan.ID_Pesanan = pembayaran.ID_Pesanan") ?>
                           <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
                              <tr>
                                 <td><?= $i ?></td>
                                 <td scope="row"><?php echo $pecah['Nama_Pelanggan']; ?></td>
                                 <td scope="row"><?php echo $pecah['Tgl_Kirim']; ?></td>
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
                                    ?></td>
                                 <td scope="row">
                                    <?php
                                    if ($bayar == "LUNAS") {
                                       echo "<span class='badge bg-success'> <h6><b> $bayar </b></h6> </span>";
                                    } elseif ($bayar == "DP 50% dan COD") {
                                       echo "<span class='badge bg-warning'> <h6><b> $bayar </b></h6> </span>";
                                    } elseif ($bayar == "Belum Bayar") {
                                       echo "<span class='badge bg-danger'> <h6><b> $bayar </b></h6> </span>";
                                    }
                                    ?>
                                 </td>
                                 <td scope="row"><?php echo 'Rp. ' . number_format($pecah['Total_pesanan'], 2, ',', '.'); ?></td>
                                 <td scope="row"><?php echo 'Rp. ' . number_format($pecah['Biaya_pengiriman'], 2, ',', '.'); ?></td>
                                 <td scope="row"><?php echo 'Rp. ' . number_format($pecah['Total_Order'], 2, ',', '.'); ?></td>
                                 <td>
                                    <a class="btn btn-info" href="PesananDetail.php?id=<?= $pecah['ID_Pesanan']; ?>">Detail</a>
                                    <a class="btn btn-warning" href="PesananUbah.php?id=<?= $pecah['ID_Pesanan']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="PesananHapus.php?id=<?= $pecah['ID_Pesanan']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                                 </td>
                              </tr>
                              <?php $i++; ?>
                           <?php } ?>
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