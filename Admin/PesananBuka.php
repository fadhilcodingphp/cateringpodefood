<?php
require 'AdminFunction.php';
$conn->query("UPDATE bukatutup SET status='Buka Pesanan'");

if (bukatutup() > 0) {
    echo "
        <script>
        document.location.href='Dashboard.php';
        </script>
        ";
} else {
    echo "
        <script>
        document.location.href='Dashboard.php';
        </script>
        ";
}
