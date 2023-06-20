<h2>Input Data Penduduk</h2>

<form action="<?php echo URL; ?>/user/simpan" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="user_password"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="user_alamat"></td>
        </tr>
        <tr>
            <td>Nomor Hp</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>Nomor Pos</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>