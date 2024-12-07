<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="3600;url=index.php?pg=logout"/>
    <meta charset="utf-8">
    <title><?=esc(APP_NAME) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- sweet-alert -->
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">

    <!-- dataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/css/pos.css">

    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
  @import url('assets/css/brand-style.css');
</style>
<nav class="navbar">
        <div class="navbar-container">
            <div class="user-info">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="user-image" src="<?= auth('image')?>">
                    <span class="user-name"><?= strtoupper(auth('name'))?></span>
                </a>
                    <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="index.php?pg=pos" class="dropdown-item">Back to POS</a>
                            <button href="" type="button" class="dropdown-item" onclick="logout()">Log Out</button>
                    </div>
            </div>
            <div class="app-name">
                    <img class="logo-image" src="assets/img/idatsLogo.png" alt="Logo">
                    <h4 class="appName"><?=esc(APP_NAME)?> <span class="pos">Today's Transaction</span></h4>
            </div>
            <div class="total-amount">
                 
            </div>
        </div>
    </nav>
    
    <div class="main-content">
    <!-- Top navbar -->

<div class="content-wrapper">

     <!-- Main content -->
     <section class="content-header mt-5">
      <div class="container col-md-11">
        <div class="card shadow bg-secondary">
              <!-- /.card-header -->
              <div class="card-body ">
                  <div class="row p-0">
                      <div class="col-sm-3 mt-1">
                        <h3 class="text-primary "><strong><i class="fa fa-hamburger"></i> Daily Sales</strong> </h3>
                      </div>
                      <div class="col-sm-6 text-center mt-3 text-primary"><strong><?php echo $_SESSION['revenue'] ?? null ?></strong></div>
                      <div class="col-sm-3">
                          <ol class="float-sm-right">
                              <?php foreach($daily_sales as $count) {?>
                            <h1 class="text-primary">₱ <?= $count['total'] ?? "0" ?></h1>
                                <?php } ?>
                          </ol>
                      </div>
                    </div>
                    <form action="" method="post">
                            <div class="row d-flex mb-3">
                              <div class="col-sm-5"></div>
                                  <div class="col-sm-2">
                                      <div class="">
                                        <label for="">Cashier</label>
                                        <select class="form-control bg-dark" id="cashier" name="cashier" >
                                        <?php foreach($cashier as $row){?>
                                          <option value="" disabled selected hidden>All Cashier</option>
                                          <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                                          <?php } ?>
                                        </select>
                                 

                                      </div>
                                    </div>
                                   
                                <div class="col-sm-2">
                                <label for="">Start-date</label><input type="date" class="form-control" name="start" value="<?php echo $start ?? date('Y-m-d') ?>"></div>
                                <div class="col-sm-2">
                                <label for="">End-date</label><input type="date" class="form-control" name="end" value="<?php echo $end ?? date('Y-m-d')?>" ></div>
                                <div class="col-sm-1">
                                <label for="">Action</label><button class="btn btn-dark border-primary text-primary px-4" name="filter">Filter</button> </div>
                        </div>
                    </form>
                  
                
                <table id="myTable" class="table   mb-0 text-center table-dark table-hover text-light">
                  <thead class="bg-dark text-primary">
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Transno</th>
                    <th class="text-center">Pcode</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Cashier</th>
              
                  </tr>
                  </thead>
                  <tbody>
                  <!-- 'barcode',
                    'transno',
                    'description',
                    'qty',
                    'price',
                    'total',
                    'date',
                    'user_id',
                    'p_id' -->
                  <?php $no=1;if(!empty($sales)):?>
                <?php foreach ($sales as $sale):?>
                            <tr>
                              <td class="text-center"><?= $no?></td>
                              <td class="text-center"><?= $sale['transno'] ?></td>
                              <td class="text-center"><?= $sale['pcode'] ?></td>
                              <td class="text-center" style="font-weight:bolder"><?= $sale['description'] ?></td>
                              <td class="text-center"><?= $sale['qty'] ?></td>
                              <td class="text-center"><?= $sale['price'] ?></td>
                              <td class="text-center"><?= $sale['total'] ?></td>
                              <td class="text-center"><?= date("F j, Y", strtotime($sale['sdate'])) ?></td>
                              <td class="text-center"><?= $sale['user_id'] ?></td>
                            </tr>
                            
                            <?php $no++; endforeach?>
                        <?php endif ?>
                         
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </section>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
 
  
 
  <?php require view_path('partials/footer');?>

  
  