<?php
include "../ptm12/koneksi.php";

$time = date("d M Y, H:i");

$title = $_POST['judul'];
$author = $_POST['penulis'];
$abstraksi = $_POST['lead'];
$content = $_POST['content'];
$ID = $_POST['articleID'];

$title = mysqli_real_escape_string($koneksi, $title);
$author = mysqli_real_escape_string($koneksi, $author);
$abstraksi = mysqli_real_escape_string($koneksi, $abstraksi);
$content = mysqli_real_escape_string($koneksi, $content);

$update = "UPDATE articles SET judul='$title', penulis='$author', lead='$abstraksi', content='$content', waktu='$time' WHERE articleID ='$ID'";
$hasil = mysqli_query($koneksi, $update);

if ($hasil) {
    echo "Artikel berhasil diupdate<br>";
    echo "<a href=\"tampil_articles.php\">List</a>";
} else {
    echo "Artikel gagal diupdate";
}
