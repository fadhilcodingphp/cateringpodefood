<?php
require 'AdminFunction.php';
$conn->query("DELETE FROM pelanggan WHERE ID_Pelanggan='$_GET[id]'");
if (hapus() > 0) {
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='Pelanggan.php';
        </script>
        ";
}else {
    echo "
        <script>
        alert('Data Gagal Dihapus');
        document.location.href='Pelanggan.php';
        </script>
        ";
}
