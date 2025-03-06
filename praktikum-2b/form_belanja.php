<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2 class="text-center mb-4">Belanja Online</h2>
    <form method="post" action="hasil_belanja.php">
        <div class="form-group">
            <label for="customer">Customer</label>
            <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer" required>
        </div>
        <div class="form-group">
            <label>Pilih Produk</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="produk_tv" name="produk" value="TV" required>
                <label class="form-check-label" for="produk_tv">TV - Rp 4.200.000</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="produk_kulkas" name="produk" value="Kulkas" required>
                <label class="form-check-label" for="produk_kulkas">Kulkas - Rp 3.100.000</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="produk_mesin_cuci" name="produk" value="Mesin Cuci" required>
                <label class="form-check-label" for="produk_mesin_cuci">Mesin Cuci - Rp 3.800.000</label>
            </div>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-sm">Kirim</button>
    </form>

    <div class="allert alert-info mt-3">
        <h5 class="">Harga dapat berubah kapan saja</h5>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>