<?php
require 'AdminFunction.php';
$conn->query("DELETE FROM rekening WHERE ID_Rekening='$_GET[id]'");
if (hapus() > 0) {
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='Rekening.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Data Gagal Dihapus');
        document.location.href='Rekening.php';
        </script>
        ";
}
