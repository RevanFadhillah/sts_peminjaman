<?php
if ($_SESSION['role']=="admin"): ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Barang</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="list_barang.php">List Barang</a>
          <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
          <a class="dropdown-item" href="pengembalian.php">Pengembalian</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tentang.php">Tentang</a>
      </li>
    </ul>
    <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0">LOGOUT</button></a>
  </div>
</nav>  
<?php else: ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Barang</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="list_barang2.php">List Barang</a>
          <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
          <a class="dropdown-item" href="pengembalian.php">Pengembalian</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tentang.php">Tentang</a>
      </li>
    </ul>
    <a href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0">LOGOUT</button></a>
  </div>
</nav>
<?php endif; ?>