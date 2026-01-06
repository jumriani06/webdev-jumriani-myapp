<?php
require 'db/connection.php';

if (isset($_POST['nama'], $_POST['email'], $_POST['umur'])) {
    $name  = $_POST['nama'];
    $email = $_POST['email'];
    $umur  = $_POST['umur'];

    $query = "INSERT INTO students (name, email, age)
              VALUES ('$name', '$email', '$umur')";

    mysqli_query($conn, $query);
    echo "Data berhasil disimpan";
} else {
    echo "Data tidak lengkap";
}
?>