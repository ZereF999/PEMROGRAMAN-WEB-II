<?php
// Latihan 3 - Switch Case
$destination = "Tokyo"; // coba ganti nilainya, misal "Egypt" atau "Amsterdam"

switch ($destination) {
    case "Las Vegas":
        echo "Bring an extra \$500"; // pakai \$ agar $500 tidak dibaca sebagai variabel
        break;
    case "Amsterdam":
        echo "Bring an open mind";
        break;
    case "Egypt":
        echo "Bring 15 bottles of SPF 50 Sunscreen";
        break;
    case "Tokyo":
        echo "Bring lots of money";
        break;
    case "Caribbean Islands":
        echo "Bring a swimsuit";
        break;
    default:
        echo "Enjoy your trip!";
        break;
}
?>
