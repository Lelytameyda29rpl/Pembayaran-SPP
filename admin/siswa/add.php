<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Data Siswa</h4>
                  <form class="forms-sample" method="post" action="?siswa=create">
                    <div class="form-group">
                      <label for="exampleInputName1">NISN</label>
                      <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">NIS</label>
                      <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Kelas</label>
                      <div class="form-group">
                    <select class="form-control" name="id_kelas">
                    <option>Pilih Kelas</option>
                    <?php
                    $kelas=$mysqli->query("SELECT * FROM kelas ORDER BY id_kelas");
                    $no=0;
                    while($data=mysqli_fetch_array($kelas)){
                    $no++;
                    ?>
                    <option value="<?php echo $data['id_kelas'];?>"><?php echo $data['nama_kelas'];?> | 
                    <?php echo $data['kompetensi_keahlian'];?></option>
                    <?php } ?>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">No. Telepon</label>
                      <input type="text" class="form-control" id="no_telp" placeholder="Masukkan No. Telepon" name="no_telp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">SPP</label>
                      <div class="form-group">
                    <select class="form-control" name="id_spp">
                    <option>Pilih SPP</option>
                    <?php
                    $spp=$mysqli->query("SELECT * FROM spp ORDER BY id_spp");
                    $no=0;
                    while($data=mysqli_fetch_array($spp)){
                    $no++;
                    ?>
                    <option value="<?php echo $data['id_spp'];?>"><?php echo $data['tahun'];?> | <?php echo $data['nominal'];?></option>
                    <?php } ?>
                    </select>
                    </div>
                    </div>
                    <input type="submit" class="btn btn-primary me-2" value="Submit">
                    <a href='?siswa=read' class="btn btn-danger">Cancel</a></td>
                  </form>
                </div>
              </div>
            </div>