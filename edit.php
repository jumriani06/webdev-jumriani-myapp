<?php
require 'db/connection.php';

$id = (int) $_GET['id']; // casting agar lebih aman
$query = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

if (!$student) {
    echo "Data tidak ditemukan";
    exit;
}
?>

<form action="update.php" method="POST">

    <!-- id WAJIB dikirim -->
    <input type="hidden" name="id" value="<?= $student['id']; ?>">

    <div class="form-group">
        <label for="nama">Nama Lengkap <span>*</span></label>
        <input 
            type="text" 
            id="nama" 
            name="nama" 
            placeholder="Masukkan nama lengkap Anda"
            required
            value="<?= $student['name']; ?>"
        >
        <small>Minimal 3 karakter</small>
    </div>

    <div class="form-group">
        <label for="email">Email <span>*</span></label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="contoh@gmail.com atau contoh@yahoo.com"
            required
            value="<?= $student['email']; ?>"
        >    
        <small>Hanya menerima @gmail.com atau @yahoo.com</small>
    </div>

    <div class="form-group">
        <label for="umur">Umur <span>*</span></label>
        <input 
            type="number" 
            id="umur" 
            name="umur" 
            placeholder="umur anda"
            required
            value="<?= $student['age']; ?>"
        >
    </div>

    <button type="submit">Update</button>
</form>
