 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Informasi Kos-Kos an</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card-columns">
                        <?php 
                        while ($row=$result->fetch_assoc()) { ?>
                        <div class="card">
                          <img class="card-img-top" src="<?php echo base_url($row['foto']); ?>" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title"><?php echo $row['nama_kos']; ?></h3>
                            <p class="card-text">
                              <?php echo $row['deskripsi']; ?><br>
                              Alamat : <?php echo $row['alamat']; ?>
                            </p>
                            <button class="btn btn-success">Pesan</button>
                            <button class="btn btn-warning">Hubungi</button>
                          </div>
                        </div>
                        <?php } 
                         ?>
                      </div>
                    </div>
                  </thead>
                  <tfoot>
                  
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