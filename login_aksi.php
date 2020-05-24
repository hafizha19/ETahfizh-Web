<?php

session_start();
$_SESSION['user'] = $_POST['username'];

include "koneksi.php";

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$lev = $_POST['level'];

$_SESSION['level'] = $lev;

if ($lev == 'm') {
    $data = mysqli_query($koneksi,"select * from Mustami where username='$username' and password_mst='$password'");
    
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: home_mustami.php");
    }else{?>
        <script>
            alert("Password atau username salah")
        </script><?php
        header("location:login.php");
    }
} else if ($lev== 's') {
    $data = mysqli_query($koneksi,"select * from Santri where username='$username' and password_str='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: home_santri.php");
    }else{?>
        <script>
            alert("Password atau username salah")
        </script><?php
        header("location:login.php");
    }
} else {
    $data = mysqli_query($koneksi,"select * from Admin where username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: home_admin.php");
    }else{?>
        <script>
            alert("Password atau username salah")
        </script><?php
        header("location:login.php");
    }
}
 

?>

<!-- 



$user = $_POST['username'];
$psw = $_POST['password'];
$lev = $_POST['level'];

$op = $_GET['op'];

if ($op=="in") {
    if ($lev == 'm') {
        $query_l="SELECT * FROM Mustami WHERE username='$user' AND password_mst='psw'";
    } else {
        $query_l="SELECT * FROM Santri WHERE username='$user' AND password_str='psw'";
    }
    $h_l = $koneksi->query($query_l);
    if (mysqli_num_rows($h_l)==1) {
        $d_l = $h_l->fetch_array();
        
        if ($d_l['lev']=="s") {
            header("location:index.php");
        } elseif ($d_l['lev']=="m") {
            header("location:index2.php");
        } else {
            die("password salah <a href=\"javascript:history.back()\">kembali</a>");            
        }
    }
} elseif ($op=="out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:login.html");
}

?> -->