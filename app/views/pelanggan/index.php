<h2>Data Penduduk yang Sudah Vaksin</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn ">Input Pelanggan</a>

<table>
      <tr>
            <th>ID</th>
            <th>ID Golongan</th>
            <th>Nama Penduduk</th>
            <th>Nomor Vaksin</th>
            <th>No Ktp Penduduk</th>
            <th>Penduduk Aktif</th>
            <th>Id User</th>
            <th>Vaksin Ke-</th>
            <th>Tanggal Vaksin</th>
            <th>Edit</th>
            <th>Hapus</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['created_at']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn ">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn ">Delete</a></td>
            </tr>
      <?php } ?>
</table>