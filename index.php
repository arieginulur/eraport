<?php 
include "config/connection.php";
$sql = $connect->query("SELECT * FROM tbl_tahun WHERE active = 1");
while($data = $sql->fetch_array()){
    $tp = $data["deskripsi"];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Raport Online SMA PGRI 3 Bandung <?php echo $tp ?></title>
    <link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
  </head>
  <body data-spy="scroll" data-target="#menu" data-offset="100">

    <div class="home-wrapper" id="home">
      <div class="home-header">
        <div class="container p-0">
          <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
            <a class="navbar-brand" href="javascript:;">
              <img src="assets/img/logo.png" alt="" height="55">
              <div class="home-header-text d-none d-sm-block">
                <h5>RAPORT ONLINE</h5>
                <h6>SMA PGRI 3 BANDUNG</h6>
                <h6>TAHUN PELAJARAN <?php echo $tp ?></h6>
              </div>
              <span class="logo-mini-unbk d-block d-sm-none">RAPORT ONLINE</span>
              <span class="logo-mini-tahun d-block d-sm-none">2020</span>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-label="Toggle Navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#home" id="link-home">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pengumuman" id="link-pengumuman">Pengumuman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#panduan" id="link-panduan">Panduan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#kontak" id="link-kontak">Kontak</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="home-banner">
        <div class="home-banner-bg home-banner-bg-color"></div>
        <div class="home-banner-bg home-banner-bg-img"></div>
          <div class="container mt-5">
            <div class="row">
                <div class="col-sm-8">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div>
                                    <h5>
                                        Selamat datang di Aplikasi Raport Online
                                    </h5>
                                    <h5>
                                      SMA PGRI 3 Bandung
                                    </h5>
                                    <h5>
                                      Tahun Pelajaran 2020 - 2021
                                    </h5>
                                    <br>
                                    <p>
                                        Raport Online merupakan penerimaan hasil belajar siswa berbasis online yang ditujukan untuk semua siswa/i SMA PGRI 3 Bandung
                                        Tahun Pelajaran 2020/2021. Berdasarkan hasil keputusan rapat pleno tentang Pembagian Raport pada tanggal 15 Desember 2020 dan dalam masa darurat
                                        Covid-19 kini para siswa/i dapat mengunduh hasil cetak raport di rumah masing-masing.
                                    </p>
                                    <p>
                                        Silahkan login dengan menggunakan akun masing-masing. Baca panduan terlebih dahulu sebelum mengakses Raport Online. Terimakasih.
                                        Semoga sehat selalu. #DiRumahAja #BelajarDiRumah #KerjaDiRumah #IbadahDiRumah.
                                    </p>
                                    <p>
                                        <a href="#panduan" class="btn btn-warning nav-link">
                                            Baca Panduan
                                            <span class="fa fa-chevron-down"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                        <div class="card card-login">
                          <div class="card-body">
                            <h6 class="mb-3">LOGIN</h6>
                            <?php 
                                $Err = "";
                                if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
                                  switch ($_GET ["Err"]){
                                    case 1:
                                      $Err = "Username dan Password Kosong";
                                    break;
                                    case 2:
                                      $Err = "Username Kosong";
                                    break;
                                    case 3:
                                      $Err = "Password Kosong";
                                    break;
                                    case 4:
                                      $Err = "Password salah";
                                    break;
                                    case 5:
                                      $Err = "Username atau Password salah";
                                    break;
                                    case 6:
                                      $Err = "Maaf, Terjadi Kesalahan";
                                    break;
                                    case 7:
                                      $Err = "Captcha tidak cocok";
                                    break;
                                  }
                                }
                                
                              ?>
                              <center><font style="color:red;"><?php echo $Err ?></font></center>
                            <form action="validation.php" method="post">
                              <div class="form-group">
                                <span class="fa fa-user"></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Nomor Induk Siswa Nasional">
                              </div>
                              <div class="form-group">
                                <span class="fa fa-key"></span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <img src="config/captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
                              </div>
                              <div class="form-group">
                                <span class="fa fa-lock"></span>
                                <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Kode Keamanan">
                              </div>
                              <button type="submit" class="btn btn-primary btn-block btn-login">
                                  Masuk
                              </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
      </div>
      <div class="home-content">

        <section class="bg-light" id="pengumuman">
          <div class="container">
            <h4 class="text-center"><strong>Pengumuman</strong></h4>
            <h6 class="text-center">SMA PGRI 3 Bandung</h6>
            <hr>
            <div class="row">
              
              <div class="col-sm-12">
                  Nomor :    /Satdik SMA/IV.3/C.2020 <br>
                  Lampiran : -<br>
                  Perihal : <b>Pemberitahuan</b> 
                </p>
                <p align="right">Bandung, 17 Desember 2020</p>
                <p>
                <p>Kepada Yth, : Bapak/ Ibu Orangtua/Wali siswa dari <br>
                    Kelas X, XI, dan XII <br>
                    di <br>
                    Tempat
                </p>
                <p class="mt-5" align="justify">
                  Assalamu'alaikum wr wb, <br>
                  Kepada seluruh peserta didik SMA PGRI 3 Bandung dengan ini memberitahukan hal - hal sebagai berikut :
                </p>
                <ol>
                  <li>
                    Bahwa pembagian Laporan Hasil Belajar Semester Ganjil Tahun Pelajaran 2020/2021 dilaksanakan 
                    pada Hari Jum'at, 18 Desember 2020 secara online melalui portal web resmi SMA PGRI 3 Bandung.</li>
                  <li>
                    Aktivitas pembelajaran diistirahatkan pada Tanggal 19 Desember 2020 s/d 09 Januari 2021.
                  </li>
                  <li>
                    Pelayanan administrasi Sekolah masih tetap dibuka pada Hari Senin - Jum'at Pukul 09.00 - 14.00. 
                  </li>
                  <li>
                    Siswa <b>DILARANG</b> datang dan masuk di area lingkungan sekolah, semua pelayanan kepada siswa dilakukan secara Daring/online.
                  </li>
                </ol>
                <p>
                Demikian pemberitahuan ini disampaikan, untuk diketahui dan dimaklumi, atas perhatiannya kami ucapkan terimakasih. <br>
                Wassalamu'alaikum Wr. Wb., <br>


                </p>
              </div>
            </div>
          </div>
        </section>

        <section id="panduan">
          <div class="container">
            <h4 class="text-center"><strong>Panduan Login</strong></h4>
            <h6 class="text-center">Berikut panduan untuk login Raport Online SMA PGRI 3 Bandung Tahun Pelajaran 2020/2021</h6>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <div class="mt-20">
                  <h5><strong>Panduan Siswa</strong></h5>
                  <p>Berikut adalah tata cara masuk ke dalam aplikasi Rapor Online :</p>
                  <ol>
                    <li>Siswa login menggunakan NIPD (Nomor Induk Peserta Didik) atau NIS (Nomor Induk Siswa) sebagai username lalu memasukkan password untuk masuk.</li>
                    <li>Siswa diwajibkan mengganti password yang baru untuk keamanan akun dan privasi hasil perolehan nilai belajar.</li>
                    <li>Siswa diberikan izin mengunduh <b>Hasil Nilai Rapor</b> di halaman Dashboard yang telah disediakan.</li>
                    <li>Apabila ada kesalahan data pribadi siswa dapat mengajukan di menu <u>Perbaikan Data</u>,</li>
                    <li>Jika ada masalah atau error silahkan hubungi admin/ operator sekolah.</li>
                  </ol>
                </div>
              </div>
              <div class="col-sm-6 d-flex align-items-center">
                <p align="center">
                  <img src="uploads/sekolah/rapor.jpg" align="center" width="400" style="max-width: 100%" alt="">
                </p>
              </div>
            </div>
          </div>
        </section>
        <section id="kontak">
          <div class="container">
            <h4 class="text-center"><strong>Kontak</strong></h4>
            <h6 class="text-center">Layanan Perihal Data Online Peserta Didik</h6>
            <div class="col-sm-12">
              <p>
                <table class="table">
                  <tbody>
                    <tr align="center">
                      <th>Admin 1 ( Pak Firman )</th>
                      <td>0857-2222-3591</td>
                    </tr>
                    <tr align="center">
                      <th>Admin 2 ( Pak Ari )</th>
                      <td>0815-7222-1889</td>
                    </tr>
                    <tr>
                      <td colspan="2">*) Segera hubungi pihak Admin terkait data nilai yang kosong dan masalah akun login.<br>
                        **) Hubungi Walikelas masing-masing terkait hal kehadiran dan nilai mata pelajaran.
                      </td>
                    </tr>
                  </tbody>
                </table>
              </p>
            </div>
          </div>
        </section>
      </div>
      <div class="home-footer">
        <div class="container text-center">
            Copyright © 2020 - <?php echo date("Y") ?>. SMA PGRI 3 Bandung
        </div>
      </div>
    </div>
  <script type="text/javascript" src="assets/frontend/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script>
        function refreshCaptcha(){
            var img = document.images['captcha_image'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
      
        $(document).ready(function() {
            $('.navbar-nav .nav-item a').click(function() {
            $(this).closest('.nav-item').siblings().removeClass('active');
            $(this).closest('.nav-item').addClass('active');
        });
    })
    </script>

  </body>
</html>