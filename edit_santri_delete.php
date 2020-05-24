<?php

session_start();
$klik_tanggal = $_GET['tanggal'];
$klik_santri = $_SESSION['klik_santri'];

include "koneksi.php";


$sql = "DELETE FROM Progress WHERE username='".$klik_santri."' AND tanggal='".$klik_tanggal."'";
$x=$koneksi->query($sql);

if ($x===true) { ?>
    <!-- echo "yuhuuuuuuuuuuu"; -->
    <html>
    <head>
    <title></title>
    </head>
    <body>
        <script>
            alert("Data Progress Berhasil Dihapus.");
            history.back();
        </script>
    </body>
    </html>
    
    <?php
} else {
    ?>
    html>
    <head>
    <title></title>
    </head>
    <body>
        <script>
            alert("Data Progress Gagal Dihapus.");
            history.back();
        </script>
    </body>
    </html> <?php
}
?>