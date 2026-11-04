
<?php
// B1. INISIALISASI VARIABEL
// rafael damanik
$nama = "";
$harga = "";
$errorNama = "";
$errorHarga = "";
$pesanSukses = "";

// B2. MEMPROSES DATA DARI FORM POST
// rafael damanik
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = trim($_POST["nama"] ?? "");
    $harga = trim($_POST["harga"] ?? "");

    // B3. VALIDASI NAMA PRODUK
    if ($nama == "") {
        $errorNama = "Nama produk wajib diisi!";
    }

    // B4. VALIDASI HARGA PRODUK
    if ($harga == "") {
        $errorHarga = "Harga wajib diisi!";
    } elseif (!is_numeric($harga) || $harga <= 0) {
        $errorHarga = "Harga harus berupa angka lebih dari 0!";
    }

    // B5. PESAN BERHASIL JIKA DATA VALID
    if ($errorNama == "" && $errorHarga == "") {
        $pesanSukses = "Produk " . $nama . " berhasil ditambahkan!";

        $nama = "";
        $harga = "";
    }
}

// B6. KEAMANAN OUTPUT HTML
// rafael damanik
function aman($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Kedai Kopi</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="card">

        <div class="header">
            <h1>NEW PRODUCT.</h1>
            <p>ADD SOMETHING NEW TO THE MENU</p>
        </div>

        <hr class="divider">

        <?php if ($pesanSukses != ""): ?>
            <div class="success">
                <?= aman($pesanSukses); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">

            <div class="form-group">
                <label>Nama Produk</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Contoh: Es Cokelat"
                    value="<?= aman($nama); ?>"
                >

                <span class="error">
                    <?= $errorNama; ?>
                </span>
            </div>

            <div class="form-group">
                <label>Harga Produk (Rp)</label>

                <input
                    type="number"
                    name="harga"
                    placeholder="Contoh: 12000"
                    value="<?= aman($harga); ?>"
                >

                <span class="error">
                    <?= $errorHarga; ?>
                </span>
            </div>

            <button type="submit">Simpan Produk</button>

        </form>

        <div class="footer">
            <p>Kedai Kopi • Sistem Kasir Sederhana</p>
        </div>

    </div>
</div>

</body>
</html>