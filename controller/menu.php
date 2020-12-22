<?php
if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'home':
            include "view/home/index.php";
            break;
        case 'berita':
            include "view/berita/index.php";
            break;
        case 'konten':
            include "view/berita/konten.php";
            break;
        case 'donasi':
            include "view/donasi/index.php";
            break;
        default:
            include "view/404.html";
            break;
    }
} 
else {
    include "view/home/index.php";
}
?>