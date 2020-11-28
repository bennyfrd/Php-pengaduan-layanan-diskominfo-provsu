<?php 
require("../../config/fungsi.php");
$data = $_SESSION['data_petugas'];

auth_admin();
if(isset($_GET['logout'])) {
  logout();
}
if(isset($_POST['register_petugas'])){
  if($_POST['password1']==$_POST['password2']){
    register_petugas($_POST['nama_petugas'], $_POST['username'], $_POST['password2'], $_POST['telp'], $_POST['level']);
  }else{
    header("Location:?berhasil=keynotvalid");
  }
}
if(isset($_GET['nonaktif'])){
  nonaktif($_GET['nonaktif']);
}
if(isset($_GET['aktifkan'])){
  aktifkan($_GET['aktifkan']);
}
if(isset($_GET['ubah_petugas'])) {
  $petugas = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$_GET[ubah_petugas]'"));
}
if(isset($_POST['ubah_petugas'])){
  ubah_data_petugas($_GET['ubah_petugas'], $_POST['nama_petugas'], $petugas['username'], $_POST['password'], $_POST['telp'], $_POST['level']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tabel Pengaduan</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-black sidebar sidebar-dark accordion" style="background-color: #084f40" id="accordionSidebar">
      <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class=""></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pengaduan <sup>Publik </sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="color: red">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="color: white">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen Pengaduan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pengaduan.php">
          <i class="fas fa-fw fa-cog"></i>
          <span style="color: white">Pengaduan Diproses</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="data.php">
          <i class="fas fa-fw fa-cog"></i>
          <span style="color: white">Data Admin</span>
        </a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span style="color: white">Data Pengaduan Baru</span></a>
      </li>
<?php
if($data['level']=="admin"){
?>
     
      <!-- Nav Item - Tables -->
 
<?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        <div class="input-group">
           
              <div class="input-group-append">
                           </div>
            </div>
          </form>
        <!-- Topbar Navbar -->
<?php include("header/topbar.php");?>
        <!-- End of Topbar -->

 
        <!-- /.container-fluid -->
<hr/>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <a href="petugas.php" class="btn btn-primary" style="margin-left: 970px" >Tambah Data</a>
            <br>
            <br>

           <!-- DataTales Example -->
          <div class="card shadow mb-4 animated--grow-in">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
<?php
  $out = mysqli_query($koneksi, "SELECT * FROM petugas");
  while($keluar = mysqli_fetch_array($out)){
?>

                    <tr>
                      <td><?php echo $keluar['id_petugas'];?></td>
                      <td><?php echo $keluar['nama_petugas'];?></td>
                      <td><?php echo $keluar['username'];?></td>
                      <td><?php echo $keluar['telp'];?></td>
                      <td><?php echo $keluar['level'];?></td>
                      <td> &nbsp; 
                        <?php if($keluar['level']=="nonaktif"){ ?>
                          <a onclick="return confirm('Yakin ingin Mengaktifkan Akun : \n<?php echo $keluar['nama_petugas'];?>');" href="?aktifkan=<?php echo $keluar['id_petugas'];?>" class="btn btn-primary"> Aktifkan  </span></a>
                        <?php }else{ ?>
                          <a onclick="return confirm('Yakin ingin Menonaktikan Akun : \n<?php echo $keluar['nama_petugas'];?>');" href="?nonaktif=<?php echo $keluar['id_petugas'];?>" class="btn btn-danger">Nonaktif</span></a>
                        <?php } ?>
                        <a title="Ubah" href="?ubah_petugas=<?php echo $keluar['id_petugas'];?>" class="btn btn-success"><span>Edit</span></a></td>
                    </tr>
<?php
}
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>

<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="keynotvalid"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Konfirmasi Password tidak valid !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="proses_ubah"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-primary">Data petugas berhasil diubah !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


<!-- Modal -->
<?php
if(isset($_GET['ubah_petugas'])){?>
  <script type="text/javascript">window.onload = function(){document.getElementById('tombol').click();}</script>
  <input id="tombol" data-toggle="modal" data-target="#exampleModal" type="hidden">
<?php
  }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Petugas <?= "[ID: ".$_GET['ubah_petugas']."]";?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="">
                    <div class="form-group">
                      <small>Nama Petugas</small>
                      <input required="required" type="text" name="nama_petugas" class="form-control form-control-user" id="exampleInputEmail" value="<?php if(!empty($petugas)){ echo $petugas['nama_petugas']; }?>" aria-describedby="emailHelp" placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                      <small>Username (Tidak boleh diubah)</small>
                      <input readonly="readonly" required="required" type="text" name="username" class="form-control form-control-user" value="<?php if(!empty($petugas)){ echo $petugas['username']; }?>" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <small>Ubah Password Baru (Kosongkan Jika tidak ingin diubah !)</small>
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ubah Password">
                    </div>
                    <div class="form-group">
                      <small>Nomor Telepon</small>
                      <input required="required" value="<?php if(!empty($petugas)){ echo $petugas['telp']; }?>" type="number" name="telp" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                      <small>Level</small>
                      <select required="required" name="level" class="form-control form-control-user" id="exampleInputPassword" placeholder="Level">
                        <option value="petugas">Petugas</option>
                        <option value="admin">Administrator</option>
                      </select>
                    </div>

      </div>
      <div class="modal-footer">
        <input type="submit" onclick="return confirm('Konfirmasi Perubahan ?');" name="ubah_petugas" value="Simpan Perubahan" class="btn btn-primary btn-user btn-block">
      </div>
      </form>
    </div>
  </div>
</div>

         

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
       <div class="modal-body">Klik "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="?logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
