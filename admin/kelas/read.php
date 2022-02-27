<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Kelas | <a href="?kelas=add">Tambah Data</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Nomor
                          </th>
                          <th>
                            Id Kelas
                          </th>
                          <th>
                            Nama Kelas
                          </th>
                          <th>
                            Kompetensi Keahlian
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                        <?php
                        $kelas=$mysqli->query("SELECT * FROM kelas ORDER BY id_kelas");
                        $no=0;
                        while($data=mysqli_fetch_array($kelas)){
                        $no++;
                        ?>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no;?></td>
                          <td><?php echo $data['id_kelas'];?></td>
                          <td><?php echo $data['nama_kelas'];?></td>
                          <td><?php echo $data['kompetensi_keahlian'];?></td>
                          <td><a href="?kelas=edit&id_kelas=<?php echo $data['id_kelas'];?>" class="btn btn-primary">Edit</a> | <a href="?kelas=delete&id_kelas=<?php echo $data['id_kelas'];?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          