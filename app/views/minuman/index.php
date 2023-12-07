<h2>Minuman</h2>

<a href="<?php echo URL; ?>/minuman/input" class="btn">Input Minuman</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>ID</th>
                  <th>NAMA</th>
                  <th>JENIS</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_minuman']; ?></td>
                        <td><?php echo $row['jenis_minuman']; ?></td>
                        <td><a href="<?php echo URL; ?>/minuman/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/minuman/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>