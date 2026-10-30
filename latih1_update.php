<?php
// Latih 1 - UPDATE (versi mysqli)
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_query($con, "UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");

echo "Data berhasil diupdate";

mysqli_close($con);
?>
