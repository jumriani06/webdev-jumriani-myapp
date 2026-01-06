<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    // Ambil data dari POST
    $name = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $nomor = isset($_POST['nomor']) ? trim($_POST['nomor']) : '';
    $message = isset($_POST['pesan']) ? trim($_POST['pesan']) : '';
    
    // VALIDASI NAMA - tidak boleh kosong
    if (empty($name)) {
        $errors[] = "Nama tidak boleh kosong";
    } elseif (strlen($name) < 3) {
        $errors[] = "Nama minimal 3 karakter";
    }
    
    // VALIDASI EMAIL - harus @gmail.com atau @yahoo.com
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    } elseif (!preg_match('/@(gmail\.com|yahoo\.com)$/', $email)) {
        $errors[] = "Email harus menggunakan @gmail.com atau @yahoo.com";
    }
    
    // VALIDASI NOMOR - harus angka dan minimal 10 digit
    if (empty($nomor)) {
        $errors[] = "Nomor telepon tidak boleh kosong";
    } elseif (!preg_match('/^[0-9]{10,15}$/', $nomor)) {
        $errors[] = "Nomor telepon harus berupa angka (10-15 digit)";
    }
    
    // VALIDASI PESAN - tidak boleh kosong
    if (empty($message)) {
        $errors[] = "Pesan tidak boleh kosong";
    } elseif (strlen($message) < 10) {
        $errors[] = "Pesan minimal 10 karakter";
    }
    
    // Cek apakah ada error
    if (!empty($errors)) {
        echo "<div style='background: #fee; border-left: 4px solid #f44; padding: 20px; margin: 20px; border-radius: 5px;'>";
        echo "<h2 style='color: #c33; margin-bottom: 10px;'>❌ Validasi Gagal!</h2>";
        echo "<ul style='color: #c33;'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<br><a href='javascript:history.back()' style='background: #667eea; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>← Kembali</a>";
        echo "</div>";
    } else {
        // Jika validasi berhasil - sanitasi data
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $nomor = htmlspecialchars($nomor);
        $message = htmlspecialchars($message);
        
        echo "<div style='background: #efe; border-left: 4px solid #4f4; padding: 20px; margin: 20px; border-radius: 5px;'>";
        echo "<h2 style='color: #2a2;'>✅ Data Berhasil Dikirim!</h2>";
        echo "<div style='background: white; padding: 15px; margin-top: 15px; border-radius: 5px;'>";
        echo "<h2>TERIMA KASIH $name</h2>";
        echo "<p><strong>Nama:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Nomor:</strong> $nomor</p>";
        echo "<p><strong>Pesan:</strong> $message</p>";
        echo "</div>";
        echo "<br><a href='/' style='background: #667eea; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>← Kembali ke Form</a>";
        echo "</div>";
    }
    
} else {
    echo "<div style='background: #fee; border-left: 4px solid #f44; padding: 20px; margin: 20px;'>";
    echo "<h2 style='color: #c33;'>❌ Metode Request Tidak Valid</h2>";
    echo "<p>Gunakan metode POST untuk mengirim data.</p>";
    echo "</div>";
}
?>