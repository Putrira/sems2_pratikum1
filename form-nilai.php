<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

 
<body>
               
  <div class="container">    
    <form class="form-horizontal p-5 shadow"  method="GET" action="aray_data.php">

      <div class="text-center">
        <h3 class="mb-5 text-mg">Form Nilai Siswa</h3>
      </div>
      <!------------>
        <div class="form-group row">
          <label for="namalengkap" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nama__lengkap" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label" ><b>NIM</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nim__" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="matakuliah" class="col-sm-3 col-form-label" ><b>Mata Kuliah</b></label>
          <div class="col-sm-7">
            <select name="mata__kuliah" class="form-control">
              <option value="DDP">Dasar-Dasar Pemrograman</option>
              <option value="PWL">Pemrograman Web Lanjutan</option>
              <option value="BD">Basis Data</option>
              <option value="BI">Bahasa Inggris</option>
              <option value="JK">Jaringan Komputer</option>
              <option value="IX">UI & UX</option>
              <option value="PK">PKn</option>
              <option value="SB">Statistik & Probabilitas</option>
              <option value="KK">Keterampilan Komunikasi</option>
            </select>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaiuts" class="col-sm-3 col-form-label" ><b>Nilai UTS</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilai__uts" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
            <label for="nilaiuas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control "  name="nilai__uas" required>
            </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaitugas" class="col-sm-3 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control"  name="nilai__tugas" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
  </div>

</body>