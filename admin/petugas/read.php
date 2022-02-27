<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Petugas | <a href="?petugas=add">Tambah Data</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Nomor
                          </th>
                          <th>
                            Id Petugas
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Nama Petugas
                          </th>
                          <th>
                            Level
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                        <?php
                        $petugas=$mysqli->query("SELECT * FROM petugas ORDER BY id_petugas");
                        $no=0;
                        while($data=mysqli_fetch_array($petugas)){
                        $no++;
                        ?>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no;?></td>
                          <td><?php echo $data['id_petugas'];?></td>
                          <td><?php echo $data['username'];?></td>
                          <td><?php echo $data['nama_petugas'];?></td>
                          <td><?php echo $data['level'];?></td>
                          <td><a href="?petugas=edit&id_petugas=<?php echo $data['id_petugas'];?>" class="btn btn-primary">Edit</a> | <a href="?petugas=delete&id_petugas=<?php echo $data['id_petugas'];?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          