<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pembayaran</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Id Pembayaran</th>
                          <th>Petugas</th>
                          <th>NISN</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Tanggal Bayar</th>
                          <th>Bulan di Bayar</th>
                          <th>Tahun di Bayar</th>
                          <th>SPP</th>
                          <th>Jumlah Bayar</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                        <?php
                        $pembayaran=$mysqli->query("SELECT * FROM pembayaran,siswa,spp,petugas,kelas where 
                        pembayaran.nisn=siswa.nisn and pembayaran.id_spp=spp.id_spp and pembayaran.id_petugas=petugas.id_petugas and siswa.id_kelas=kelas.id_kelas");
                        $no=0;
                        while($data=mysqli_fetch_array($pembayaran)){
                        $no++;
                        ?>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_pembayaran'];?></td>
                        <td><?php echo $data['nama_petugas'];?></td>
                        <td><?php echo $data['nisn'];?></span></td>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['nama_kelas'];?></td>
                        <td><?php echo $data['tgl_bayar'];?></td>
                        <td><?php echo $data['bulan_dibayar'];?></td>
                        <td><?php echo $data['tahun_dibayar'];?></td>
                        <td><?php echo $data['nominal'];?></td>
                        <td><?php echo $data['jumlah_bayar'];?></td>
                        <td class="align-middle text-center text-m">
                          <?php
                          if($data['jumlah_bayar']==$data['nominal']){ ?>
                              <span class="badge badge-m bg-gradient-success">LUNAS</span>
                          <?php } else { ?>
                              <span class="badge badge-m bg-gradient-danger">BELUM LUNAS</span> <?php } ?>
                      </td>
                        <td><a href="?pembayaran=edit&id_pembayaran=<?php echo $data['id_pembayaran'];?>" class="btn btn-primary">Edit</a> | <a 
                        href="?pembayaran=delete&id_pembayaran=<?php echo $data['id_pembayaran'];?>" class="btn btn-danger">Hapus</a></td>         
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          