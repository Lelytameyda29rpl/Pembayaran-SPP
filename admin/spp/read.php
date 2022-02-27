<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data SPP | <a href="?spp=add">Tambah Data</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Nomor
                          </th>
                          <th>
                            Id SPP
                          </th>
                          <th>
                            Tahun
                          </th>
                          <th>
                            Nominal
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                        <?php
                        $spp=$mysqli->query("SELECT * FROM spp ORDER BY id_spp");
                        $no=0;
                        while($data=mysqli_fetch_array($spp)){
                        $no++;
                        ?>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no;?></td>
                          <td><?php echo $data['id_spp'];?></td>
                          <td><?php echo $data['tahun'];?></td>
                          <td><?php echo $data['nominal'];?></td>
                          <td><a href="?spp=edit&id_spp=<?php echo $data['id_spp'];?>" class="btn btn-primary">Edit</a> | <a href="?spp=delete&id_spp=<?php echo $data['id_spp'];?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          