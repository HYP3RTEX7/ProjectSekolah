<?php
$sql = "SELECT nama FROM siswa";
$result = mysqli_query($koneksi, $sql);
?>
<div class="container">
    <div class="main">
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