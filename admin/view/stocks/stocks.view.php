<?php
require_once view_path('partials/header');
?>
<style>
  @import url('dist/css/brand-style.css');
</style>
<!-- Google Font: Source Sans Pro -->

  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
<div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid col-md-12">
        <div class="card shadow bg-secondary p-3">
              <!-- /.card-header -->
              <div class="card-header mb-0">
              <div class="row p-2">
                      <div class="col-sm-8 mt-1">
                        <h3 class="text-primary"><strong><i class="fa fa-cart-flatbed"></i><small>Added-Stock-History</small></strong> </h3>
                      </div>
                      <div class="col-sm-1 d-flex  ">
                      <form action="" method="post">
                      <select name="refno" id="refno" class="form-control refno float-end bg-dark" required oninvalid="this.setCustomValidity('No reference number available')">
                      <?php 
                      foreach($refno as $row){
                          ?>
                          <option value="<?php echo $row['id'];?>"selected hidden><?php echo $row['refno'];?> (<?php echo $row['stock_by'];?>)</option>
                          <option value="<?php echo $row['id'];?>"><?php echo $row['refno'];?> (<?php echo $row['stock_by'];?>)</option>
                          <?php
                      }
                      ?>
                      </select><br>
                     
                      </div>
                      <div class="col-sm-3 d-flex">
                            <ol class="col-sm-6 text-center">  
                              <button class="btn btn-dark text-primary px-3">Add Stocks</button>         
                            </ol>
                          </form>
                          <a href="index.php?pg=reference"><button class="btn btn-dark text-primary px-3">New  Reference</button></a> 
                      </div>
                         
                </div>
              </div>
        
              <div class="card-body">
              <table id="myTable" class="table   mb-0 text-center table-dark table-hover text-light">
                  <thead class="text-primary">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Reference</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Stocked at</th>
                    <th class="text-center">Stocked by</th>
                    <th class="text-center">Supplier</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1?>
                    <?php if(!empty($stocks)):?>
                      <?php foreach ($stocks as $stock):?>
                            <tr>
                            <td class="text-center" ><?= $no ?></td>
               
                              <td class="text-center" ><?= $stock['refno'] ?></td>
                              <td class="text-center"><?= $stock['pcode'] ?></td>
                              <td class="text-center"><?= $stock['p_name'] ?></td>
                              <td class="text-center" style="font-weight:bolder;" ><?= strtoupper($stock['description'])?></td>
                              <td class="text-center" ><?= $stock['qty'] ?></td>
                              <td class="text-center"><?= $stock['stock_at'] ?></td>
                              <td class="text-center"><?= $stock['stock_by'] ?></td>
                              <td class="text-center"><?= $stock['supplier'] ?></td>
                              <td  class="text-center">
                              
                             <a href="index.php?pg=stocks-delete&id=<?=$stock['id']?>" class="btn btn-sm btn-dark text-primary" name="delete_qty" value=""><i class="fa fa-trash"></i></button>
                       
                              </td>
                            </tr>
                         
                            <?php $no++?> 
                            <?php endforeach?>
                        <?php endif ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          </section>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

  <?php
  require_once view_path('partials/footer');
  ?>
 


  