<?php 
    include "config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login - Raport Online SMA PGRI 3 Bandung</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/backend/css/style.css" rel="stylesheet">
    <link href="assets/backend/css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/img/Taieri2.png);">
            <div class="row mt-1 mb-3">
				<div class="col-md-12 text-center">
					<img width="350px" src="assets/img/logo-raportonline.png">
				</div>
			</div>
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="config/validation" method="post">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="true" placeholder="Username" autocomplete="off"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="true" placeholder="Password" autocomplete="off"> </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="role" required="true" autocomplete="off">
                                <option value="">-- Pilih Peran--</option>
                                <option value="1">Administrator</option>
                                <option value="2">Wali Kelas</option>
                                <option value="3">Guru</option>
                                <option value="4">Pembina Ekstra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="semester" required="true" autocomplete="off">
                                <option value="">-- Pilih Semester--</option>
                                <?php $sql = $connect->query("SELECT * FROM tbl_tahun ORDER BY active DESC");
                                while($data = $sql->fetch_array()){?>
                                <option value="<?php echo $data["id_tahun"] ?>"><?php ?><?php echo $data["semester"]." ".$data["deskripsi"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="operator">Log In</button>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5 mb-3">
				<div class="col-md-12 text-center">
                    <p class="text-center"> SMA PGRI 3 Bandung © 2020 - <?php echo date("Y"); ?></p>
				</div>
			</div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/backend/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/backend/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/backend/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/backend/js/custom.min.js"></script>
</body>

</html>