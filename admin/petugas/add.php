<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Data Petugas</h4>
                  <form class="forms-sample" method="post" action="?petugas=create">
                    <div class="form-group">
                      <label for="exampleInputName1">Id Petugas</label>
                      <input type="text" class="form-control" id="id_petugas" placeholder="Masukkan Id Petugas" name="id_petugas">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Nama Petugas</label>
                      <input type="text" class="form-control" id="nama_petugas" placeholder="Masukkan Nama Petugas" name="nama_petugas">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Level</label>
                      <div class="form-group">
                    <select class="form-control" name="level">
                      <option value="admin">Admin</option>
                      <option value="petugas">Petugas</option>
                    </select>
                    </div>
                    </div>
                    <input type="submit" class="btn btn-primary me-2" value="Submit">
                    <a href='?petugas=read' class="btn btn-danger">Cancel</a></td>
                  </form>
                </div>
              </div>
            </div>