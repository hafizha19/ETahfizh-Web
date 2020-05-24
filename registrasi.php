<?php

session_start();

?>

<html>
<head>
	<title>Form Registrasi</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>
<body>
 
	<div class="kotak_login">
    <p class="tulisan_login">Silahkan Registrasi</p>
 
        <article class="article card">
            <form action="regist_aksi.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Username</label>
                        </td>
                        <td>
                            <input type="text" name="username" class="form_login" placeholder="Username atau email ..">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                            <input type="password" name="password" class="form_login" placeholder="Password ..">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Konfirmasi Password</label>
                        </td>
                        <td>
                            <input type="password" name="password2" class="form_login" placeholder="Password yang sama ..">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nama</label>
                        </td>
                        <td>
                            <input type="text" name="nama" class="form_login" placeholder="Nama ..">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Gender</label>
                        </td>
                        <td>
                            <select name="gender" class="level">
                                <option value="p">Perempuan</option>
                                <option value="l">Laki-Laki</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Jumlah Hafalan</label>
                        </td>
                        <td>
                            <input type="text" name="hafalan" class="form_login" placeholder=".... juz">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>No. HP</label>
                        </td>
                        <td>
                            <input type="text" name="nohp" class="form_login" placeholder="No HP..">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Registrasi Sebagai</label>
                        </td>
                        <td>
                            <select name="level">
                                <option value="s">Santri</option>
                                <option value="m">Mustami</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <br/>
                
                <input type="submit" class="tombol_login" value="REGISTRASI">
    
                <br/>
                
                
                
            </form>

                <a href="index.php" style="text-decoration:none">Kembali</a>
                <a class="link" href="login.php">Sudah Punya Akun?</a>
        </article>
		
		
	</div>
 
 
</body>
</html>