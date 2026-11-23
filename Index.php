<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Validasi Form PHP</title>
    <style>
        body { font-size: 18px; padding: 20px; font-family: Arial, sans-serif; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; }
        input, textarea { font-size: 16px; padding: 5px; width: 250px; }
        button { font-size: 16px; padding: 8px 15px; margin-top: 10px; }
    </style>
</head>
<body>

    <h2>Form Input Data</h2>

    <form action="" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <!-- Menggunakan atribut oninvalid untuk custom pesan "Tidak boleh kosong" -->
            <input type="text" name="nama" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="this.setCustomValidity('')">
        </div>

        <div class="form-group">
            <label>Email:</label>
            <!-- Menggunakan type="email" untuk validasi format email otomatis -->
            <input type="email" name="email" required 
                   oninvalid="this.setCustomValidity(this.value === '' ? 'Tidak boleh kosong' : 'Format email salah')" 
                   oninput="this.setCustomValidity('')">
        </div>

        <div class="form-group">
            <label>Telepon:</label>
            <!-- Menggunakan pattern angka [0-9]* agar muncul pesan jika bukan angka -->
            <input type="text" name="telepon" required pattern="[0-9]+" 
                   oninvalid="this.setCustomValidity(this.value === '' ? 'Tidak boleh kosong' : 'Nomor HP hanya boleh angka')" 
                   oninput="this.setCustomValidity('')">
        </div>

        <div class="form-group">
            <label>Alamat:</label><br>
            <textarea name="alamat" rows="3" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="this.setCustomValidity('')"></textarea>
        </div>

        <button type="submit" name="kirim">Kirim</button>
    </form>

    <?php
    if (isset($_POST['kirim'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $telepon = htmlspecialchars($_POST['telepon']);
        $alamat = htmlspecialchars($_POST['alamat']);

        echo "<h3>Data Berhasil Disimpan:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Telepon: $telepon <br>";
        echo "Alamat: $alamat <br>";
    }
    ?>

</body>
</html>
