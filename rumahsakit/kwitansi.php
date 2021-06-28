<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="styletb.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>ADMINISTRATOR</title>
  </head>

  <body>
 <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
    <a class="navbar-brand fas fa-store" href="dashboard.php">TOKO JAYAUSAHA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="cari" style="margin-left: 40em;margin-bottom:0.7em">
            <button class="btn btn-outline-light search2" style="margin-bottom: 0.6em" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="navbar-nav" >
          <a class="nav-item nav-link active" href="#"><h5><i class="fas fa-envelope-square" style="color: white"></i></h5></a>
          <a class="nav-item nav-link" href="#"><h5><i class="fas fa-bell-slash" style="color: white"></i></h5></a>
          <a class="nav-item nav-link" href="login.php"><h5><i class="fas fa-sign-out-alt" style="color: white"></i></h5></a>
        </div>
  </div>
</nav>
</section>

<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
  
      <li class="nav-item">
        <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="kwitansi.php"><i class="fas fa-file-invoice-dollar mr-2"></i>Daftar Kwitansi</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="pelanggan.php"><i class="fas fa-male mr-2"></i>Daftar Pelanggan</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="barang.php" ><i class="fas fa-toolbox mr-2"></i>Daftar Barang</a><hr class="bg-secondary">
      </li>
  </div>

  <div class="col-md-10 p-5 pt-2">
    <h1><i class="fas fa-file-invoice-dollar mr-2"></i> Daftar Kwitansi</h1><hr>
        <a href="tambah_kwitansi.php" class="btn btn-secondary mb-2"> <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA KWITANSI</a>
    <table class="table table-striped table-bordered">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">ID</th>
          <th scope="col">ID Barang</th>
          <th scope="col">ID Pelanggan</th>
          <th scope="col">Quantity</th>
          <th scope="col">Date</th>
          <th scope="col">Total</th>
          <th colspan="3" scope="col">Aksi</th>
        </tr>
      </thead>
        </tbody>
        <?php
        include 'koneksi.php';
  $no = 1;
  $sql = mysqli_query($koneksi,"select * from tblkwitansi");
  while($data = mysqli_fetch_array($sql)){
    ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['idkwitansi']; ?></td>
    <td><?php echo $data['idbarang']; ?></td>
    <td><?php echo $data['idpelanggan']; ?></td>
    <td><?php echo $data['quantity']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['total']; ?></td>
    <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i>
      <a href="ubah_kwitansi.php?idkwitansi=<?php echo $data['idkwitansi']; ?>">Edit</a>|
      <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
      <a href="hapus_kwitansi.php?idkwitansi=<?php echo $data['idkwitansi']; ?>">Delete</a></tr></td></tr>
      <?php
  }
  ?>
      <a href="laporankwitansi.php" class="btn btn-secondary mb-2"></i>CETAK DATA KWITANSI</a>
      </table>
  </div>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>