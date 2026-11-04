
<?php
// ==========================================
// A1. ARRAY MULTIDIMENSI DATA KERANJANG
// rafael damanik
// ==========================================
$keranjang = [
    [
        "nama" => "Kopi Susu",
        "harga" => 18000,
        "jumlah" => 2
    ],
    [
        "nama" => "Teh Manis",
        "harga" => 8000,
        "jumlah" => 3
    ],
    [
        "nama" => "Roti Bakar",
        "harga" => 15000,
        "jumlah" => 1
    ]
];

// ==========================================
// A2. FUNCTION MENGHITUNG SUBTOTAL
// rafael damanik
// ==========================================
function hitungSubtotal($harga, $jumlah) {
    return $harga * $jumlah;
}

// ==========================================
// A3. FUNCTION FORMAT RUPIAH
// rafael damanik
// ==========================================
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// ==========================================
// A4. FOREACH DAN MENGHITUNG TOTAL
// rafael damanik
// ==========================================
$totalBelanja = 0;

foreach ($keranjang as $produk) {
    $subtotal = hitungSubtotal(
        $produk["harga"],
        $produk["jumlah"]
    );

    $totalBelanja += $subtotal;
}

// ==========================================
// A5. KONDISI DISKON 10% JIKA TOTAL > 50.000
// rafael damanik
// ==========================================
$diskon = 0;

if ($totalBelanja > 50000) {
    $diskon = $totalBelanja * 0.10;
}

$totalBayar = $totalBelanja - $diskon;

$tanggal = date("d-m-Y");

?>

<!-- // ==========================================
// A6. TANGGAL TRANSAKSI
// rafael damanik
// ========================================== -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Kedai Kopi</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="card">

        <div class="header">
            <h1>Raff BREW.</h1>
            <p>YOUR DAILY COFFEE TRANSACTION</p>
        </div>

        <hr class="divider">

        <p class="info-tanggal">
            Tanggal: <?= $tanggal; ?>
        </p>

        <table>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>

            <?php $no = 1; ?>

            <?php foreach ($keranjang as $produk): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $produk["nama"]; ?></td>
                <td><?= formatRupiah($produk["harga"]); ?></td>
                <td><?= $produk["jumlah"]; ?></td>
                <td>
                    <?= formatRupiah(
                        hitungSubtotal(
                            $produk["harga"],
                            $produk["jumlah"]
                        )
                    ); ?>
                </td>
            </tr>
            <?php endforeach; ?>

        </table>

        <div class="ringkasan">

            <div class="item">
                <span>Total Belanja</span>
                <span><?= formatRupiah($totalBelanja); ?></span>
            </div>

            <div class="item">
                <span>Diskon</span>
                <span><?= formatRupiah($diskon); ?></span>
            </div>

            <div class="item total">
                <span>Total Bayar</span>
                <span><?= formatRupiah($totalBayar); ?></span>
            </div>

        </div>

        <div class="footer">
            <p>Terima kasih • Selamat menikmati kopi Anda!</p>
        </div>

    </div>
</div>

</body>
</html>