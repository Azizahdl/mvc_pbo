<h2>Edit Minuman</h2>

<form action="<?php echo URL; ?>/minuman/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>Nama Minuman</td>
            <td><input type="text" name="nama_minuman" value="<?php echo $data['row']['nama_minuman']; ?>" required></td>
        </tr>
        <tr>
            <td>Jenis Minuman</td>
            <td>
                <textarea name="jenis_minuman" cols="30" rows="10"><?php echo $data['row']['jenis_minuman']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>