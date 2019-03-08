<?php
include 'koneksi.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style.css">

<div class='container'>
    <h1 class="mb-3">Data Piket</h1>
    <a class='btn btn-secondary' href="index.php">Kembali</a>
    <a class='btn btn-success' href="cek.php">Cek Status Siswa</a>
    <a class='btn btn-success' href="cetak.php">Cetak</a>

    <div class='row'>
        <div class='col-6'>
            <h2>Siswa(i) Piket</h2>
            <table class='table table-sm table-dark'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql1 = "SELECT * FROM piket";
                    $sql2 = "SELECT * FROM hasiltidakpiket";

                    $query1 = mysqli_query($koneksi, $sql1);
                    $query2 = mysqli_query($koneksi, $sql2);

                    $no = 1;
                    $n = 1;
                    while ($row1 = mysqli_fetch_array($query1)) {
                        ?>

                    <tr>
                        <td scope='row'><?= $no++; ?></td>
                        <td><?= $row1['nama'] ?></td>
                        <td><?= $row1['tanggal'] ?></td>
                        <td><a href="pikethapus.php?id=<?= $row1['no']; ?>">Hapus</a></td>
                    </tr>


                    <?php 
                } ?>
                </tbody>
            </table>
        </div>

        <div class='col-6'>
            <table class='table table-sm table-dark'>
                <h2>Siswa(i) Tidak Piket</h2>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <?php

                while ($row2 = mysqli_fetch_array($query2)) {
                    ?>
                <tr>
                    <td><?= $n++; ?></td>
                    <td><?= $row2['nama'] ?></td>
                    <td><?= $row2['tanggal'] ?></td>
                    <td><?= $row2['keterangan'] ?></td>
                    <td><a href="tidakpikethapus.php?id=<?= $row2['id']; ?>">Hapus</a></td>
                </tr>
                <?php 
            } ?>
            </table>
        </div>
    </div>
</div>

</div> 