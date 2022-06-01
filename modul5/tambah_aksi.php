<?php
    //koneksi database
    include "koneksi.php";

    //menangkap data yang dikirim di form
    $nip = $_POST['nip'];
    $nama_dosen = $_POST['nama_dosen'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];

    //menginput data ke database
    mysqli_query($koneksi, "insert into dosen values('', '$nip', '$nama_dosen', '$jenis_kelamin', '$tahun_masuk', '$agama', '$alamat', '$pendidikan_terakhir')");

    //mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>