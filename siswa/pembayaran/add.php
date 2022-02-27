<?php 
$edit=$mysqli->query("select*from siswa,spp where siswa.id_spp=spp.id_spp and siswa.nisn='$_GET[nisn]'");
$e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Data Pembayaran</h4>
                  <form class="forms-sample" method="post" action="?pembayaran=create">
                    <div class="form-group">
                      <label for="exampleInputName1">Id Pembayaran</label>
                      <input type="text" class="form-control" id="id_pembayaran" placeholder="Masukkan Id Pembayaran" name="id_pembayaran">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Id Petugas</label>
                      <div class="form-group">
                    <select class="form-control" name="id_petugas">
                    <option>Pilih Petugas</option>
                    <?php
                    $petugas=$mysqli->query("SELECT * FROM petugas ORDER BY id_petugas");
                    $no=0;
                    while($data=mysqli_fetch_array($petugas)){
                    $no++;
                    ?>
                    
                    <option value="<?php echo $data['id_petugas'];?>"><?php echo 
                    $data['nama_petugas'];?> </option>
                    
                    <?php } ?>

                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">NISN</label>
                      <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisndisabled" value="<?php echo $e['nisn'];?>" disabled>
                      <input type="hidden" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn" value="<?php echo $e['nisn'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Tanggal Bayar</label>
                      <input type="date" class="form-control" id="tgl_bayar" placeholder="Masukkan Tanggal Bayar" name="tgl_bayar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Bulan Di Bayar</label>
                      <div class="form-group">
                    <select class="form-control" name="bulan_dibayar">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Januari">Mei</option>
                    <option value="Februari">Juni</option>
                    <option value="Maret">Juli</option>
                    <option value="April">Agustus</option>
                    <option value="Januari">September</option>
                    <option value="Februari">Oktober</option>
                    <option value="Maret">November</option>
                    <option value="April">Desember</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tahun Di Bayar</label>
                      <input type="number" class="form-control" id="tahun_dibayar" placeholder="Masukkan Tahun Di Bayar" name="tahun_dibayar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">SPP</label>
                      <input type="text" class="form-control" id="id_spp" placeholder="Masukkan SPP" name="id_sppdisabled" value="<?php echo $e['nominal'];?>" disabled>
                      <input type="hidden" class="form-control" id="id_spp" placeholder="Masukkan SPP" name="id_spp" value="<?php echo $e['id_spp'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Jumlah Bayar</label>
                      <input type="number" class="form-control" id="jumlah_bayar" placeholder="Masukkan Jumlah Bayar" name="jumlah_bayar">
                    </div>
                    <input type="submit" class="btn btn-primary me-2" value="Submit">
                    <a href='?pembayaran=read' class="btn btn-danger">Cancel</a></td>
                  </form>
                </div>
              </div>
            </div>