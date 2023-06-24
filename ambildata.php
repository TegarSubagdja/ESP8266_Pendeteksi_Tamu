<?php
// Koneksi ke database
$host = "localhost";
$username = "id20947738_";
$password = "";
$database = "id20947738_";

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi ke database
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk menampilkan data LDR dengan id=1
$query = "SELECT status FROM td_status WHERE id=1";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

if ($row = mysqli_fetch_assoc($result)) {
    $status = $row['status'];
    echo $status;
} else {
    echo "Data Status tidak ditemukan";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
