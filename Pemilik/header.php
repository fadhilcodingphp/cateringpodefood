<?php
if (!isset($_SESSION['rolepemilik'])) {
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/sidebar.css" rel="stylesheet">

</head>

<body>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="logo-details">
            <img src="../img/podefood.jpg" alt="" style="width: 40px; margin-left: 17px;">
            <span class="logo_name">Pemilik</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Dashboard.php">
                    <i class="bi bi-grid" style="margin-top: 26px;"></i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li style="margin-top: -25px;">
                <div class="iocn-link">
                    <a href="Laporan.php">
                        <i class="bi bi-file-earmark-text-fill" style="margin-top: 26px;"></i>
                        <span class="link_name">Laporan</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Laporan</a></li>
                    <li><a href="LaporanPP.php">Pesta Pernikahan</a></li>
                    <li><a href="LaporanUT.php">Ulang Tahun</a></li>
                    <li><a href="LaporanSyukuran.php">Syukuran</a></li>
                    <li><a href="LaporanAK.php">Acara Kantoran</a></li>
                    <li><a href="LaporanKK.php">Konsumsi Karyawan</a></li>
                    <li><a href="LaporanLainnya.php">Lainnya</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text" style="width: 520px;">Pode Food</span>
            <span class="text" style="margin-left: -10px; margin-top: 10px;">
                <a class="btn btn-Primary" href="PesananBuka.php">Buka Pemesanan</a>&nbsp;
                <a class="btn btn-Danger" href="PesananTutup.php">Tutup Pemesanan</a>&nbsp;
                <a href="../Logout.php" class="btn btn-primary">Logout<i class="fa fa-arrow-right ms-2"></i></a>
            </span>
        </div>