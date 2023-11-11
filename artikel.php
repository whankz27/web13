<?php
include "../ptm12/koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Berita</title>
</head>

<body>
    <h1>Form Berita</h1>
    <form name="article" method="post" action="proses_tambah.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="18%">Judul</td>
                <td width="2%">:</td>
                <td width="80%"><input type="text" name="judul" size="30"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis" size="30"></td>
            </tr>
            <tr>
                <td>Lead</td>
                <td>:</td>
                <td><textarea name="lead" rows="4" cols="45"></textarea></td>
            </tr>
            <tr>
                <td>Content</td>
                <td>:</td>
                <td><textarea name="content" rows="8" cols="45"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="Submit" value="Add" class="tombol">
                    <input type="reset" name="batal" value="Reset" class="tombol">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>