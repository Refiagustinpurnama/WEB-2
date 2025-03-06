<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css"> 
<body>
<div class="container">
    <h2>Hasil Belanja</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $customer = htmlspecialchars($_POST['customer']);
        $produk = htmlspecialchars($_POST['produk']);
        $jumlah = intval($_POST['jumlah']);
        
        echo "<p><strong>Nama Customer:</strong> $customer</p>";
        echo "<p><strong>Produk Pilihan:</strong> $produk</p>";
        echo "<p><strong>Jumlah Beli:</strong> $jumlah</p>";
        
        $harga = 0;
        switch ($produk) {
            case "TV":
                $harga = 4200000;
                break;
            case "Kulkas":
                $harga = 3100000;
                break;
            case "Mesin Cuci":
                $harga = 3800000;
                break;
        }

        $total_harga = $harga * $jumlah;
        echo "<p><strong>Total Harga:</strong> Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
    } else {
        echo "<p class='text-danger'>Tidak ada data yang diterima.</p>";
    }
    ?>
    <a href="form_belanja.php" class="btn btn-secondary mt-3">Kembali</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>