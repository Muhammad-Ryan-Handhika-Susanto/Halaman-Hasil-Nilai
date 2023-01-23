<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Closing Page</title>
  </head>
  <body>
    <!-- kata selamat -->
    <div class="selamat">
      <h1>Selamat, kamu sudah selesai mengerjakan kuis ini 😊 <br> Nilai Kamu : </h1>
    </div>

    <!-- Selamat nilai kamu di atas KKM | pertahankan potensimu -->
    <!-- Nilai kamu masih kurang dari kkm | tingkatkan potensimu -->

    <!-- background moving -->
    <div class="area overflow-hidden">
      <ul class="circles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
      </ul>
      <div class="position-absolute top-50 start-50 translate-middle kotak" style="background: linear-gradient(#3e43a8, #323aca);border-radius: 10px;opacity: 0.7;">
        <h1 align="center" style="color: white;" class="mt-4">Penilaian</h1>
        <div style="width: 100%;height: 50%;padding: 20px;color: white;">
          <div class="row">
            <div class="col-10 penilaian">
              <?php
              $nilai = 90;
              if($nilai > 80) {
                echo "<h3>Kerja bagus, kamu mendapatkan nilai di atas kkm. Teruslah belajar dan pertahankan potensimu</h3>";
              } else {
                echo "<h3>nice try, kamu mendapatkan nilai di bawah kkm. Teruslah belajar dan pertahankan potensimu</h3>";
              }
              ?>
              <hr class="mb-5">
            </div>
            <div class="col gambar">
              <img class="position-absolute top-50 start-100 translate-middle" src="img/avatar3.png" alt="avatar 3">
            </div>
          </div>
        </div>
        <div class="emote position-absolute bottom-0 end-0">
          <h1>❤️</h1>
        </div>
      </div>
      <marquee class="position-absolute bottom-0 end-0" behavior="" width="350%" direction="left" scrollamount="10"><img style="width: 130px;" src="img/kapalselam2.png" alt="kapal selam"></marquee>
    </div >


<!-- marquee -->
<div class="marquee">
  
</div>





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>
