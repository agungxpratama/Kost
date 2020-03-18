<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Data Kost</h1>
           <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal" data-target="#myModal2"><i class="fas fa-pen fa-sm text-white-50"></i> Edit Kos</a>
           <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kamar</a>
         </div>
         <!-- Content Row -->
         <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title">Tambah Kamar</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="<?= base_url()?>index.php/pemilik/tambah_kamar" method="post" enctype="multipart/form-data">
                 <div class="modal-body">
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Kode Kamar</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Kode Kamar" name="kode_kamar" aria-label="kodeKamar" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Harga</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" name="harga" aria-label="harga" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Deskripsi</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Deskripsi" name="deskripsi" aria-label="deskripsi" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Foto</label>
                           <input type="file" class="form-control bg-light border-1 small" placeholder="Foto" name="foto" aria-label="foto" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Status</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Status" name="status" aria-label="statsu" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Tanggal Tersedia</label>
                           <input type="date" class="form-control bg-light border-1 small" placeholder="Tanggal Tersedia" name="tgl_tersedia" aria-label="tanggalTersedia" aria-describedby="basic-addon2">
                       </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Save changes</button>
                 </div>
               </form>
               </div>
             </div>
         </div>
         <!-- Content Row -->
         <div class="modal fade" tabindex="-1" role="dialog" id="myModal2">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title">Edit Data Kos</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <form action="<?= base_url()?>index.php/pemilik/tambah_kamar" method="post" enctype="multipart/form-data">
                 <div class="modal-body">
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Kode Kos</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Kode Kamar" name="kode_kamar" aria-label="kodeKamar" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Nama Kos</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" name="harga" aria-label="harga" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Alamat</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Deskripsi" name="deskripsi" aria-label="deskripsi" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Status</label>
                           <input type="text" class="form-control bg-light border-1 small" placeholder="Status" name="status" aria-label="statsu" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Tanggal Tersedia</label>
                           <input type="date" class="form-control bg-light border-1 small" placeholder="Tanggal Tersedia" name="tgl_tersedia" aria-label="tanggalTersedia" aria-describedby="basic-addon2">
                       </div>
                       <div class="form-group">
                           <label for="exampleFormControlInput1">Foto</label>
                           <input type="file" class="form-control bg-light border-1 small" placeholder="Foto" name="foto" aria-label="foto" aria-describedby="basic-addon2">
                       </div>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Save changes</button>
                 </div>
               </form>
               </div>
             </div>
         </div>
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Kamar</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                     <th>Kode Kamar</th>
                     <th>Harga</th>
                     <th>Deskripsi</th>
                     <th>Foto</th>
                     <th>Status</th>
                     <th>Tanggal Tersedia</th>
                     <th>Aksi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php foreach ($result as $r): ?>
                       <tr>
                           <td><?= $r->kode_kamar;?></td>
                           <td><?= $r->harga; ?></td>
                           <td><?= $r->deskripsi; ?></td>
                           <td><?= $r->foto; ?></td>
                           <td><?= $r->status; ?></td>
                           <td><?= $r->tgl_tersedia; ?></td>
                           <td>
                               <a href="<?php echo base_url("index.php/pemilik/hapus_kos/$r->kode_kos;") ?>" class="btn btn-primary">Hapus</a>
                               <a href="<?php echo base_url("index.php/pemilik/edit_kos/$r->kode_kos") ?>" class="btn btn-danger">Edit</a>
                           </td>
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