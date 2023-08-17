<?php
if (!isset($_SESSION['roleadmin'])) {
    header("Location: ../Login.php");
    exit;
}
?>
<meta name="robots" content="noindex, nofollow">
<meta content="" name="description">
<meta content="" name="keywords">
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-icons.css" rel="stylesheet">
<link href="assets/css/boxicons.min.css" rel="stylesheet">
<link href="assets/css/quill.snow.css" rel="stylesheet">
<link href="assets/css/quill.bubble.css" rel="stylesheet">
<link href="assets/css/remixicon.css" rel="stylesheet">
<link href="assets/css/simple-datatables.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <!-- logo di header -->
        <div class="d-flex align-items-center justify-content-between"> <a href="Dashboard.php" class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt=""> <span class="d-none d-lg-block">Admin</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
        <div class="header-nav ms-auto"> <a href="Profile.php" class="nav-link d-flex"></a></div>
        <a class="btn btn-Primary" href="PesananBuka.php">Buka Pemesanan</a>&nbsp;&nbsp;
        <a class="btn btn-Danger" href="PesananTutup.php">Tutup Pemesanan</a>
        <div class="d-flex justify-content-end"> <a href="../Logout.php" class="nav-link d-flex"> <button type="button" class="btn btn-outline-danger">Logout</button> </a></div>
    </header>
    <!-- sidebar -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link collapsed" href=" Dashboard.php"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="Kategori.php"> <i class="bi bi-card-list"></i> <span>Kategori Menu</span> </a></li>
            <div class="nav-item-dropdown">
                <li class="nav-item-dropdown"> <a class="nav-link collapsed" href=""> <i class="bi bi-cart-fill"></i> <span>Produk</span> </a></li>
                <div class="dropdown container">
                    <a href="ProdukPaket.php" class="dropdown-item">Produk Catering</a>
                    <?php $ambil = mysqli_query($conn, "SELECT * FROM kategori_produk WHERE ID > 1"); ?>
                    <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
                        <a href="ProdukKategoriDetail.php?id=<?= $pecah['ID_Kategori']; ?>" class="dropdown-item"><?= $pecah['Nama_Kategori']; ?></a>
                    <?php } ?>
                </div>
            </div>
            <li class="nav-item"> <a class="nav-link collapsed" href="Pesanan.php"> <i class="bi bi-cart-check-fill"></i> <span>Pesanan</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="Pembayaran.php"> <i class="bi bi-cash"></i> <span>Pembayaran</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="Pelanggan.php"> <i class="bi bi-person-fill"></i> <span>Pelanggan</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="Rekening.php"> <i class="bi bi-credit-card"></i> <span>Rekening</span> </a></li>
            <div class="nav-item-dropdown">
                <li class="nav-item-dropdown"> <a class="nav-link collapsed" href="Laporan.php"> <i class="bi bi-cart-fill"></i> <span>Laporan</span> </a></li>
                <div class="dropdown container">
                    <a href="LaporanPP.php" class="dropdown-item">Pesta Pernikahan</a>
                    <a href="LaporanUT.php" class="dropdown-item">Ulang Tahun</a>
                    <a href="LaporanSyukuran.php" class="dropdown-item">Syukuran</a>
                    <a href="LaporanAK.php" class="dropdown-item">Acara Kantoran</a>
                    <a href="LaporanKK.php" class="dropdown-item">Konsumsi Karyawan</a>
                    <a href="LaporanLainnya.php" class="dropdown-item">Lainnya</a>
                </div>
            </div>
        </ul>
    </aside>