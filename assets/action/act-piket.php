<?php
include '../../koneksi.php';

$tanggal = $_POST['tanggal'];
$siswa = $_POST['siswa'];
$jumlah_dipilih = count($siswa);

for ($x = 0; $x < $jumlah_dipilih; $x++) {
    $mysqli = "INSERT INTO piket values('','$siswa[$x]','$tanggal')";
    $result = mysqli_query($koneksi, $mysqli);
}
echo "
<script>
    alert('data berhasil ditambah!');
    document.location.href = '../../index.php';
</script>
";
 