<?php
include "../ptm12/koneksi.php";

$perintah = "SELECT * FROM articles ORDER BY articleID DESC";
$hasil = mysqli_query($koneksi, $perintah);

echo "<h2>List Artikel</h2><br><ul>";

while ($row = mysqli_fetch_array($hasil)) {
    echo "<li>" . $row['judul'] . " &nbsp;" . $row['penulis'] . " &nbsp; " . $row['waktu'] . " &nbsp;<a href=\"edit_article.php?articleID=" . $row['articleID'] . "\">Edit</a> &nbsp;<a href=\"delete.php?articleID=" . $row['articleID'] . "\">Hapus</a></li><br>";
}

echo "</ul>";
echo "<br><a href=\"add_article.php\">Tambah</a>";
echo "<br><a href=\"adminpanel.php\">Admin Panel</a>";
