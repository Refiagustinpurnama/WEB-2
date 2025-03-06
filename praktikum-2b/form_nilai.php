<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff; 
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        h2 {
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px; 
        }
        .btn-primary {
            width: 100%; 
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Form Nilai</h2>
    <form class="form-horizontal" method="post" action="nilai_mahasiswa.php">
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div> 
                    <input id="text" name="text" type="text" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
                <select id="select" name="select" class="custom-select" required>
                    <option value="Pemograman Web2">Pemograman Web2</option>
                    <option value="Dasar Dasar Pemograman">Dasar Dasar Pemograman</option>
                    <option value="Basis Data">Basis Data</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
                <input id="text1" name="text1" type="number" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
                <input id="text2" name="text2" type="number" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="text3" class="col-4 col-form-label">Nilai Praktikum/Tugas</label> 
            <div class="col-8">
                <input id="text3" name="text3" type="number" class="form-control" required>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>