<?php
include "koneksi.php";


$sql = "SELECT nama FROM siswa";

$result = mysqli_query($koneksi, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css">
<div class="container">
    <div class="main">
        <h1>Silakan Pilih Nama Siswa</h1>
        <form action="info.php" method="get">
            <select class='select' name="nama">
                <?php
                while ($data = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $data['nama']; ?>"><?= $data['nama']; ?></option>
                <?php 
            } ?>
            </select>
            <input class="button" type="submit" value='pilih'>
            <a href="index.php">kembali</a>
        </form>
    </div>
</div> 