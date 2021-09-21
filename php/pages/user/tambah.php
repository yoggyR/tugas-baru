<?php
require 'function.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert ('data berhasil ditambahkan');
            document.location.href = 'index.php'; 
        </script>
        ";
    } else {
        echo "
        <script>
            alert ('data gagal ditambahkan');
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <br>
            <li>
                <label for="no_telpon">Nomor Telpon : </label>
                <input type="text" name="no_telpon" id="no_telpon" required>
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">
                    Tambah Data
                </button>
            </li>
        </ul>
    </form>
</body>

</html>