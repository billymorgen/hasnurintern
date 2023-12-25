<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from admins where username='$username' and pass ='$password'");

$cek = mysqli_num_rows($login);
        if($cek>0){
            $data = mysqli_fetch_assoc($login);
            if($data['level']=="admin"){
                $_SESSION['login'] = true ;
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['username'] = $username ;
                $_SESSION['level'] = "admin" ;
                header("location:admin.php") ;
            }
        }else{echo "
                <script>
                alert('Username atau Password Anda Salah !! ');
                history.back(self);
                </script>";
        }
    ?>