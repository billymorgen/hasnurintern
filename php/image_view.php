<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"select * from guru where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipegambar"]);
    echo $row["gambar"];
}
else
{
    header('location:../index.php');
}
?>