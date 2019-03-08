<?php
include 'koneksi.php';

$ambilnama = $_GET["nama"];

$sql = "SELECT * FROM siswa WHERE nama='$ambilnama'";
$sql2 = "SELECT * FROM piket WHERE nama='$ambilnama'";
$sql3 = "SELECT * FROM hasiltidakpiket WHERE nama='$ambilnama'";

$result = mysqli_query($koneksi, $sql);
$result2 = mysqli_query($koneksi, $sql2);
$result3 = mysqli_query($koneksi, $sql3);

$data = mysqli_fetch_array($result);






?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css">

<body>


    <div class='container'>
        <h1>Status Tanggal Piket</h1>

        <table class='table table-dark'>
            <tr>
                <th>No Absen</th>
                <th>Nama Lengkap</th>
            </tr>
            <tr>
                <td><?= $data["no_absen"]; ?></td>
                <td><?= $data["nama_panjang"]; ?></td>
            </tr>
        </table>
        <br>
        <div class='row'>
            <div class='col-6'>
                <table class='table table-dark'>
                    <tr>
                        <td><b>Piket</b></td>
                    </tr>
                    <?php
                    while ($data2 = mysqli_fetch_array($result2)) {
                        ?>
                    <tr>
                        <td><?= $data2['tanggal']; ?></td>
                    </tr>
                    <?php 
                } ?>
                </table>
            </div>

            <div class='col-6'>
                <table class='table table-dark''>
    <tr>
    <th>Tidak Piket</th>
    <th>Keterangan</th>
        </tr>
    <?php
    while ($data3 = mysqli_fetch_array($result3)) {
        ?>
         <tr>
             <td><?= $data3['tanggal']; ?></td>
             <td><?= $data3['keterangan']; ?></td>
         </tr>
         <?php 
        } ?>
    
    </table>
    </div>
    </div>
    <a class="button" href="cek.php" >Kembali</a>
</div>  
    </body>            