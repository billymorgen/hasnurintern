<?php
session_start();

if($_SESSION['level']!= 'admin'|| empty($_SESSION['login'])){
    header("location:login.php");
}

include "koneksi.php";

$query = "SELECT * FROM guru ";
$hasil = mysqli_query($koneksi,$query);

if(isset($_POST['submit']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $nama = $_POST['nama']; //'nama' didapat dari name pada form
            $deskripsi = $_POST['deskripsi'] ;
            $hari = $_POST['hari'];
            $materi1 = $_POST['materi1'] ;
            $desmat1 = $_POST['desmat1'] ;
            $linkdes1 = $_POST['linkdes1'];
            $materi2 = $_POST['materi2'] ;
            $desmat2 = $_POST['desmat2'] ;
            $linkdes2 = $_POST['linkdes2'];

            mysqli_query($koneksi,"insert into guru (nama,deskripsi,hari,tipegambar,gambar,materi1,desmat1,linkdes1,materi2,desmat2,linkdes2) values ('$nama','$deskripsi','$hari','$file_type','$image','$materi1','$desmat1','$linkdes1','$materi2','$desmat2','$linkdes2')");
            echo "
                <script>
                alert('Data Berhasil Di Input ');
                history.back(self);
                </script>";
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}

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
                    <img src="../img/logo1.png" style="width: 70px; float:left; "> 
                    <h1 class="m-0">
                    <label style="width: 70px; color: #E2DEDE;"> &nbsp; HASNUR COURSE <h5 class="trespon" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELALU BERSAMA ANDA</h5></label></h1>
                </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="../index.php" class="nav-item nav-link">Beranda</a>
                <a href="guru.php" class="nav-item nav-link ">Kursus</a>
                <a href="soal.php" class="nav-item nav-link">Soal & Pembahasan</a>
                <a href="kontak.php" class="nav-item nav-link">Hubungi Kami</a>
                <a href="admin.php" class="nav-item nav-link active">Admin<i class="fa fa-arrow-right ms-3"></i></a>
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


<table align="center" class="table table-success table-striped" style="width: 800px; margin-top: 50px">
        <h3 align="center"  style="margin-top: 30px">BERIKUT ADALAH DAFTAR COURSE YANG ADA</h3>
		<tr>
			<td>Nama</td>
			<td>Deskripsi</td>
			<td>Durasi</td>
			<td>Materi 2</td>
            <td>Deskripsi 1</td>
            <td>Link Deskripsi</td>
            <td>Materi 2</td>
            <td>Deskripsi 2</td>
            <td>Link Deskripsi</td>
            <td></td>
			<td></td>
		</tr>
		<?php
		   while($baris=mysqli_fetch_assoc($hasil)) {
		   	?>
		   	<tr>
		   		<td><?php echo $baris['nama']?></td>
		   		<td><?php echo $baris['deskripsi']?></td>
                <td><?php echo $baris['hari']?></td>
                <td><?php echo $baris['materi1']?></td>
                <td><?php echo $baris['desmat1']?></td>
                <td><?php echo $baris['linkdes1']?></td>
                <td><?php echo $baris['materi2']?></td>
                <td><?php echo $baris['desmat2']?></td>
                <td><?php echo $baris['linkdes2']?></td>
				<td><a class="btn btn-success" href="update.php?id=<?php echo $baris["id"] ?>" role="button">Update</a></td>

		   		<td><a class="btn btn-primary" href="delete.php?id=<?php echo $baris["id"] ?>" 
				  onclick="return confirm('Apakah anda yakin akan menghapusdata ini?')" role="button">Delete</a></td>

		   	</tr>
		<?php }?>
</table>
    

<!--Form Start-->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div style = "background-color: #719192; padding-bottom: 20px;" >
                            <H1 style="text-align: center; color: darkblue ; padding-bottom:30px" >Tambah Data Kursus</h1>
                        <form method="POST" action="" style="padding-right:30px; padding-left:50px;" enctype="multipart/form-data">
                        
                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="text" class="form-control" id="mobil"  name="nama"  required>
                                <label for="floatingPassword" style="color:black ;">Nama Course</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-top: 10px; padding-right: 20px">
                                <textarea class="form-control" id="deskripsi"  name="deskripsi" required></textarea>
                                <label for="floatingPassword" style="color:black">Deskripsi</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="text" class="form-control" id="hari"  name="hari" required>
                                <label for="floatingPassword" style="color:black">Durasi</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="file" name="gambar" id="gambar"  class="form-control" >
                                <label for="gambar" style="color:black">Upload Gambar Guru</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-top: 10px; padding-right: 20px">
                                <textarea class="form-control" id="materi1"  name="materi1" required></textarea>
                                <label for="floatingPassword" style="color:black">Nama Materi 1</label>
                            </div>

                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="text" class="form-control" id="desmat1"  name="desmat1" required>
                                <label for="floatingPassword" style="color:black">Deskripsi Materi 1</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="text" class="form-control" id="linkdes1"  name="linkdes1" required>
                                <label for="floatingPassword" style="color:black">link deskripsi 1</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-top: 10px; padding-right: 20px">
                                <textarea class="form-control" id="materi2"  name="materi2" required></textarea>
                                <label for="floatingPassword" style="color:black">Nama Materi 2</label>
                            </div>

                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="text" class="form-control" id="desmat2"  name="desmat2" required>
                                <label for="floatingPassword" style="color:black">Deskripsi Materi 2</label>
                            </div>
                            <div class="form-floating mb-3" style="padding-right: 20px">
                                <input type="text" class="form-control" id="linkdes2"  name="linkdes2" required>
                                <label for="floatingPassword" style="color:black">link deskripsi 2</label>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div></div>

    <!--form End-->


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
                        <span>hasnurcourse@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="php/guru.php">Kursus</a>
                    <a class="btn btn-link" href="php/berita.php">Berita & Acara</a>
                    <a class="btn btn-link" href="php/kontak.php">Hubungi Kami</a>
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
                        &copy; <a class="border-bottom" href="#">HasnurCourse 2023</a>, All Right Reserved.
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