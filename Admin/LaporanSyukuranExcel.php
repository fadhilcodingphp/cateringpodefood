<?php
require 'AdminFunction.php';
$sqlPeriode = $_GET['sqlPeriode'];

//script print excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Penjualan Pode Food.xls");
?>
<html lang="en">
<main id="main" class="main">
   <h5 class="card-title" style="text-align: center;">Pode Food</h5>
   <h5 class="card-title" style="text-align: center;">Laporan Penjualan Catering Acara Syukuran</h5>
   <table>
      <?php $i = 1; ?>
      <thead>
         <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Psn</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Jenis Acara</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Institusi</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total</th>
         </tr>
      </thead>
      <tbody>
         <?php $ambil = mysqli_query($conn, "SELECT * FROM pesanan
                             INNER JOIN pembayaran ON pesanan.ID_Pesanan = pembayaran.ID_Pesanan
                             INNER JOIN produk_item ON pesanan.ID_Pesanan = produk_item.ID_Pesanan 
                             INNER JOIN produk ON produk_item.ID_Produk = produk.ID_Produk
                             INNER JOIN pelanggan ON pesanan.ID_Pelanggan = pelanggan.ID_Pelanggan WHERE Jenis_Acara = 'Syukuran' ORDER BY pesanan.Tgl_Pesan ASC
                             ") ?>
         <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
               <td><?= $i ?></td>
               <td scope="row"><?php echo $pecah['ID_Pesanan']; ?></td>
               <td scope="row"><?php echo $pecah['Tgl_Pesan']; ?></td>
               <td scope="row"><?php echo $pecah['Jenis_Acara']; ?></td>
               <td scope="row"><?php echo $pecah['Nama_Pelanggan']; ?></td>
               <td scope="row"><?php echo $pecah['Institusi']; ?></td>
               <td scope="row"><?php echo $pecah['Nama_Produk']; ?></td>
               <td scope="row"><?php echo $pecah['Jumlah_Barang']; ?></td>
               <td scope="row"><?php echo 'Rp. ' . number_format($pecah['Total_pesanan'] + $pecah['Biaya_pengiriman'] - $pecah['Diskon_Pesanan'], 2, ',', '.'); ?></td>
            </tr>
            <?php $i++; ?>
         <?php } ?>
         <?php $total_Penjualan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(Total_pesanan) AS total FROM pesanan WHERE Jenis_Acara = 'Syukuran'"))["total"]; ?>
         <tr>
            <td></td>
            <td colspan="3">Total Penjualan Pode Food : </td>
            <td></td>
            <td></td>
            <td><b>Rp.<?php echo number_format($total_Penjualan, 2, ',', '.') ?></b></td>
         </tr>
      </tbody>
   </table>
</main>

</body>

</html>