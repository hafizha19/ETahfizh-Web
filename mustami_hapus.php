<?php

// session_start();
$klik_santri = $_GET['klik_santri'];
include "home_mustami.php";
include "koneksi.php";


$sql = "DELETE FROM Santri WHERE username='".$klik_santri."'";
$x=$koneksi->query($sql);

if ($x===true) { ?>
    <!-- echo "yuhuuuuuuuuuuu"; -->
    <html>
    <head>
    <title></title>
    </head>
    <body>
        <script>
            alert("Data Santri Berhasil Dihapus.");
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
            alert("Data Santri Gagal Dihapus.");
            history.back();
        </script>
    </body>
    </html> <?php
}
?>