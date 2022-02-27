<?php 
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<body>
  <!-- Panggil header -->
  <?php
  require_once("index.php");?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">History Pembayaran Siswa</h4>
                  <form class="forms-sample" method="POST" action="">
                    <div class="form-group">
                      <label for="exampleInputName1">Cari Siswa</label>
                      <input type="text" class="form-control" placeholder="Cari Berdasarkan NISN" name="nisn">
                      <button type="submit" class="btn btn-primary me-2" name="cari">Cari</button>
                    </div>
                    
                    <?php
                   //Kita lakukan proses pencariannya disini
                   if(isset($_POST['cari'])){
                     $nisn = $_POST['nisn'];
                     //Kita panggil table siswa
                     $biodataSiswa = mysqli_query($con,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nisn='$nisn'");
                     //Table pembayaran wajib kita panggil
                     $historyPembayaran = mysqli_query($con, "SELECT * FROM pembayaran JOIN petugas ON pembayaran.id_petugas=petugas.id_petugas JOIN spp ON pembayaran.id_spp=spp.id_spp WHERE nisn='$nisn' ORDER BY tgl_bayar");
                     $r_siswa = mysqli_fetch_assoc($biodataSiswa);
                     ?>
                   
                   <hr/>
                   <!-- Kita tambilkan Biodata Siswa -->
                   <h4 class="card-title">Biodata Siswa</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                         <td>NISN</td>
                         <td>:</td>
                         <td><?=$r_siswa['nisn'];?></t>
                        </tr>
                        <tr>
                          <td>NIS</td>
                          <td>:</td>
                          <td><?=$r_siswa['nis'];?></td>
                        </tr>
                        <tr>
                          <td>Nama</td>
                          <td>:</td>
                          <td><?=$r_siswa['nama'];?></td>
                        </tr>
                        <tr>
                          <td>Kelas</td>
                          <td>:</td>
                          <td><?=$r_siswa['nama_kelas']. " | ".$r_siswa['kompetensi_keahlian'];?></td>
                        </tr>
                        </thead>
                        </table>
                        <hr/>

                        <!--Sekarang kita tampilkan history pembayarannya-->
                        <h4 class="card-title">Biodata Siswa</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                         <td>NO.</td>
                         <td>Tanggal Pembayaran</td>
                         <td>Pembayaran Melalui</td>
                         <td>Tahun SPP | Nominal yang harus dibayar</td>
                         <td>Bulan</td>
                         <td>Jumlah yang sudah dibayar</td>
                         <td>Status</td>
                         <td>Aksi</td>
                        </tr>
                        <?php
                        $no=1;
                        while($r_trx = mysqli_fetch_assoc($historyPembayaran)){ ?>
                        <tr>
                          <td><?=$no;?></td>
                          <td><?=$r_trx['tgl_bayar'];?></td>
                          <td><?=$r_trx['nama_petugas'];?></td>
                          <td><?=$r_trx['tahun']." | Rp.".$r_trx['nominal'];?></td>
                          <td><?=$r_trx['bulan_dibayar'];?></td>
                          <td><?="Rp.".$r_trx['jumlah_bayar'];?></td>
                          <?php
                          if($r_trx['jumlah_bayar'] == $r_trx['nominal']){?>
                          <td><font style="color:darkgreen;font-weight:bold;">LUNAS</font></td>
                          <td>-</td><?php }else{?><td><font style="color:darkgreen;font-weight:bold;">BELUM LUNAS</font></td>
                          <td><a href="?pembayaran=edit&id_pembayaran=<?php echo $r_trx['id_pembayaran'];?>">
                          <td><a href="?pembayaran=edit&id_pembayaran=<?= $r_trx['id_pembayaran']; ?>" class="btn btn-primary me-2"> -->BAYAR LUNAS</a></td>
                          <?php } ?>
                          </tr>
                          <?php $no++; }?>
                          </table>
                          <a class="btn btn-primary me-2" href="pembayaran/cetak.php?nisn=<?=$r_siswa['nisn']?>" target="_blank">CETAK</a>
                          <?php } ?>
                        </thead>
                        </body>
                        </html>
                  </form>
                </div>
              </div>
            </div>