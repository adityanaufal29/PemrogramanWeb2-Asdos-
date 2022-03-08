<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <h3>Form Nilai Siswa</h3>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<br><center>
<form action="form_nilai.php" method="GET">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas Praktikum" type="text" class="form-control">
    </div>
  </div> 
</center>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="proses">
    </div>
  </div>
</form>

<!-- Kode PHP -->
<?php

// Menangkap Data User
$proses = $_GET["proses"];
$nama = $_GET["nama"];
$matkul = $_GET["matkul"];
$nilai_uts = $_GET["nilai_uts"];
$nilai_uas = $_GET["nilai_uas"];
$nilai_tugas = $_GET["nilai_tugas"];

echo "Proses : " . $proses;
echo "<br>Nama : " . $nama;
echo "<br>Mata Kuliah : " . $matkul;
echo "<br>Nilai UTS : " . $nilai_uts;
echo "<br>Nilai UAS : " . $nilai_uas;
echo "<br>Nilai Tugas/Praktikum : " . $nilai_tugas;


?>

</body>
</html>