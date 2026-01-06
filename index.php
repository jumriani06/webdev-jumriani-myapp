<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Challenge</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #8B6F47 0%, #D4A574 50%, #A67C52 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            max-width: 550px;
            width: 100%;
            background: #F5F5DC;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(101, 67, 33, 0.4);
            border: 2px solid #D4A574;
        }
        
        h1 {
            text-align: center;
            color: #5D4E37;
            margin-bottom: 10px;
            font-size: 28px;
            text-shadow: 1px 1px 2px rgba(93, 78, 55, 0.1);
        }
        
        .subtitle {
            text-align: center;
            color: #8B7355;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #5D4E37;
            font-weight: 600;
            font-size: 14px;
        }
        
        label span {
            color: #A0522D;
        }
        
        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #D2B48C;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: all 0.3s ease;
            background: #FFF8DC;
        }
        
        input:focus, textarea:focus {
            outline: none;
            border-color: #8B6F47;
            box-shadow: 0 0 0 3px rgba(139, 111, 71, 0.15);
            background: #FFFEF0;
        }
        
        textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        small {
            display: block;
            margin-top: 6px;
            color: #A0826D;
            font-size: 12px;
        }
        
        .info-box {
            background: #F4E4C1;
            border-left: 4px solid #8B6F47;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 13px;
            color: #5D4E37;
        }
        
        .info-box strong {
            color: #704214;
        }
        
        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #8B6F47 0%, #A0826D 50%, #6F4E37 100%);
            color: #FFF8DC;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(111, 78, 55, 0.3);
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(111, 78, 55, 0.4);
            background: linear-gradient(135deg, #6F4E37 0%, #8B6F47 50%, #5D4E37 100%);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        .requirements {
            background: #F0E6D2;
            border: 2px solid #D2B48C;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        .requirements h3 {
            color: #8B4513;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .requirements ul {
            margin-left: 20px;
            font-size: 13px;
            color: #5D4E37;
        }
        
        .requirements li {
            margin-bottom: 5px;
        }
        
        /* Decorative element */
        .container::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, #D4A574 0%, transparent 70%);
            opacity: 0.3;
            border-radius: 50%;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Form Pendaftaran</h1>
        <p class="subtitle">Lengkapi data di bawah ini dengan benar</p>
        
        <div class="info-box">
            <strong>ℹ️ Perhatian:</strong> Semua field bertanda <span style="color: #A0522D;">*</span> wajib diisi dengan data yang valid.
        </div>
        
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap <span>*</span></label>
                <input 
                    type="text" 
                    id="nama" 
                    name="nama" 
                    placeholder="Masukkan nama lengkap Anda"
                    required
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
                >
                <small>Hanya menerima @gmail.com atau @yahoo.com</small>
            </div>
            
            <div class="form-group">
                <label for="nomor">Nomor Telepon <span>*</span></label>
                <input 
                    type="text" 
                    id="nomor" 
                    name="nomor" 
                    placeholder="08123456789"
                    pattern="[0-9]*"
                    required
                >
                <small>10-15 digit angka saja (tanpa spasi atau tanda hubung)</small>
            </div>
            
            <div class="form-group">
                <label for="pesan">Pesan <span>*</span></label>
                <textarea 
                    id="pesan" 
                    name="pesan" 
                    placeholder="Tulis pesan atau komentar Anda di sini..."
                    required
                ></textarea>
                <small>Minimal 5 karakter</small>
            </div>
            
            <button type="submit">✉️ Kirim Data</button>
        </form>
        
        <div class="requirements">
            <h3>⚠️ Persyaratan Validasi:</h3>
            <ul>
                <li>Nama: tidak boleh kosong, minimal 3 karakter</li>
                <li>Email: harus format valid dengan @gmail.com atau @yahoo.com</li>
                <li>Nomor: hanya angka, panjang 10-15 digit</li>
                <li>Pesan: tidak boleh kosong, minimal 5 karakter</li>
            </ul>
        </div>
    </div>
</body>
</html>