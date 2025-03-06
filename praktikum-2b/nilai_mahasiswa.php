<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <style>
        body {
            background-color: #e9f5ef; 
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px; 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
        }
        h2 {
            margin-bottom: 20px; 
            color: #28a745; 
            font-weight: bold;
        }
        .result {
            margin-top: 20px; 
            padding: 20px;
            border: 2px solid #28a745; 
            border-radius: 8px; 
            background-color: #d4edda; 
            transition: transform 0.3s; 
        }
        .result:hover {
            transform: scale(1.02);
        }
        .btn-secondary {
            background-color: #6c757d; 
            border-color: #6c757d; 
        }
        .btn-secondary:hover {
            background-color: #5a6268; 
            border-color: #545b62;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Hasil</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['text']);
        $mata_kuliah = htmlspecialchars($_POST['select']);
        $nilai_uts = htmlspecialchars($_POST['text1']);
        $nilai_uas = htmlspecialchars($_POST['text2']);
        $nilai_praktikum = htmlspecialchars($_POST['text3']);

        echo '<div class="result">';
        echo '<p><strong>Nama:</strong> ' . $nama . '</p>';
        echo '<p><strong>Mata Kuliah:</strong> ' . $mata_kuliah . '</p>';
        echo '<p><strong>Nilai UTS:</strong> ' . $nilai_uts . '</p>';
        echo '<p><strong>Nilai UAS:</strong> ' . $nilai_uas . '</p>';
        echo '<p><strong>Nilai Praktikum/Tugas:</strong> ' . $nilai_praktikum . '</p>';
        echo '</div>';
    } else {
        echo '<p class="text-danger">Tidak ada data yang diterima.</p>';
    }
    ?>
    
    <div class="mt-4">
        <a href="form_nilai.php" class="btn btn-secondary">Kembali ke Form</a>
    </div>
</div>
</body>
</html>