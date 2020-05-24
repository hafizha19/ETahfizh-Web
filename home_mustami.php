<?php

session_start();
$user = $_SESSION['username'];


?>

<head>
    <head>
        <title>Halaman Mustami</title>
        <link rel="stylesheet" href="assets/styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </head>
</head>
<body>
    
    <header>
        <div class="jumbotron">
            <h1> Assalamu'alaikum mustami', <?php echo $user ?> </h1>
            <p> Semoga Alloh menjadikan Al-Qur'an sebagai teman sehidup-sematimu, aamiin</p>
        </div>
        <nav>
            <ul>
                <li><a href="#start">Daftar Santri</a></li>
                <li><a href="#progress">Progress Santri</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
            </article>
  
            <article id="start" class="card">
                <h2 align="center">Biodata Santri</h2>
                <?php
                    include "koneksi.php";
                    
                    $query = "SELECT name_group FROM Kelompok WHERE username_mst='".$user."'";
                    $result=$koneksi->query($query);
                    $row = mysqli_fetch_array($result);
                    ?>
                    <h1 align="center"> Kelompok: <?php echo $row['name_group']; ?> </h1>
                    <br/>
                <table border="1" class="table">
                    <tr>
                        <thead>
                            <th>
                                No.
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Gender
                            </th>
                            <th>
                                No. HP
                            </th>
                            <th>
                                Jumlah Hafalan
                            </th>
                        </thead>
                    </tr>
                    <tbody>
                    <?php 

                    $no=1;
                    include "koneksi.php";
                    if ($user=='surayya') {
                        $a="SELECT * FROM santri_khadijah";
                    } elseif ($user=='fitria') {
                        $a="SELECT * FROM santri_fatimah";
                    } else {
                        $a="SELECT * FROM santri_aisyah";
                    }
                    
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

                                echo $c['username'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['name_str'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['gender_str'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['phone_str'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $c['hafalan_str']." Juz";

                                ?>
                            </td>
                            <td>
                                <a href="edit_santri.php?klik_santri=<?php echo $c['username']; ?>" method="GET">Cek Progress Harian</a>
                                
                            </td>
                            <td>
                                <a href="mustami_hapus.php?klik_santri=<?php echo $c['username']; ?>" method="GET">Hapus</a>
                            </td>
                        </tr>
                    <?php 

                    }

                    ?>
                    </tbody>
                </table>
            </article>
        
            <article id="progress" class="card">
                <h2 align="center">Progress Santri </h2>
                
                
                    <img src="assets/images/grafiksemua.png" alt="grafik">
                
                

            </article>
            
        </div>
        <aside>
            <article class="profile card">
            <header>
                    <h2>Halaman Mustami</h2>
                    <!-- <p>Kota Kembang Paris van Java</p> -->
                    <figure>
                        <img src="assets/images/quran.jpeg">
                        <!-- <figcaption>Solusi Tahfizh Masa Kini</figcaption> -->
                    </figure>
                </header>
                <h2 align="center">E-Tahfizh</h2>
                <table>
                    <tr>
                        <th>ID Twitter</th>
                        <td>@etahfizh</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>@etahfizh</td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>E Tahfizh (Solusi Tahfizh Masa Kini)</td>
                    </tr>
                </table> 
                
            </article>
        </aside>
    </main>
    <footer>
        <p>E-tahfidz &#169; 2020</p>
    </footer
 </body>