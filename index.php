<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

</html>

<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>CRUD Data Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="main-content">
        <h2>Data Mahasiswa</h2>
        <a href="tambah.php" class="btn-tambah">Tambah Data</a>

        <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Nomor</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            $result = $koneksi->query("SELECT * FROM mhs");
            while ($data = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['nomor'] ?></td>
                    <td><?= $data['jurusan'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>" class="btn-edit">Edit</a>
                        <a href="hapus.php?id=<?= $data['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>