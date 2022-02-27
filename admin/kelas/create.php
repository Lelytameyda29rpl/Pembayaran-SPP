<?php

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

$mysqli->query("INSERT INTO kelas()VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?kelas=read'</script>";
?>