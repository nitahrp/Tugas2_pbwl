<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <table>
        <input type="hidden" name="gol_id" value="<?php echo $data['gol_id']; ?>">
        <tr>
            <td>Kode Golongan Vaksin</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['gol_kode'] ?>"></td>
        </tr>
        <tr>
            <td>Nama Golongan Vaksin</td>
            <td><input type="text" name="gol_nama" value="<?php echo $data['gol_nama'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Vaksin</td>
            <td><input type="time" name="created_at" value="<?php echo $data['created_at'] ?>"></td>
        </tr>
        <tr>
            <td>Pembaharuan Vaksin</td>
            <td><input type="date" name="updated_at" value="<?php echo $data['updated_at'] ?>"></td>
        </tr> 
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>