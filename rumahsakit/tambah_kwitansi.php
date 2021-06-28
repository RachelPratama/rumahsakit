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
     <h1><i class="fas fa-user-graduate mr-2"></i> Input Data Baru</h1><hr> 
        <form action="simpan_kwitansi.php" method="post"> 
 
  <div class="form-row"> 
     <div class="form-group col-md-4"> 
      <label >ID</label> 
       <input type="text" name="idkwitansi" class="form-control" id="idkwitansi"> 
    </div> 
   </div> 
    <div class="form-row"> 
    <div class="form-group col-md-6"> 
       <label >ID BARANG</label> 
      <input type="text" name="idbarang" class="form-control" id="idbarang">      </div> 
  </div> 
 
 <div class="form-row"> 
     <div class="form-group col-md-6"> 
      <label >ID PELANGGAN</label> 
       <input type="text" name="idpelanggan" class="form-control" id="idpelanggan">     </div> 
  </div> 

  <div class="form-row"> 
    <div class="form-group col-md-6"> 
       <label >QUANTITY</label> 
      <input type="text" name="quantity" class="form-control" id="quantity">      </div> 
  </div>
  
  <div class="form-row"> 
    <div class="form-group col-md-6"> 
       <label >DATE</label> 
      <input type="text" name="date" class="form-control" id="date">      </div> 
  </div> 

  <div class="form-row"> 
    <div class="form-group col-md-6"> 
       <label >TOTAL</label> 
      <input type="text" name="total" class="form-control" id="total">      </div> 
  </div> 
 
 
 
  <button type="submit" class="btn btn-primary">SIMPAN</button> </form> 
  </div> 
</div> 
  </body> 
</html> 
