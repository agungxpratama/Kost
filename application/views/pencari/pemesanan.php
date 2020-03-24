<div class="container-fluid">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <!-- <?php print_r($result) ?> -->
                 <thead>
                   <tr>
                     <th>Kamar</th>
                     <th>Tanggal Bayar</th>
                     <th>Tanggal Masuk</th>
                     <th>Tanggal Keluar</th>
                     <th>Status Bayar</th>
                     <!-- <th>Sisa Pembayaran</th> -->
                   </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($result as $r): ?>
                     <tr>
                         <td><?= $r->kode_kamar ?></td>
                         <td><?= $r->tgl_bayar ?></td>
                         <td><?= $r->tgl_masuk ?></td>
                         <td><?= $r->tgl_keluar ?></td>
                         <td></td>
                     </tr>
                   <?php endforeach; ?>
                 </tbody>
                 <tfoot>
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
