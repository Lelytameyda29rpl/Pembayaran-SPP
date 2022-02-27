<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Siswa | <a href="?siswa=add">Tambah Data</a></h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Nomor
                          </th>
                          <th>
                            NISN
                          </th>
                          <th>
                            NIS
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Kelas
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            No. Telepon
                          </th>
                          <th>
                            SPP
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                        <?php
                        $siswa=$mysqli->query("SELECT * FROM siswa,kelas,spp where siswa.id_kelas=kelas.id_kelas and siswa.id_spp=spp.id_spp");
                        $no=0;
                        while($data=mysqli_fetch_array($siswa)){
                        $no++;
                        ?>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no;?></td>
                          <td><?php echo $data['nisn'];?></td>
                          <td><?php echo $data['nis'];?></td>
                          <td><?php echo $data['nama'];?></td>
                          <td><?php echo $data['nama_kelas'];?> <?php echo $data['kompetensi_keahlian'];?></td>
                          <td><?php echo $data['alamat'];?></td>
                          <td><?php echo $data['no_telp'];?></td>
                          <td><?php echo $data['nominal'];?></td>
                          <td><a href="?pembayaran=add&nisn=<?php echo $data['nisn'];?>" class="btn btn-primary">Bayar</a> | <a 
                          href="?siswa=edit&nisn=<?php echo $data['nisn'];?>" class="btn btn-primary">Edit</a> | <a 
                          href="?siswa=delete&nisn=<?php echo $data['nisn'];?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          