<?php require view_path('partials/header');?>
<style>
@import url("assets/css/dash.css");

</style>
<div class="main-content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

     <!-- Sale & Revenue Start -->
     <div class="sales-container">
            <div class="date-clock">
                <h1 class="sales-title" style="font-weight: bolder;">Sales</h1>
                <h5 class="date"><?= date('F j, Y')?></h5><h5 class="clock" id="clock"></h5>
              </div>
                <div class="row g-4 part-1">
                    <div class="col-sm-6 col-xl-3">
                        <a href="index.php?pg=sold-items"><div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 sale-tab">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sales</p>
                                <div class="row-12 d-flex">
                                    <h6 class="col-2">₱</h6><h6 class="mb-0 ms-3 col-9" id="sale">0</h6>
                                </div>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 sale-tab1">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2 transaction-title">Lemon</p>
                                <?php if(!empty($lemon)){?>
                              <?php foreach($lemon as $count1) {?>
                                <div class="d-flex">
                                      <h6 class="mb-0 text-center row me-5"><?= $count1['count']?></h6>
                                    <?php } ?>
                                    <?php }else{?>
                                        <h6 class="mb-0 text-center row">0</h6>
                                        <?php } ?>
                                <h6 class="mb-0  mb-2 text-center" id="transaction">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 mb-2 sale-tab">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                               <p class="mb-2 ms-2">Coffee</p>
                            <?php if(!empty($coffee)){?>
                              <?php foreach($coffee as $count) {?>
                                <div class="d-flex">
                                      <h6 class="mb-0 text-center row me-5"><?= $count['count']?></h6>
                                    <?php } ?>
                                    <?php }else{?>
                                        <h6 class="mb-0 text-center row">0</h6>
                                        <?php } ?>
                              
                                <h6 class="mb-0  mb-2 text-center row" id="cancelled">0</h6>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 ">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 cashier-card">
                        <!-- <div class="position-relative">
                          <?php foreach($cashier as $person){?>
                        <img src="<?=crop($person['image'])?>" alt="product image" style="width=50px;height=50px;max-width:90px;max-height:90px;" class="rounded-circle">
                        <div class="bg-success rounded-circle border border-1 border-white position-absolute end-0 top-0 p-2"></div></div>
                        <?php }?> -->
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2 cashier-title">Today's Cashier</p>
                                <h6 class="mb-0  mb-2 text-center" id="cashier">No one</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Monthly -->
                <!-- <div class="row g-4 mt-1">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php foreach($month_sales as $count) {?>
                                <p class="mb-2">Last Month Sale</p>
                                <h6 class="mb-0 text-center">₱ <?= $count['total_month'] ?? 0 ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                          
                                <p class="mb-2">Last Month Transaction</p>
                                <?php if(!empty($transaction)){?>
                              <?php foreach($transaction_month as $count) {?>
                                <h6 class="mb-0 text-center"><?= $count['count']?></h6>
                                <?php } ?>
                                <?php }else{?>
                                    <h6 class="mb-0 text-center">0</h6>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php foreach($cancel as $count) {?>
                                <p class="mb-2">Cancelled Transaction</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                            <?php if(!empty($cashiers_duty)){?>
                <?php foreach($cashiers_duty as $cashier) {?>
                                <p class="mb-2">Today Cashier</p>
                                <h6 class="mb-0 text-center"><?= $cashier['cashier'] ?></h6>
                                <?php } ?>
                  <?php } else {?>
                    <h6 class="mb-0 text-center">no one</h6>
                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>   -->
                <!-- Monthly end -->
            </div>
            <!-- Sale & Revenue End -->

             <!-- Sales Chart Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6 bar">
                        <div class="bg-secondary text-center rounded p-3 bar">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Monthly Sales</h6>
                                <a href="#">Show All</a>
                            </div>
                            <canvas id="barChart" class="">


                            
                            </canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6 bar">
                        <div class="bg-secondary text-center rounded p-3 bar">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Monthly Cost</h6>
                                <a href="#">Show All</a>
                            </div>
                            <canvas id="barChart1" class="">


                            
                            </canvas>
                        </div>
                    </div>
                    <!-- <div class="col-sm-12 col-xl-6 line">
                        <div class="bg-secondary text-center rounded p-3 line">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Daily Sales vs. Cost</h6>
                                <a href="#">Show All</a>
                            </div>
                            <canvas id="lineChart" style="overflow-x: scroll;"></canvas>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Sales Chart End -->
           

        </div>
        <div class="row container-fluid mb-1 mt-3 product-title">
          <h1 class="text-primary " style="font-weight: bolder;">Products</h1>
        </div>
        <div class="row p-3 product-row">
          <!-- ./col -->
             <div class="col-sm-6 col-xl-3 product">
                    <a href="index.php?pg=product">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 product-line">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($counts as $count) {?>
                                <p class="mb-2">Product Line</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                    
                    </div>

                    <!-- <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=inventory">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                              <i class="fa fa-chart-area fa-3x text-primary"></i>
                              <div class="ms-5">
                              <?php foreach($full_stocks as $full_stock) {?>
                                  <p class="mb-2">Full Stock Items</p>
                                  <h6 class="mb-0 text-center"><?= $full_stock['full_stock'] ?></h6>
                                  <?php } ?>
                              </div>
                          </div>
                      </a>
                  
                    </div>

                    <div class="col-sm-6 col-xl-3">
                      <a href="index.php?pg=critical">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($criticals as $critical) {?>
                                <p class="mb-2">Critical Items</p>
                                <h6 class="mb-0 text-center"><?= $critical['critical'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                      
                    </div> -->
     
               
    

                         <!-- DONUT CHART -->
        
                  <div class="col-sm-12 mt-3 top-selling">
                    <a href="index.php?pg=top-selling ">
                       <div class="bg-secondary rounded p-3 col-4 align-items-center top-selling">
                            <h6 class="mb-4 text-primary">Top Selling Product (Top 5)</h6>
                            <center><canvas id="donutChart"  ></canvas></center>
                        </div>
                    </a>
                       
                    </div>
             
        </div>
        <!-- /.row -->
        
        <div class="row container-fluid mb-1 mt-3 stocks-title">
          <h1 class="text-primary " style="font-weight: bolder;">Stocks</h1>
        </div>
        <div class="stocks-container">
                  <div class="row p-3">
          <!-- ./col -->
             <div class="col-sm-6 col-xl-3 stocks">
                    <a href="index.php?pg=product">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($stocks as $count) {?>
                                <p class="mb-2">Stock Line</p>
                                <h6 class="mb-0 text-center"><?= $count['count'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                    
                    </div>

                    <div class="col-sm-6 col-xl-3 full-stocks">
                      <a href="index.php?pg=inventory">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                              <i class="fa fa-chart-area fa-3x text-primary"></i>
                              <div class="ms-5">
                              <?php foreach($full_stocks as $full_stock) {?>
                                  <p class="mb-2">Full Stocks</p>
                                  <h6 class="mb-0 text-center"><?= $full_stock['full_stock'] ?></h6>
                                  <?php } ?>
                              </div>
                          </div>
                      </a>
                  
                    </div>

                    <div class="col-sm-6 col-xl-3 stocks-critical">
                      <a href="index.php?pg=critical">
                          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 ">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($criticals as $critical) {?>
                                <p class="mb-2 critical-title">Critical Stocks</p>
                                <h6 class="mb-0 text-center"><?= $critical['critical'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                      
                    </div>
     
               
    

                         <!-- DONUT CHART -->
<!--         
                  <div class="col-sm-12 mt-3">
                    <a href="index.php?pg=top-selling">
                       <div class="bg-secondary rounded p-3 col-4 align-items-center">
                            <h6 class="mb-4 text-primary">Top Selling Product (Top 5)</h6>
                            <center><canvas id="donutChart"  ></canvas></center>
                        </div>
                    </a>
                       
                    </div> -->
             
        </div>
        <!-- /.row -->
        </div>


        <div class="row container-fluid mb-3 mt-3 user-title">
          <h1 class="text-primary " style="font-weight: bolder;">User Accounts</h1>
        </div>
        <div class="user-container">
             <div class="row p-3 ">
                    <div class="col-sm-6 col-xl-3 user">
                      <a href="index.php?pg=user">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 user">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($admins as $admin) {?>
                                <p class="mb-2">Admins</p>
                                <h6 class="mb-0 text-center"><?= $admin['admin'] ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                    
                    </div>

                    <div class="col-sm-6 col-xl-3 user">
                      <a href="index.php?pg=user">
                         <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 user1">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-5">
                            <?php foreach($cashiers as $cashier) {?>
                                <p class="mb-2">Cashiers</p>
                                <h6 class="mb-0 text-center"><?=$cashier['cashier']?></h6>
                                <?php } ?>
                            </div>
                        </div>
                      </a>
                       
                    </div>
                    </section>
        </div>
        </div>
     
      </div>

  <?php require view_path('partials/footer');?>


  <script>
   
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: <?php echo json_encode($month);?>,
      datasets: [
        {
          data: <?php echo json_encode($total);?>,
          backgroundColor : ['#00c0ef', '#3c8dbc', '#d2d6de','#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : false,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

//-------------
    //- BAR CHART -
    //-------------
    const ctx = document.getElementById('barChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($months);?>,
      datasets: [{
        label: 'Sales',
        data: <?php echo json_encode($totals);?>,
        backgroundColor : ['#0ddbd4'],
        borderWidth: 1
      }
      // ,{
      //   label: 'Cost',
      //   data: <?php echo json_encode($cost);?>,
      //   backgroundColor : ['#60038f'],
      //   borderWidth: 1
      // }
    ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  const ctx1 = document.getElementById('barChart1');

new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($months1);?>,
    datasets: [{
      label: 'Sales',
      data: <?php echo json_encode($totals1);?>,
      backgroundColor : ['#1d1160'],
      borderWidth: 1
    }
    // ,{
    //   label: 'Cost',
    //   data: <?php echo json_encode($cost);?>,
    //   backgroundColor : ['#60038f'],
    //   borderWidth: 1
    // }
  ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
    
  const ctxs = document.getElementById('lineChart');

  new Chart(ctxs, {
  type: 'line',
  data: {
    labels: <?= json_encode($days)?>,
    datasets: [{
      label: 'Sales',
      data: <?= json_encode($totalDay)?>,
      backgroundColor : ['#0ddbd4'],
      borderWidth: 3,
      borderColor: ['#0ddbd4'],
    }
    // ,{
    //   label: 'Cost',
    //   data: <?= json_encode($costDay)?>,
    //   backgroundColor : ['#60038f'],
    //   borderWidth: 3,
    //   borderColor: ['#60038f'],
    // }
  ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        position: 'left',
      }
    }
  }
  });


 
</script>

<script>
        var sales = new EventSource("index.php?pg=dashboard-sale");
        sales.onmessage = function (event) {
        var arrayData = JSON.parse(event.data);
        var sale = document.querySelector('#sale')
          sale.innerHTML = arrayData;
        }

        // function sale () {
        //   const saleDiv = document.getElementById('sale');
        //   setInterval(function(){
        //     fetch('index.php?pg=dashboard-sale').then(function(response){
        //           return response.json();
        //     }).then(function (data){
        //       saleDiv.textContent = data.sales;
        //     }).catch(function (error){
        //       console.log(error);
        //     });
        //   }, 1000);
        // }
        // document.addEventListener('DOMContentLoaded', function () {
        //   sale()
        // }  );

        var transactions = new EventSource("index.php?pg=dashboard-transaction");
        transactions.onmessage = function (event) {
        var arrayData = JSON.parse(event.data);
        var transaction = document.querySelector('#transaction')
        transaction.innerHTML = arrayData;
        }

        var cancelleds = new EventSource("index.php?pg=dashboard-cancelled");
        cancelleds.onmessage = function (event) {
        var arrayData = JSON.parse(event.data);
        var  cancelled = document.querySelector('#cancelled')
         cancelled.innerHTML = arrayData;
        }

        var cashiers = new EventSource("index.php?pg=dashboard-cashier");
        cashiers.onmessage = function (event) {
        var arrayData = JSON.parse(event.data);
        var  cashier = document.querySelector('#cashier')
        cashier.innerHTML = arrayData;
        }

        // var line = new EventSource("index.php?pg=dashboard-line");
        // line.onmessage = function (event) {
        // var arrayData = JSON.parse(event.data);
        // console.log(arrayData);

        // const ctxs = document.getElementById('lineChart');

        // new Chart(ctxs, {
        // type: 'line',
        // data: {
        //   labels: <?= json_encode($days)?>,
        //   datasets: [{
        //     label: 'Sales',
        //     data: arrayData[1],
        //     backgroundColor : ['#0ddbd4'],
        //     borderWidth: 3,
        //     borderColor: ['#0ddbd4'],
        //   },{
        //     label: 'Cost',
        //     data: arrayData[2],
        //     backgroundColor : ['#60038f'],
        //     borderWidth: 3,
        //     borderColor: ['#60038f'],
        //   }]
        // },
        // options: {
        //   scales: {
        //     y: {
        //       beginAtZero: true,
        //       position: 'left',
        //     }
        //   }
        // }
        // });

      
        // }

</script>



          