<?php

session_start();

?>

<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>
<body>
	<div class="kotak_login">

    <center>
        <p> Silahkan Login </p>
    </center>
		
        <article class="article card">

            <form action="login_aksi.php" method="POST">
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
    
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password ..">

                <label>Masuk Sebagai</label>

                <select name="level">
                    <option value="s">Santri</option>
                    <option value="m">Mustami</option>
                    <option value="a">Admin</option>
                </select>
                <br/>
                <br/>
                <input type="submit" class="tombol_login" value="LOGIN">
    
                <br/>
                <br/>
                                
            </form>

            <a href="index.php" style="text-decoration:none">Kembali</a>
            
            <a class="link" href="registrasi.php">Belum Punya Akun?</a>
            
            
        </article>
		
		
	</div>
 
 
</body>
</html>