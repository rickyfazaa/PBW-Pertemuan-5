<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum WEB Modul 5</title>
</head>
<body>
    <h2>From Input Data Dosen</h2>
    <br>
    <a href="tambah.php">+Tambah dosen</a>
    <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Jenis Kelamin</th>
            <th>Tahun masuk</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Pendidikan Terakhir</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from dosen");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nip']; ?></td>
                <td><?php echo $d['nama_dosen']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['tahun_masuk']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['pendidikan_terakhir']; ?></td>
                <td>
                    <a>Edit</a> <a>Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>