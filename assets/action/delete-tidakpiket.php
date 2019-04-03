<?php
include "../../koneksi.php";



$id = $_GET["id"];

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM hasiltidakpiket WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

if(hapus($id) > 0){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = '../../hasil.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = '../../hasil.php';
        </script>
    ";
}



?>