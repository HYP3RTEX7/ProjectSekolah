<?php
include '../koneksi.php';

$tanggal = $_POST['tanggal'];
$siswa = $_POST['siswa'];
$ket = $_POST['keterangan'];
$jumlah_dipilih = count($siswa);

for ($x = 0; $x < $jumlah_dipilih; $x++) {
    $mysqli = "INSERT INTO hasiltidakpiket values('','$siswa[$x]','$tanggal','$ket')";
    $result = mysqli_query($koneksi, $mysqli);
}
echo "
<script>
    alert('data berhasil ditambah!');
    document.location.href = '../index.php';
</script>
";
 