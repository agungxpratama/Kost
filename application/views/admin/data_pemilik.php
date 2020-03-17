 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pemilik Kost</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Pemilik</th>
                      <th>Nama Pemilik</th>
                      <th>No KTP</th>
                      <th>No Telepon</th>
                      <th>Email</th>
                      <th>No Rekening</th>
                      <th>Pemilik Rekening</th>
                      <th>Bank</th>
                      <th>Jenis Kelamin</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($result as $r): ?>
                      <tr>
                          <th><?= $r->id_pemilik ?></th>
                          <th><?= $r->nama_pemilik ?></th>
                          <th><?= $r->no_ktp ?></th>
                          <th><?= $r->no_telp ?></th>
                          <th><?= $r->email ?></th>
                          <th><?= $r->no_rek ?></th>
                          <th><?= $r->atas_nama_rek ?></th>
                          <th><?= $r->bank ?></th>
                          <th><?= $r->jenis_kelamin ?></th>
                          <th><img src="<?= base_url('asset/upload_pemilik/'.$r->foto); ?>" alt="foto_pemilik"></th>
                          <th>
                              <a href="<?php echo base_url("index.php/Admin/edit_kos/$r->id_pemilik") ?>" class="btn btn-primary">Edit</a>
                              <a href="<?php echo base_url("index.php/Admin/hapus_kos/$r->id_pemilik") ?>" class="btn btn-danger">Hapus</a>
                          </th>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
