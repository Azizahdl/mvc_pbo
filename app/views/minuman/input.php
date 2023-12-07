<h2>Input Minuman</h2>

<form action="<?php echo URL; ?>/minuman/save" method="post">
    <table>
        <tr>
            <td>nama minuman</td>
            <td><input type="text" name="nama_minuman" required></td>
        </tr>
        <tr>
            <td>jenis minuman</td>
            <td><input type="text" name="jenis_minuman" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>