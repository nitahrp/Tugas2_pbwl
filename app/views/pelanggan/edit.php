<h2>Edit Data Penduduk yang Telah Vaksinasi</h2>

<?php
$pelanggan = new App\Models\Pelanggan;
$rowsArtist = $pelanggan->tampilGolongan();
$rowsArtists = $pelanggan->tampilUser();
?>


<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <table>
        <input type="hidden" name="pel_id" value="<?php echo $data['pel_id']; ?>">
        <tr>
            <td>Id Golongan</td>
            <td>
                    <select id="" name="pel_id_gol">
                        <option>Pilih Id Album...</option>
                        <?php foreach ($rowsArtist as $row) {
                            echo "<option value=$row[gol_id]>$row[gol_nama]</option>";
                        }  ?>
                </td>
        </tr>
        <tr>
            <td>Nama Penduduk</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['pel_nama'] ?>"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['pel_ktp'] ?>"></td>
        </tr>
        <tr>
            <td>Vaksin Ke-</td>
            <td><input type="number" name="pel_meteran" maxlength="1" placeholder="Ketik 1" value="<?php echo $data['pel_meteran'] ?>"></td>

        </tr>
        <tr>
        <tr>
            <td>Aktif</td>
            <td>
                <input type="radio" name="pel_aktif" value="Y" <?php echo ($data['pel_aktif'] == 'Y') ? 'checked' : ''; ?>>
                <label>Y</label>
                <input type="radio" name="pel_aktif" value="N" <?php echo ($data['pel_aktif'] == 'N') ? 'checked' : ''; ?>>
                <label>N</label>
            </td>
        </tr>
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
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>