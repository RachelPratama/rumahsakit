<?php
session_start();
$user = $_SESSION['user'];
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="sylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="rs.css">
        <!-- Bootstrap javascript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    <title>ADMINISTRATOR</title>
</head>
<body>
<!-- Navbar -->
<section>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a class="navbar-brand" href="#" style="color: white"><img src="img/logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <div class="navbar-nav" >
            <a class="nav-item nav-link active" href="#"><h5><i class="fas fa-bell " style="color: white"></i></h5></a>
            <a class="nav-item nav-link" href="#"><h5><i class="fas fa-comment " style="color: white"></i></h5></a>
            <a class="nav-item nav-link" data-toggle="dropdown" id="dropdownMenuButton" href=""><h5><i class="fas fa-user-circle " style="color: white"></i></h5></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" ><?php echo $user;?></a>
                    <a class="dropdown-item" href="login.php">Log Out </a>
                </div>
        </div>
    </div>
</nav>
</section>
<!-- Akhir Navbar -->
<!-- Sidebar -->
<div class="row no-gutters mt-5 side">
    <div class="col-md-2 mt-5 pr-4 pt-1 sidebar">
            <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
            <a class="nav-link active text" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link textactive" href="dokter.php"><i class="fas fa-user-md mr-2"></i>Daftar Dokter</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text" href="pasien.php"><i class="fas fa-users mr-2"></i>Daftar Pasien</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text" href="obat.php" ><i class="fas fa-capsules mr-2"></i>Daftar Obat</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text" href="fasilitas.php" ><i class="fas fa-procedures mr-2"></i>Daftar Fasilitas</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text" href="pendaftaran.php" ><i class="fas fa-book-medical mr-2"></i>Data Pendaftaran</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text" href="pemeriksaan.php" ><i class="fas fa-clipboard-list mr-2"></i>Data Pemeriksaan</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
            <a class="nav-link text" href="pembayaran.php" ><i class="fas fa-credit-card mr-2"></i>Data Pembayaran</a><hr class="bg-secondary">
        </li>
        </ul>
    </div>
<!-- Akhir SideBar -->
<!-- Data -->
<div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-user-md mr-2"></i> Daftar Dokter</h3><hr>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <a href="#" id="tambahdok" class="btn btn-light mb-2 btndata"><i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA DOKTER</a>
            <a href="laporan_dokter.php" class="btn btn-light mb-2 btndata"><i class="fas fa-print mr-2"></i>CETAK DATA DOKTER</a>
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="cari" style="margin-left: 40em;margin-bottom:0.7em">
            <button class="btn btn-outline-light search2" style="margin-bottom: 0.7em" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <table class="table table-striped table-bordered textactive">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Dokter ID</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Spesialis</th>
            <th scope="col">No. Telepon</th>
            <th colspan="3" scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $sql = mysqli_query($koneksi, "select * from dokter where Nama like '%".$cari."%' or Spesialis like '%".$cari."%' or DokterID like '%".$cari."%'");
                echo "<b>Hasil pencarian : ".$cari."</b>";
            }else{
            $sql = mysqli_query($koneksi, "select*from dokter");
            }
            $no = 1;
            while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['DokterID']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Spesialis']; ?></td>
                <td><?php echo $data['NoTelp']; ?></td>
                <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                <!-- <a href="ubah_dokter.php?DokterID=<?php echo $data['DokterID'];?> ">Edit</a> -->
                <a href="#" data-role="pop" data-id="<?php echo $data['DokterID'];?>">Edit</a>
                <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                <!-- <a href="delete_dokter.php?DokterID=<?php echo $data['DokterID'];?> ">Delete</a> -->
                <a href="#" data-role="pop2" data-id="<?php echo $data['DokterID'];?>">Delete</a>
                <!-- Modal Edit -->
                <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data Dokter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="update_dokter.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >Dokter ID</label>
                                    <input type="text" name="DokterID" class="form-control" id="DokterID" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >NAMA</label>
                                    <input type="text" name="Nama" class="form-control" id="Nama">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >SPESIALIS</label>
                                    <input type="text" name="Spesialis" class="form-control" id="Spesialis" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label >NO. TELEPON</label>
                                    <input type="text" name="NoTelp" class="form-control" id="NoTelp" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button> -->
                                <button type="submit" class="btn btn-light">SIMPAN</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    </div>
                <!-- /Modal Edit -->
            <?php
            }
            ?>
        </tbody>
        </table>
                <!-- Modal Delete -->
                <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Dokter</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="delete_dokter.php" method="post">
                            Apakah anda yakin ingin menghapus data <b id="datadel"></b>? 
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
                            <input type="hidden" name="datadel" id="datadel2">
                            <button type="submit" class="btn btn-light">DELETE</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                <!-- /ModalDelete -->
        </tbody>
    </table>
</div>
</div>
<!-- Modal Tambah -->
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Input New Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="simpan_dokter.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >Dokter ID</label>
                <input type="text" name="DokterID" class="form-control" id="DokterID">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >NAMA DOKTER</label>
                <input type="text" name="Nama" class="form-control" id="Nama">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >SPESIALIS</label>
                <input type="text" name="Spesialis" class="form-control" id="Spesialis">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label >NO TELEPON</label>
                <input type="text" name="NoTelp" class="form-control" id="NoTelp">
            </div>
        </div>  
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button> -->
            <button type="submit" class="btn btn-light">SIMPAN</button>
        </form>
    </div>
</div>
</div>
</div>
<!-- /Modah Tambah -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        // Tambah
        $("#tambahdok").click(function(){
            $("#ModalTambah").modal();
        });
        // Edit
        $("a[data-role=pop]").click(function(){
            var id=$(this).data("id"); 
            console.log(id);

            // $("#Modalea").modal();
            $.ajax({
                type:'POST',
                url: 'getdokter.php',
                data:{id:id},
                success:function(data){
                    console.log(data);
                    $('#ModalEdit').modal();
                    var row = JSON.parse(data);
                    console.log(row['DokterID']);
                    $("#DokterID").val(row['DokterID']);
                    $("#Nama").val(row['Nama']);
                    $("#Spesialis").val(row['Spesialis']);
                    $("#NoTelp").val(row['NoTelp']);
                }
            });
        });
        // Hapus
        $("a[data-role=pop2]").click(function(){
            var id=$(this).data("id"); 
            console.log(id);
            $.ajax({
                type:'post',
                url: 'getdokter.php',
                data:{id:id},
                success:function(data){
                    console.log(data);
                    $("#ModalDelete").modal();
                    var row = JSON.parse(data);
                    console.log(row['DokterID']);
                    $("#datadel2").val(row['DokterID']);
                    $("#datadel").text(row['Nama']);
                    
                }
            });
        });
    </script>
</body>
</html>