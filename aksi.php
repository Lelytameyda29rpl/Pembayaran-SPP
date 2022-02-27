<?php
require('koneksi.php');
session_start();
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='index.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='index.php';</script>";
        } else {
            require ('koneksi.php');
            $qry_petugas=mysqli_query($con,"select * from petugas where username = '".$username."' and password = '".$password."'");
        if(mysqli_num_rows($qry_petugas)>0){
            $dt_login=mysqli_fetch_array($qry_petugas);
            if($dt_login['level'] == "admin"){
                //session_start();
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['level']="admin";
                echo "<script>alert('Login Admin Success');location.href='admin/index.php';</script>";
            } else if($dt_login['level'] == "petugas"){
                //session_start();
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['level']="petugas";
                echo "<script>alert('Login Petugas Success');location.href='petugas/index.php';</script>";
            }else {
            echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
            }
        }
    }
}
?>