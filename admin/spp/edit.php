<?php
$edit=$mysqli->query("select*from spp where id_spp='$_GET[id_spp]'");
$e=mysqli_fetch_array($edit);
?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data SPP</h4>
                  <form class="forms-sample" method="post" action="?spp=update">
                    <div class="form-group">
                      <label for="exampleInputName1">Id SPP</label>
                      <input type="text" class="form-control" id="id_spp" placeholder="Masukkan Id SPP" name="id_sppdisabled" value="<?php echo $e['id_spp'];?>" disabled>
                      <input type="hidden" class="form-control" id="id_spp" placeholder="Masukkan Id SPP" name="id_spp" value="<?php echo $e['id_spp'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Tahun</label>
                      <input type="number" class="form-control" id="tahun" placeholder="Masukkan Tahun" name="tahun" value="<?php echo $e['tahun'];?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Nominal</label>
                      <input type="number" class="form-control" id="nominal" placeholder="Masukkan Nominal" name="nominal" value="<?php echo $e['nominal'];?>">
                    </div>
                    <input type="submit" class="btn btn-primary me-2" value="Edit">
                    <a href='?spp=read' class="btn btn-danger">Cancel</a></td>
                  </form>
                </div>
              </div>
            </div>