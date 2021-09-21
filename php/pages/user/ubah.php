<?php
require 'function.php';

// ambil data di URl
$id = $_GET["id"];

// query data pelanggan berdasarkan id
$pln = query("SELECT * FROM users WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert ('data berhasil diubah');
            document.location.href = 'index.php'; 
        </script>
        ";
    } else {
        echo "
        <script>
            alert ('data gagal diubah');
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
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $pln["id"] ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?php echo $pln["nama"] ?>" required>
            </li>
            <br>
            <li>
                <label for="no_telpon">Nomor Telpon : </label>
                <input type="text" name="no_telpon" id="no_telpon" value="<?php echo $pln["no_telpon"] ?>" required>
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" value="<?php echo $pln["email"] ?>" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">
                    Ubah Data
                </button>
            </li>
        </ul>
    </form>
</body>

</html>