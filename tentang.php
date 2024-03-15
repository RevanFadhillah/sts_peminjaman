<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title> Tentang!</title>
  </head>
  <body>
  <div class="p-3 mb-2 bg-primary text-white">
  <?php
      session_start();
      if($_SESSION['status']!="login"){
          header("location:login.php?pesan=belum_login");
      }else{
        include("navbar.php");
      }
    ?>
    <br><br><center><img src ="logobn.jpg">
    <br><br><h3>Tentang Sekolah SMK BAKTI NUSANTARA 666</h3>
</center>


  <div class="container">
<p>"SMK Bakti Nusantara 666 adalah Sekolah Menengah Kejuruan berbasis Industri kreatif, terletak di Kawasan Bandung timur yang berdiri sejak tahun 2007. Dengan tenaga pengajar yang Profesional dan kompeten dibidangnya. SMK Bakti Nusantara 666 telah terakreditasi A dan memiliki khas tersendiri dalam membentuk karakter siswa melalui program unggulan sehingga menghasilkan lulusan yang berkualitas sehingga langsung dilirik oleh pihak industri."</p>
<p>SMK Bakti Nusantara 666 memiliki kelompok kompetensi keahlian, diantaranya :</p>

<p>1.         Pengembangan Perangkat Lunak dan Gim</p>

<p>2.         Desain Komunikasi Visual</p>

<p>3.         Animasi</p>

<p>4.         Akuntansi dan Keuangan Lembaga</p>

<p>5.         Bisnis Daring dan Pemasaran</p>

<p>Keberadaannya didukung oleh dunia usaha dan dunia industri, baik dalam pembelajaran maupun penyerapan lulusannya. Pembelajaran teori dan praktek tidak hanya dilakukan di dalam kelas tetapi di dunia industri melalui praktek kerja industri di perusahaan yang relevan. Memasuki pergaulan global yang penuh dengan kompetisi ini, kita perlu menyiapkan mental siswa-siswi agar mampu bersaing dengan baik dengan memiliki akhlaq, kemandirian, kecerdasan, juga tentunya kreatifitas dan inovasi yang sesuai tumbuh kembangnya. SMK Bakti Nusantara 666 berpartisipasi membangun masyarakat pembelajar dalam menyongsong era baru dan menjadikan siswa-siswi menjadi generasi yang mampu berkompetisi tanpa kehilangan wajah budaya dan moral.</p>

</div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>