<?php

$klik_mustami = $_GET['mustami'];

include "koneksi.php";
include "home_admin.php";

$sql = "DELETE FROM Mustami WHERE username='".$klik_mustami."'";
$x=$koneksi->query($sql);

if ($x===true) { ?>
    <!-- echo "yuhuuuuuuuuuuu"; -->
    <html>
    <head>
    <title></title>
    </head>
    <body>
        <script>
            alert("Data Mustami Berhasil Dihapus.");
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
            alert("Data Mustami Gagal Dihapus.");
            history.back();
        </script>
    </body>
    </html> <?php
}
?>