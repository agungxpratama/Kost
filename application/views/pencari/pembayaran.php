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
                     <th>Sisa Pembayaran</th>
                     <th>Total Bayar</th>
                     <th>Status</th>
                     <!-- <th>Sisa Pembayaran</th> -->
                   </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($result as $r): ?>
                     <tr>
                         <td><?= $r->kode_kamar ?></td>
                         <td><?= $r->sisa_pembayaran ?></td>
                         <td><?= $r->total_bayar ?></td>
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
