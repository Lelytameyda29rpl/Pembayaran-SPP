<?php
$edit=$mysqli->query("select*from kelas where id_kelas='$_GET[id_kelas]'");
$e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data Kelas</h4>
                  <form class="forms-sample" method="post" action="?kelas=update">
                    <div class="form-group">
                      <label for="exampleInputName1">Id Kelas</label>
                      <input type="text" class="form-control" id="id_kelas" placeholder="Masukkan Id Kelas" name="id_kelasdisabled" value="<?php echo $e['id_kelas'];?>" disabled>
                      <input type="hidden" class="form-control" id="id_kelas" placeholder="Masukkan Id Kelas" name="id_kelas" value="<?php echo $e['id_kelas'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Nama Kelas</label>
                      <input type="text" class="form-control" id="nama_kelas" placeholder="Masukkan Nama Kelas" name="nama_kelas" value="<?php echo $e['nama_kelas'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Kompetensi Keahlian</label>
                      <input type="text" class="form-control" id="kompetensi_keahlian" placeholder="Masukkan Kompetensi Keahlian" name="kompetensi_keahlian" value="<?php echo $e['kompetensi_keahlian'];?>">
                    </div>
                    <input type="submit" class="btn btn-primary me-2" value="Edit">
                    <a href='?kelas=read' class="btn btn-danger">Cancel</a></td>
                  </form>
                </div>
              </div>
            </div>