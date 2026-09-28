<html>
<head>
<title>Contoh Counter</title>
</head>
<body>
<?php
$nama_file = "counter.dat";
if (file_exists($nama_file))
{
    $berkas = fopen($nama_file,"r");
    $pencacah = (integer) trim(fgets($berkas, 255));
    $pencacah++;
    fclose($berkas);
}
else
    $pencacah = 1;

// simpan pencacah
$berkas = fopen($nama_file,"w");
fputs($berkas, $pencacah);
fclose($berkas);

// tulis ke halaman web
print("Anda pengunjung ke-$pencacah <br>\n");
?>
</body>
</html>
