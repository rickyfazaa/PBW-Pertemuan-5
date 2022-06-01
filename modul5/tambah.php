<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
</head>
<body>
    <h2>Tambah Dosen</h2>
    <br>
    <a href="index.php">Kembali</a>
    <br><br>
    <h3>Tambah data dosen</h3>
    <form action="tambah_aksi.php" method="POST">
        <table>
            <tr>
                <td>NIP</td>
                <td><input type="number" name="nip" id=""></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="nama_dosen" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" id=""></td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td><input type="text" name="tahun_masuk" id=""></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td><input type="text" name="pendidikan_terakhir" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="" id="" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>