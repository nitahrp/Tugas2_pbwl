<h2>Input Data Penduduk yang Sudah Vaksin</h2>

<?php
$pelanggan = new App\Models\Pelanggan;
$rowsArtist = $pelanggan->tampilGolongan();
$rowsArtists = $pelanggan->tampilUser();
?>

<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
    <table>
        <tr>
            <td>Id Penduduk</td>
                <td>
                    <select id="" name="pel_id_gol">
                        <option>Pilih Id Album...</option>
                        <?php foreach ($rowsArtist as $row) {
                            echo "<option value=$row[gol_id]>$row[gol_nama]</option>";
                        }  ?>
                </td>
        </tr>
        <tr>
            <td>Nomor Vaksin</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>Nama Penduduk</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>No KTP Penduduk</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>Apakah Penduduk Aktif</td>
            <td>
                <input type="radio" name="pel_aktif" value="Y">
                <label>Y</label>
                <input type="radio" name="pel_aktif" value="N">
                <label>N</label>
            </td>
        </tr>
        <tr>
            <td>Vaksin Ke-</td>
            <td><input type="number" name="pel_meteran" maxlength="1" placeholder="Ketik 1"></td>
        </tr>
        <tr>
            <td>Id User</td>
            <td>
                <select id="" name="pel_id_user">
                    <option>Pilih Id Album...</option>
                    <?php foreach ($rowsArtists as $row) {
                        echo "<option value=$row[user_id]>$row[user_nama]</option>";
                    }  ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Vaksin</td>
            <td><input type="time" name="created_at"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>