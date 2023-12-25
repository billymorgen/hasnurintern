<?php 
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM guru");
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
</head>

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

<body style="background: #232745">
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
                <a href="guru.php" class="nav-item nav-link active">Kursus</a>
                <a href="soal.php" class="nav-item nav-link">Soal & Pembahasan</a>
                <a href="kontak.php" class="nav-item nav-link">Hubungi Kami</a>
                <a href="admin.php" class="nav-item nav-link">Admin<i class="fa fa-arrow-right ms-3"></i></a>
    </nav>
    <!-- Navbar End -->


    
  <!-- ***** Main Banner Area Start ***** -->
 <div class="main-banner" id="top" >
    <video autoplay muted loop id="bg-video"  >
        <source src="../img/videos.mp4" type="video/mp4"  />
    </video>

    <div class=" header-text" >
        <div class="caption">
            <h4>Cari Kursusmu Disini!</h4>
             <!--search start -->
        <div class="input-group justify-content-center" >
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Cari Disini.."/>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
            </div>
            <!--search close -->
            <h2 style="font-size: 6vw"><em style="color: rgb(247, 38, 38);">Memberikan Jasa Bimbingan </em>Belajar Terbaik Untuk Anda</h2>
            <img class="img-fluid align-self-end" src="../img/arrow2.gif" alt="" style="width: 200px">
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!--Bagan Start-->
<div class="container">
<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;padding-top: 70px;">
        <h1 class="text-uppercase">AYO MULAI KURSUS MU!</h1>
    </div>
<a href=""><div class="container row g-4 pb-4" style="background: #343b6a">
         <!--rental 1-->
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <div id="header-carousel0" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="../img/course1.png" style="height: 220px ; width: auto;" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="../img/course1-2.png" style="height: 220px ; width: auto;"  alt="Image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel0"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel0"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="text-center p-4" style="background-color: #E2DEDE">
                    <h5 class="text-uppercase" style="color: black">Memulai Karir Dengan Data Analysis</h5><br>
                    <div style="color: black" align="justify">Mau jadi data analyst? Kelas ini akan ajarkan cara mengelola dan visualisasi data dengan efisien. Mulai dari Excel, Google Data Studio, SQL, hingga RStudio. Bergabung sekarang untuk nilai tambah dalam analisis dan presentasi data!</div>
                    <div style="color:black; padding-top:10px"><i class="bi bi-stopwatch-fill" ></i>12h 30min</div></a>
                    <span class="text-primary"></span>
                        <h5 class="text-uppercase" style="color: black">Materi Tersedia:</h5>
                        <p><strong>1. Dasar Dasar Data Analysis</strong></p>
                        <div style="font-size:15px">Belajar cara cara dasar menggunakan bahasa pemograman untuk data analysis
                        <span><a href="https://www.example.com/materi" target="_blank">Buka Materi</a></span>
                        </div>
    </div>
                </div>
            </div>


        <!--rental 2-->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
         <a href=""><div class="team-item">
                <div class="position-relative overflow-hidden">
                    <div id="header-carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="../img/course2.png" style="height: 220px ; width: auto;" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="../img/course2-1.png" style="height: 220px ; width: auto;"  alt="Image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="text-center p-4" style="background-color: #E2DEDE">
                    <h5 class="text-uppercase" style="color: black">MENJADI ANALISIS KEUANGAN PEMULA</h5><br>
                    <div style="color: black" align="justify">Optimalkan bakat analis keuanganmu! Pelajari metode analisis, interpretasi laporan keuangan, dan pemodelan keuangan dengan kelas ini. Bergabung sekarang untuk membawa dampak positif pada keputusan keuangan bisnis</div>
                    <div style="color:black; padding-top:10px"><i class="bi bi-stopwatch-fill" ></i>10h 30min</div></a>
                    <span class="text-primary"></span></a>
                    <h5 class="text-uppercase" style="color: black">Materi Tersedia:</h5>
                    <p><strong>Dasar Dasar Data Analysis</strong></p>
                    <div style="font-size:15px">Belajar cara cara dasar
                    <span> <a href="https://www.example.com/materi" target="_blank">Buka Materi</a></span>
                </div></div>
            </div>
        </div>

        <!--rental 3-->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <div id="header-carousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100" src="../img/course3.png" style="height: 220px ; width: auto;" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="../img/course3-1.png" style="height: 220px ; width: auto;"  alt="Image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="text-center p-4" style="background-color: #E2DEDE">
                    <h5 class="text-uppercase" style="color: black">Mahir Visualisasi Data Denagn Efektif</h5><br>
                    <div style="color: black" align="justify">Peroleh keterampilan visualisasi data dengan kelas ini! Pelajari penggunaan Tableau, Google Data Studio, dan Microsoft Excel untuk menciptakan visualisasi yang efektif dan menarik. Segera bergabung untuk menyajikan informasi dengan daya tarik tinggi!</div>
                    <div style="color:black; padding-top:10px"><i class="bi bi-stopwatch-fill" ></i>14h 30min</div></a>
                    <span class="text-primary"></span>
                    <h5 class="text-uppercase" style="color: black">Materi Tersedia:</h5>
                        <p><strong>Dasar Dasar Data Analysis</strong></p>
                        <div style="font-size:15px">Belajar cara cara dasar
                        <span><a href="https://www.example.com/materi" target="_blank">Buka Materi</a></span>
                        </div></div>
                </div>
            </div>
    


            <!--Looping-->
    <?php 
            while($row = mysqli_fetch_array($query))
            {
                ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <div id="header-carousel1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="image_view.php?id=<?php echo $row['id']; ?>" style="height: 220px ; width: auto;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center p-4" style="background-color: #E2DEDE">
                            <h5 class="text-uppercase" style="color: black"><?php echo $row['nama']; ?></h5><br>
                            <div style="color: black" align="justify"><?php echo $row['deskripsi']; ?></div>
                            <div style="color:black; padding-top:10px"><i class="bi bi-stopwatch-fill" ><?php echo $row['hari']; ?></i></div></a>
                            <span class="text-primary"></span>
                            <h5 class="text-uppercase" style="color: black">Materi Tersedia:</h5>
                            <p><strong><?php echo $row['materi1']; ?></strong></p>
                            <div style="font-size:15px"><?php echo $row['desmat1']; ?>
                            <span><a href="<?php echo $row['linkdes1']; ?>" target="_blank">Buka Materi</a></span>
                            <br><br>
                            <p><strong><?php echo $row['materi2']; ?></strong></p>
                            <div style="font-size:15px"><?php echo $row['desmat2']; ?>
                            <span><a href="<?php echo $row['linkdes2']; ?>" target="_blank">Buka Materi</a></span>
                            </div></div>
                            </div>
                    </div>
                </div>            
                <?php
            }
            ?>
        <!--Looping End -->
        </div>
        </div>
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
                        <span>hasnurcourse@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="php/guru.php">Guru</a>
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

