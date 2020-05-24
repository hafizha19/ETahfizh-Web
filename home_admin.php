<?php

session_start();
$user = $_SESSION['user'];

?>

<head>
    <head>
        <title>Halaman Admin</title>
        <link rel="stylesheet" href="assets/styles/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    </head>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="#santri">Santri</a></li>
                <li><a href="#mustami">Mustami</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
            </article>
  
            <article id="santri" class="card">
                <h2 align="center">Data Santri</h2>
                
                <table border= 1 class="table">
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
                            <th>
                                Nama Kelompok
                            </th>
                        </thead>
                    </tr>
                    <tbody>
                    <?php 

                    $no=1;
                    include "koneksi.php";
                    $a="SELECT * FROM bio_santri_group ORDER BY hafalan_str";
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
                                <?php 

                                echo $c['name_group'];

                                ?>

                            </td>
                    <?php 

                    }

                    ?>
                    </tbody>
                </table>
            </article>
  
            <article id="mustami" class="card">
                <h2 align="center">Data Mustami </h2>
                
                <table border=1 class="table">
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
                            <th>
                                Kelompok
                            </th>
                        </thead>
                    </tr>
                    <tbody>
                    <?php 

                    $no=1;
                    include "koneksi.php";
                    $d="SELECT * FROM bio_mustami_group";
                    
                    $e=$koneksi->query($d);
                    while ($f=$e->fetch_array()) { ?>
                        <tr>
                            <td>
                                <?php 

                                echo $no++;

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $f['username'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $f['name_mst'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $f['gender_mst'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $f['phone_mst'];

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $f['hafalan_mst']." Juz";

                                ?>
                            </td>
                            <td>
                                <?php 

                                echo $f['name_group'];

                                ?>
                            
                            </td>
                            <td>
                                <a href="admin_hapus.php?mustami=<?php echo $f['username']; ?>" method="GET">Hapus Mustami</a>
                            </td>
                        </tr>
                    <?php 

                    }

                    ?>
                    </tbody>
                </table>
                
            </article>
            
        </div>
        <aside>
            <article class="profile card">
            <header>
                    <h2>Halaman Admin</h2>
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