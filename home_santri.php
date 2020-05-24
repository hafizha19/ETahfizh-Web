<?php

session_start();
$user = $_SESSION['user'];

?>

<head>
    <head>
        <title>Halaman Santri</title>
        <link rel="stylesheet" href="assets/styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </head>
</head>
<body>
    
    <header>
        <div class="jumbotron">
            <h1> Assalamu'alaikum yaa Hamilal Qur'an, <?php echo $_SESSION['username'] ?> </h1>
            <p> Semoga Alloh menjadikan Al-Qur'an sebagai teman sehidup-sematimu, aamiin</p>
        </div>
        <nav>
            <ul>
                <li><a href="#start">Mulai Setor</a></li>
                <li><a href="#progress">Progress Ku</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
            </article>
  
            <article id="start" class="card">
                <h2 align="center">Setor Hafalan</h2>
                <form action="home_santri_aksi.php" method='POST'>
                    <table>
                        <tr>
                            <td>
                                Juz
                            </td>
                            <td>
                                <input type="number" name="juz" class="form_login">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Page
                            </td>
                            <td>
                                <input type="number" name="page" class="form_login">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal
                            </td>
                            <td>
                                <input type="date" name="date" class="form_login">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" class="tombol_login" value="Setorkan">
                </form>  
                
                
                
                
            </article>
  
            <article id="progress" class="card">
                <h2 align="center">Progress <?php echo $_SESSION['username']?> </h2>
                <table border="1" class="table">
                    <tr>
                        <thead>
                            <th>
                                No.
                            </th>
                            <th>
                                Tanggal
                            </th>
                            <th>
                                Juz
                            </th>
                            <th>
                                Halaman
                            </th>
                        </thead>
                    </tr>
                    <tbody>
                    <?php 

                    $no=1;
                    include "koneksi.php";
                    $a="SELECT juz, page, tanggal FROM Progress WHERE username='".$user."'";
                    $b=$koneksi->query($a);
                    while ($c=$b->fetch_array()) { ?>
                        <tr>
                            <td>
                                <?php 

                                echo $no++;

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['tanggal'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['juz'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['page'];

                                ?>
                            </td>
                        </tr>
                    <?php 

                    }

                    ?>
                    </tbody>
            </table>

                <br/>
                <img src="assets/images/grafiksantri.png" alt="grafik">
                
            </article>
            
        </div>
        <aside>
            <article class="profile card">
                <header>
                    <h2>Perolehan Hafalan</h2>

                    <?php
                    include "koneksi.php";
                    
                    $query = "SELECT hafalan_str FROM Santri WHERE username='".$user."'";
                    $result=$koneksi->query($query);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <h1> <?php echo $row['hafalan_str']. " JUZ"; ?> </h1>
                    <figure>
                        <img src="assets/images/quran.jpeg">
                    </figure>
                </header>
                
                
                    
                    
                
            </article>
        </aside>
    </main>
    <footer>
        <p>E-tahfidz &#169; 2020</p>
    </footer
 </body>