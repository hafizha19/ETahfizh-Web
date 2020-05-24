<?php

session_start();
$klik_santri = $_GET['klik_santri'];
$_SESSION['klik_santri'] = $klik_santri;

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
        
        <nav>
            <ul>
                <li><a href="home_mustami.php">Kembali ke Halaman Mustami</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div id="content">
             
            <article class="card">
                <h2 align="center">Progress Santri: <?php echo $klik_santri ?></h2>
                
                <div id="demo">
                    <table border="1" class="table" >
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
                        $d="SELECT juz, page, tanggal FROM Progress WHERE username='".$klik_santri."'";
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

                                    echo $f['tanggal'];

                                    ?>
                                </td>
                                <td>
                                    <?php 

                                    echo $f['juz'];

                                    ?>
                                </td>
                                <td>
                                    <?php 

                                    echo $f['page'];

                                    ?>
                                </td>
                                <td>
                                    <a href="edit_santri_delete.php?tanggal=<?php echo $f['tanggal']; ?>" method="GET">Hapus</a>
                                </td>
                            </tr>
                        <?php 

                        }

                        ?>
                        </tbody>
                    </table>
                    <br/>
                </div>

            </article>
            
        </div>
        <aside>
            <article class="profile card">
                <header>
                    <h2>E-Tahfizh</h2>
                    <figure>
                        <img src="assets/images/quran.jpeg">
                    </figure>
                </header>
                <h2 align="center">Follow Us</h2>
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
 