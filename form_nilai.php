<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP 01</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
             
        <div class="container-fluid bg-light p-5  shadow-sm">
            <div class="row">
              <div class="col-8">
                <form method="POST" action="form_nilai.php" class="form-horizontal ">
                  <h1 class="text-primary">FORM NILAI SISWA</h1>
                  <hr>
                  <div class="form-group row">
                    <label for="nama__siswa" class="col-sm-4 col-form-label"><b>Nama Siswa</b></label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama">
                    </div>
                  </div>
                  <!------------------------>
     
                  <div class="form-group row">
                    <legend class="col-form-label col-sm-4 pt-label"><b>Mata Kuliah</b></legend>
                        <select name="matkul" >
                            <option value="DDP">PPKN</option> 
                            <option value="BDI">Basis Data I</option> 
                            <option value="WEB1">Pemrograman Web 2</option> 
                            <option value="WEB1">Jaringan komputer</option> 
                            <option value="WEB1">Statistika & probabilitas</option> 
                            <option value="WEB1">Keterampilan komunikasi</option> 
                            <option value="WEB1">Bahasa Inggris</option> 
                            <option value="WEB1">User Interface & User Experience</option> 
                        </select><br/> 
                  </div>
                  <!------------------------>
                  
                  <div class="form-group row">
                    <label for="nilai_uts" class="col-sm-4 col-form-label"><b>Nilai UTS</b></label>
                    <div class="col-sm-2">
                      <input type="number" for="produk__" class="form-control" name="nilai_uts" value="" required>
                    </div>
                  </div>
                   <!------------------------>

                   <div class="form-group row">
                    <label for="nilai_uas" class="col-sm-4 col-form-label"><b>Nilai UAS</b></label>
                    <div class="col-sm-2">
                      <input type="number" for="produk__" class="form-control" name="nilai_uas" value="" required>
                    </div>
                  </div>
                   <!------------------------>

                   <div class="form-group row">
                    <label for="nilai_tugas" class="col-sm-4 col-form-label"><b>Nilai Tugas</b></label>
                    <div class="col-sm-2">
                      <input type="number" for="produk__" class="form-control" name="nilai_tugas" value="" required>
                    </div>
                  </div>
                   <!------------------------>

                   <button href="" type="submit" class="btn btn-primary pl-5 pr-5" name="hasil_input">Kirim</button>
                </form>
              </div> <!-----col-6-->

              <div class="container-fluid bg-light mt-5 mb-5 p-5 shadow-sm">
              
          <?php
          $proses= $_POST['hasil_input'];
          $nama_siswa = $_POST['nama']; 
          $mata_kuliah = $_POST['matkul']; 
          $nilai_uts = $_POST['nilai_uts']; 
          $nilai_uas = $_POST['nilai_uas']; 
          $nilai_tugas = $_POST['nilai_tugas']; 
          echo '<br/>Hasil Input Nilai : '.$proses; 
          echo '<br/>Nama : '.$nama_siswa; 
          echo '<br/>Mata Kuliah : '.$mata_kuliah; 
          echo '<br/>Nilai UTS : '.$nilai_uts; 
          echo '<br/>Nilai UAS : '.$nilai_uas; 
          echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas; 
            ?>
 
        </div>

</body>
</html>