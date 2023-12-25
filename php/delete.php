<?php
 include "koneksi.php" ;
$id = $_GET['id'];
$query = "DELETE from guru WHERE id=$id";
$hasil = mysqli_query($koneksi,$query) ;
 if($hasil){
     header('Location:admin.php');
 } else {
     echo "Hapus data gagal" ;
 }
 ?>