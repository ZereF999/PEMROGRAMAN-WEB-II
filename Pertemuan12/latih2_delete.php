<?php
// Latih 2 - DELETE (versi mysqli)
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_query($con, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'");

echo "Data berhasil dihapus";

mysqli_close($con);
?>
