<?php

$id_petugas = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

$mysqli->query("update petugas set username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' where id_petugas='$id_petugas'");
echo"<script>alert('Berhasil diedit!')</script>";
echo"<script language='javascript'>window.location.href='?petugas=read'</script>";
?>