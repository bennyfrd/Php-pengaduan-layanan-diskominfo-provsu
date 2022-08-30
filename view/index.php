 <?php
require("../config/fungsi.php");
if(isset($_POST['login'])){
  login($_POST['username'], $_POST['password'], $_POST['ingatkan']);
}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Pengaduan Layanan Diskominfo Sumut</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<center>
        <div id="card-title">
          <h2 style="color:white">Aplikasi Pengaduan Layanan Publik <br>Diskominfo Sumut
          </h2>
</center>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label for="user-email" style="padding-top:13px">
            &nbsp;Email
          </label>
        <input class="form-content" type="text" placeholder="Masukkan Username Anda " name="username" value="<?php if(isset($_COOKIE['ingatkan'])){ echo $_COOKIE['ingatkan']; }?>" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password"  placeholder="Masukkan Password Anda" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
      
        <input id="submit-btn" type="submit" name="login" value="LOGIN" />
        <a href="register.php" id="signup">Daftar akun disini</a>
      </form>
    </div>
  </div>
</body>

</html>

                
<?php
  if(isset($_GET['validation'])){
    if($_GET['validation']=="failed"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Username atau Password Salah !</b></center>
                      </div>
                    </div>
<?php
    }
  }
?>
<?php
  if(isset($_GET['validation'])){
    if($_GET['validation']=="token_error"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Terdeteksi Kesalahan Token pada Akun anda !</b></center>
                      </div>
                    </div>
<?php
    }
  }
?>
<?php
  if(isset($_GET['validation'])){
    if($_GET['validation']=="akun_nonaktif"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Akun anda sedang dinonaktifkan !</b></center>
                      </div>
                    </div>
<?php
    }
  }
?>
         <center>
              <footer style="color: white" class="text-muted text-center animation-pullUp">
                  <big><span>2020</span> &copy; <a href="https://diskominfo.sumutprov.go.id" target="_blank" style="color: white">Diskominfo Provinsi Sumatera Utara</a></small>
              </footer>

         </center>
              <!-- Footer -->
           
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>
