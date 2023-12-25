<?php


include "koneksi.php" ;
$id  = $_GET['id'] ;

session_start();

$query="SELECT * FROM guru WHERE id =".$id;

$hasil=mysqli_query($koneksi,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIBIJAK - MEDAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="../css/style2.css" rel="stylesheet">

    <style>
        @media screen and (min-width: 601px) {
            h5.trespon {
            font-size: 18px;
        }
        }

        @media screen and (max-width: 600px) {
        h5.trespon {
            font-size: 10px;
        }
        }
</style>
</head>

<body style="background: black">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <a href="index.php" class="navbar-brand">
                    <img src="../img/logo.png" style="width: 70px; float:left; "> 
                    <h1 class="m-0">
                    <label style="width: 70px; color: rgb(247, 38, 38);"> &nbsp; SIBIJAK<h5 class="trespon">&nbsp;SISTEM INFORMASI BIMBINGAN BELAJAR ANAK</h5></label></h1>
                </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            </div>
            <a href="admin.php" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Admin<i class="fa fa-arrow-right ms-3"></i></a>
            <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
    </nav>
    <!-- Navbar End -->
  <!-- ***** Main Banner Area Start ***** -->
 <div class="main-banner" id="top" >
    <video autoplay muted loop id="bg-video"  >
        <source src="../img/videos.mp4" type="video/mp4"  />
    </video>

    <div class=" header-text" >
        <div class="caption">
            <h4>SELAMAT DATANG Admin <?php echo $_SESSION['nama'];?> </h4>
            <h2><em style="color: rgb(247, 38, 38);">Mari Kita Bantu</em><br>Sukseskan Pelajar </h2>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<?php 
ob_start();
while($data=mysqli_fetch_array($hasil)){ 
    ?>
          <!--Start Form -->
          <div class="container mt-3">
              <h1 style="text-align: center ;color:aqua;">Form Data Course</h1>
      <form method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >Nama Course</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "nama" value="<?php echo $data['nama'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "deskripsi" value="<?php echo $data['deskripsi'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Durasi</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "hari" value="<?php echo $data['hari'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama Materi (1)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "materi1" value="<?php echo $data['materi1'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Deskripsi Materi (1)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "desmat1" value="<?php echo $data['desmat1'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Link Materi (1)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "linkdes1" value="<?php echo $data['linkdes1'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama Materi (2)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "materi2" value="<?php echo $data['materi2'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Deskripsi Materi (2)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "desmat2" value="<?php echo $data['desmat2'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Link Materi (2)</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name = "linkdes2" value="<?php echo $data['linkdes2'] ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
        <button type="submit" class="btn btn-primary" name = "submit" 
        onclick="return confirm('Ingin mengirim data? pastikan data terisi dengan benar!')" role="button">Submit</button>
      </form>
      <?php } ?>

</div>




 <!-- Footer Start -->
 <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Temukan Kami</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Jln Jamin ginting no 11 Medan</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>088888 8888 888</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>sibijak@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="../index.php">Beranda</a>
                    <a class="btn btn-link" href="guru.php">Guru</a>
                    <a class="btn btn-link" href="berita.php">Berita & Acara</a>
                    <a class="btn btn-link" href="soal.php">Soal & Pembahasan</a>
                    <a class="btn btn-link" href="kontak.php">Hubungi Kami</a>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">SIBIJAK 2023</a>, All Right Reserved.
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>

<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama']; //'nama' didapat dari name pada form
    $deskripsi = $_POST['deskripsi'] ;
    $hari = $_POST['hari'];
    $materi1 = $_POST['materi1'] ;
    $desmat1 = $_POST['desmat1'] ;
    $linkdes1 = $_POST['linkdes1'];
    $materi2 = $_POST['materi2'] ;
    $desmat2 = $_POST['desmat2'] ;
    $linkdes2 = $_POST['linkdes2'];
    $query = "UPDATE guru SET nama='$nama',deskripsi='$deskripsi',hari='$hari', materi1 = '$materi1', desmat1 = '$desmat1', linkdes1 = '$linkdes1',materi2 = '$materi2', desmat2 = '$desmat2', linkdes2 = '$linkdes2' WHERE id=$id";
    $hasil = mysqli_query($koneksi,$query);
    if($hasil){
        header('Location:admin.php');
    }else{
        echo "GAGAL";
    }
}
?>