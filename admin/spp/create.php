<?php

$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$mysqli->query("INSERT INTO spp()VALUES('$id_spp','$tahun','$nominal')");
echo"<script>alert('Berhasil disimpan!')</script>";
echo"<script language='javascript'>window.location.href='?spp=read'</script>";
?>