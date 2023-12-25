<?php
include "koneksi.php" ;
if (isset($_POST['submit'])) {
    //foto
    $nama = $_FILES['gambar']['name'];
    $lokasi = $_FILES['gambar']['tmp_name'];



    //input ke data base
    $koneksi->query("INSERT INTO barang 
            (namabarang,lokasi,gambar,warna,deskripsi,harga)
            VALUES('$_POST[mobil]','$_POST[lokasi]','$nama','$_POST[warna]','$_POST[deskripsi]','$_POST[harga]')");

}

?>
