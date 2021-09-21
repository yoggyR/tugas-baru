<?php
$conn = mysqli_connect("localhost", "root", "", "camper");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $no_telp = htmlspecialchars($data["no_telpon"]);
    $email = htmlspecialchars($data["email"]);

    // query insert data
    $query = "INSERT INTO users VALUES ('', '$nama', '$no_telp', '$email')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $no_telp = htmlspecialchars($data["no_telpon"]);
    $email = htmlspecialchars($data["email"]);

    // query ubah data
    $query = "UPDATE users SET nama = '$nama', no_telpon = '$no_telp', email = '$email' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
