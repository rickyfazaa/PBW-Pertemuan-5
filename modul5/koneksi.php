<?php
    $koneksi = mysqli_connect("localhost", "root", "", "akademik_1151900034");

    if(mysqli_connect_error())
    {
        echo "koneksi error". mysqli_connect_error();
    }
?>