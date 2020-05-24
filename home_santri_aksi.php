<?php 

session_start();

include "koneksi.php";
$a = $_POST['juz'];
$b = $_POST['page'];
$c = $_POST['date'];
$d =  $_SESSION['username'];

if ($b<0 || $b>30) {
    ?>
    <script>
        alert("Masukkan juz pilihan pada rentang 1-30")
    </script> <?php
} else {
    $sql = "INSERT INTO Progress (username, juz, page, tanggal) VALUES ('".$d."','".$a."','".$b."', '".$c."')";

	$x=$koneksi->query($sql);

    if ($x===true) { ?>
		<!-- echo "yuhuuuuuuuuuuu"; -->
		<html>
		<head>
		<title></title>
		</head>
		<body>
			<script>
				alert("Anda Sukses, Hafalan Disetorkan.");
				history.back();
			</script>
		</body>
		</html>
		
		<?php
    } else {
        echo "errrrroooooorrrrrrrrrr SQL";
    }
}

?>
