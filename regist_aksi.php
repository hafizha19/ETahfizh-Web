<?php 


session_start();
$level = $_SESSION['level'];

include "koneksi.php";


$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['password2'];
$d = $_POST['nama'];
$e = $_POST['gender'];
$f = $_POST['hafalan'];
$g = $_POST['nohp'];

if ($f>0 && $f<11) {
	$grup = 1;
} elseif ($f>10 && $f<21) {
	$grup = 2;
} else {
	$grup = 3;
}

if ($b==$c) {
	if ($level == 'm') {
		// echo "yuhu";
		$sql= "INSERT INTO Mustami (username, password_mst, name_mst, gender_mst, hafalan_mst, phone_mst) VALUES ('".$a."','".$b."', '".$d."', '".$e."', '".$f."', '".$g."')"; 
	} else {
		// echo "yuhuuuuuuuuuuu";
		$sql = "INSERT INTO Santri (username, password_str, name_str, gender_str, hafalan_str, phone_str, id_group) VALUES ('".$a."','".$b."', '".$d."', '".$e."', '".$f."', '".$g."', '".$grup."')";
	}
	$x=$koneksi->query($sql);
	var_dump($x);
// var_dump($d);
    if ($x===true) { ?>
		<!-- echo "yuhuuuuuuuuuuu"; -->
		<html>
		<head>
		<title></title>
		</head>
		<body>
			<script>
				alert("Anda Sukses Registrasi.");
				history.back();
			</script>
		</body>
		</html>
		
		<?php
    } else {
        echo "errrrroooooorrrrrrrrrr SQL";
    }
}
else { ?>
		<body>
			<script>
				alert("Ulangi, Password Anda Tidak Sama");
				history.back();
			</script>
		</body>
	<?php 


}
 ?>
 