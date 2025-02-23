<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

</html>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mhs (nama, nim, email, nomor, jurusan) VALUES ('$nama', '$nim', '$email', '$nomor', '$jurusan')";
    if ($koneksi->query($query)) {
        echo "<script>Swal.fire('Berhasil!', 'Data berhasil ditambahkan', 'success').then(() => { window.location.href = 'index.php'; })</script>";
    } else {
        echo "<script>Swal.fire('Gagal!', 'Data gagal ditambahkan', 'error')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #2196F3;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Tambah Data Mahasiswa</h2>
        <form method="POST">
            <input type="text" name="nama" placeholder="Nama" required autocomplete="off">
            <input type="text" name="nim" placeholder="NIM" required autocomplete="off">
            <input type="email" name="email" placeholder="Email" autocomplete="off">
            <input type="number" name="nomor" placeholder="Nomor" autocomplete="off">
            <input type="text" name="jurusan" placeholder="Jurusan" autocomplete="off">
            <button type="submit" name="simpan">Simpan</button>
            <a href="index.php">Kembali</a>
        </form>
    </div>
</body>

</html>