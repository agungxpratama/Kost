 <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Pemesan</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Nama Kos</th>
                      <th>Kode Kos</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($result as $r): ?>
                      <tr>
                          <td><?= $r->nama_pencari ?></td>
                          <td><?= $r->tgl_bayar ?></td>
                          <td><?= $r->nama_kos ?></td>
                          <td><?= $r->kode_kos ?></td>
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
