<h2>Input Golongan Vaksin</h2>

<form action="<?php echo URL; ?>/golongan/simpan" method="post">
    <table>
        <tr>
            <td>Kode Penduduk</td>
            <td><input type="text" name="gol_kode"></td>
        </tr>
        <tr>
            <td>Nama Penduduk</td>
            <td><input type="text" name="gol_nama"></td>
        </tr>
        <tr>
            <td>Tanggal Vaksin</td>
            <td><input type="date" name="created_at"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>