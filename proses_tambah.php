<?php
include "../ptm12/koneksi.php";

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$lead = $_POST['lead'];
$isi = $_POST['content'];
$time = date("d M Y, H:i");
$lead = str_replace("\r\n", "<br>", $lead); // Mengganti newline dalam $lead
$isi = str_replace("\r\n", "<br>", $isi); // Mengganti newline dalam $isi

// Melakukan sanitasi input untuk mencegah serangan SQL Injection
$judul = mysqli_real_escape_string($koneksi, $judul);
$penulis = mysqli_real_escape_string($koneksi, $penulis);
$lead = mysqli_real_escape_string($koneksi, $lead);
$isi = mysqli_real_escape_string($koneksi, $isi);

$query = "INSERT INTO articles (judul, penulis, lead, content, waktu) VALUES ('$judul', '$penulis', '$lead', '$isi', '$time')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
    echo "<a href=\"tampil_artikel.php\">List</a>";
} else {
    echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
