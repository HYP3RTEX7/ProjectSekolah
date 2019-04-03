<script>
    function pilihsemua() {
        var daftarku = document.getElementsByName("siswa[]");
        var jml = daftarku.length;
        var b = 0;
        for (b = 0; b < jml; b++) {
            daftarku[b].checked = true;

        }
    }

    function bersihkan() {
        var daftarku = document.getElementsByName("siswa[]");
        var jml = daftarku.length;
        var b = 0;
        for (b = 0; b < jml; b++) {
            daftarku[b].checked = false;

        }
    }
</script>
    <div class="main">

        <form action="" method='post'>
            <select name="hari">
                <option value="1">senin</option>
                <option value="2">selasa</option>
                <option value="3">rabu</option>
                <option value="4">kamis</option>
                <option value="5">jumat</option>
            </select>
            <td><button class='button' type="submit" name="submit"> Pilih</button></td>
            <td><a href="index.php">Kembali!</a></td>
        </form>


        <?php
        $ambilangka = $_POST['hari'];
        $sql = "SELECT nama FROM siswa WHERE id_piket = $ambilangka";
        if (isset($_POST['submit'])) {
            if ($result = mysqli_query($koneksi, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<table>";
                    echo '<a href="javascript:pilihsemua()">Check All</a>&nbsp;&nbsp;
        <a href="javascript:bersihkan()">Uncheck All</a>';
                    echo "<form method='POST' action='assets/action/act-piket.php'>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" .
                            "<input type='checkbox' name='siswa[]' value='$row[nama]'>"
                            . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "</tr>";
                    }
                    echo "<td>" . "<input class='button' type='submit' name='submit' value='Input'>" . "</td>";
                }
            }
        }
        ?>

        <table>
            <tr>
                <td>Hari/Tanggal</td>
                <?php
                $tanggal = date('d-m-Y');
                $day = date('D', strtotime($tanggal));
                $dayList = array(
                    'Sun' => 'Minggu',
                    'Mon' => 'Senin',
                    'Tue' => 'Selasa',
                    'Wed' => 'Rabu',
                    'Thu' => 'Kamis',
                    'Fri' => 'Jumat',
                    'Sat' => 'Sabtu'
                );
                ?>
                <td><input type="text" name="tanggal" value="<?php echo  $dayList[$day] . ", {$tanggal} "; ?>" readonly></bu>
                </td>
            </tr>
        </table>
    </div>
</body>