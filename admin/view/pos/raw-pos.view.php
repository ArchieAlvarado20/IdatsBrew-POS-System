<!DOCTYPE html>
<html lang="en">

<head>
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

    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    
    
    
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@300;400;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Orbitron:wght@500&family=Oswald:wght@200..700&family=Pacifico&family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Vollkorn:ital,wght@0,400;0,600;1,400;1,500&family=Young+Serif&display=swap');

body {
background-color: black;
}
.navbar-container {
display: flex;
max-width: 100vw;
width: 100%;
}
.user-info {
flex: 2;
}
.user-image {
width: 40px;
height: 40px;
border-radius: 50%;
}
.user-name {
font-family: "Oswald", sans-serif;
font-optical-sizing: auto;
font-weight: bold;
font-style: normal;
color: white;
margin-left: 2px;
font-size: larger;
}
.dropdown-menu {
  background-color: black;
  color: white;
  text-align: center;
}
.dropdown-item {
  color: white;
}
.dropdown-item:hover {
  background-color: rgb(44, 42, 42);
  color: white;
}
.app-name {
  display: flex;
  flex: 8;
  justify-content: center;
}
.logo-image {
  width: 40px;
  height: 40px;
}
.appName {
  color: gold;
  margin-top: 10px;
}
.arrowL {
  display: none;
}
.arrowR {
  display: none;
}
.total-amount {
  flex: 2;
  justify-items: end;
  margin-right: 10px;
  margin-top: 10px;
}
.js-gtotal {
  font-family: "Orbitron", sans-serif;
  font-weight: bolder;
  color: darkgreen;
}
.container-fluid {
  display: flex;
}
.items {
  flex: 6;
}
.product {
  flex: 6;
}
.js-products {
  display: flex;
  flex-wrap: wrap;
  padding-right: 10px;
  justify-content: center;
  /* height: 1000px;
  overflow-y: scroll; */
}
.product-navbar {
  display: flex;
}
.items-title {
  display: flex;
  flex: 1;
  color: red;
}
.js-items-count {
  flex: 1;
  color: red;
  padding-left: 10px;
}
.date {
  flex: 8;
  color: red;
  text-align: end;
  padding-right: 10px;
}
.time {
  flex: 2;
  color: red;
}
.js-items {
  background-color: black;
}
.transaction-button {
  margin: 10px;
}
.raw-items {
  display: block;
  max-height: 15rem;
  max-width: 15rem;
  border-radius: 10px;
}
.product-card {
  position: relative;
  display: flex;
  margin: 1rem;
  border: 0.5px solid darkgray;
  background-color: black;
  border-radius: 10px;
  margin: 10px;
}
.column-one {
  flex: 2;
  display: flex;
}
.product-card img {
  width: 100px;
  height: 100px;
  border-radius: 5px;
  margin: 10px;
}
.column-two {
  flex: 10;
}
.column-two-2 {
  display: flex;
  justify-content: center;
}
.description {
  flex: 11;
  text-align: center;
  color: white;
  font-weight: bold;
  margin-top: 5px;
  max-height: 75px;
}
.close-button {
  flex: 1;
  border: none;
  border-radius: 50%;
  color: red;
  background-color: black;
  max-width: 40px;
  max-height: 40px;
}
.column-three {
  display: flex;
  margin: 10px;
  justify-content: center;
}
.price {
  flex: 6;
  text-align: center;
}
.total {
  flex: 6;
  text-align: center;
}
.column-four {
  display: flex;
  justify-content: center;
  margin-bottom: 5px;
}
.minus {
  max-width: 40px;
}
.plus {
  max-width: 40px;
}
.js-payment-modal {
  justify-content: center;
  background-color: #000000aa;
  width: 100vw;
  height: 10000rem;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 2;
  padding-top: 100px;
}
.main-payment-modal {
  background-color: rgb(36, 35, 35);
  animation: appear 0.5s;
  border-radius: 10px;
  max-width: 340px;
  max-height: 340px;
  padding: 20px;
  margin: auto;
  margin-top: 50px;
  backdrop-filter: blur(10px);
  color: white;
  opacity: 80%;
}
.payment-title {
  color: red;
  text-align: center;
  width: 320px;
}
.js-gtotal_mod {
  font-family: "Orbitron", sans-serif;
  font-weight: bolder;
}
.js-change-modal {
  justify-content: center;
  background-color: #000000aa;
  width: 100vw;
  height: 5000rem;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 2;
  padding-top: 100px;
}
.main-change-modal {
  background-color: rgb(36, 35, 35);
  animation: appear 0.5s;
  border-radius: 10px;
  max-width: 340px;
  max-height: 340px;
  padding: 20px;
  margin: auto;
  margin-top: 50px;
  backdrop-filter: blur(10px);
  color: white;
  opacity: 80%;
}
.js-gtotal_change {
  font-weight: bolder;
  font-family: "Orbitron", sans-serif;
}
.js-payment-result {
  font-weight: bolder;
  font-family: "Orbitron", sans-serif;
}
.js-change {
  font-weight: bolder;
  font-family: "Orbitron", sans-serif;
}
.close-change-modal {
  text-align: center;
}
@media screen and (max-width: 1560px) {
  .raw-items {
    max-height: 13rem;
    max-width: 13rem;
  }
}
@media screen and (max-width: 1470px) {
  .date {
    flex: 7;
  }
}
@media screen and (max-width: 1368px) {
  .raw-items {
    max-height: 12rem;
    max-width: 12rem;
  }
}
@media screen and (max-width: 1360px) {
  .date {
    flex: 6;
  }
}
@media screen and (max-width: 1272px) {
  .raw-items {
    max-height: 11rem;
    max-width: 11rem;
  }
}
@media screen and (max-width: 1245px) {
  .date {
    flex: 5;
  }
}
@media screen and (max-width: 1130px) {
  .date {
    flex: 4;
  }
  .items {
    width: 120px;
  }
  .card-body {
    padding-left: 2rem;
  }
}
@media screen and (max-width: 1080px) {
  .raw-items {
    max-height: 10rem;
    max-width: 10rem;
  }
}
@media screen and (max-width: 1012px) {
  .date {
    flex: 3;
  }
  .raw-items {
    max-height: 9rem;
    max-width: 9rem;
  }
}
@media screen and (max-width: 920px) {
  .raw-items {
    max-height: 8rem;
    max-width: 8rem;
  }
  .date {
    display: none;
  }
  .time {
    text-align: end;
  }
  .items-title {
    justify-content: end;
  }
}
@media screen and (max-width: 790px) {
  .raw-items {
    max-height: 7rem;
    max-width: 7rem;
  }
  .date {
    display: none;
  }
  .time {
    text-align: end;
  }
}
@media screen and (max-width: 720px) {
  .raw-items {
    max-height: 6rem;
    max-width: 6rem;
  }
  .items {
    width: 100px;
  }
  .column-one-items {
    padding: 0;
    margin-top: 10px;
  }
  .card-body {
    padding: 0;
    margin: -10px;
  }
  .card {
    margin-bottom: 1rem;
  }
  .js-items {
    background-color: black;
  }
}
@media screen and (max-width: 690px) {
  .pos {
    display: none;
  }
  .items {
    width: 90px;
  }
  .card-body {
    padding-left: 0;
  }
}
@media screen and (max-width: 600px) {
  .raw-items {
    max-height: 5rem;
    max-width: 5rem;
  }
}
@media screen and (max-width: 552px) {
  .time {
    display: none;
  }
  .js-items-count {
    text-align: start;
  }
  .raw-items {
    max-height: 4.5rem;
    max-width: 4.5rem;
  }
  .column-four {
    padding-right: 5px;
  }
  .items-title {
    justify-content: end;
  }
}
@media screen and (max-width: 535px) {
  .raw-items {
    max-height: 9rem;
    max-width: 9rem;
  }
  .arrowR {
    display: block;
  }
  .product {
    display: none;
  }
  .app-name {
    display: none;
  }
}
@media screen and (max-width: 460px) {
  .raw-items {
    max-height: 8rem;
    max-width: 8rem;
  }
  .arrowR {
    display: block;
  }
  .product {
    display: none;
  }
  .app-name {
    display: none;
  }
}
@media screen and (max-width: 405px) {
  .raw-items {
    max-height: 6rem;
    max-width: 6rem;
  }
  .arrowR {
    display: block;
  }
  .items-title {
    text-align: end;
    justify-content: end;
  }
  .product-card {
    display: flex;
    margin-bottom: 1rem;
    border: 0.5px solid darkgray;
    background-color: black;
    border-radius: 10px;
    margin: 10px;
  }
  .column-one {
    display: flex;
  }
  .product-card img {
    flex: 1;
    width: 100px;
    height: 100px;
    border-radius: 5px;
    margin-top: 5px;
    margin-left: 5px;
  }
  .column-two-2 {
    display: flex;
    justify-content: center;
  }
  .description {
    text-align: center;
    flex: 2;
    color: white;
    font-weight: bold;
    margin-top: 5px;
    max-height: 75px;
  }
  .close-button {
    flex: 2;
    border: none;
    border-radius: 50%;
    color: red;
    background-color: black;
    max-width: 40px;
    max-height: 40px;
  }
  .column-three {
    display: flex;
    justify-content: center;
  }
  .price {
    flex: 6;
    text-align: center;
  }
  .total {
    flex: 6;
    text-align: center;
  }
  .column-four {
    display: flex;
    justify-content: center;
    margin-bottom: 5px;
  }
}

    </style>
   <nav class="navbar">
        <div class="navbar-container">
            <div class="user-info">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="user-image" src="<?= auth('image')?>">
                    <span class="user-name"><?= strtoupper(auth('name'))?></span>
                </a>
                    <div class="dropdown-menu">
                            <!-- <a href="#" class="dropdown-item">My Profile</a> -->
                            <!-- <a href="index.php?pg=daily-record" class="dropdown-item">Transactions</a> -->
                            <a class="dropdown-item" onclick="POS()">POS</a>
                            <button href="" type="button" class="dropdown-item" onclick="logout()">Log Out</button>
                    </div>
            </div>
            <div class="app-name">
                    <img class="logo-image" src="assets/img/idatsLogo.png" alt="Logo">
                    <h4 class="appName"><?=esc(APP_NAME)?> <span class="pos">(Raw Items POS)</span></h4>
            </div>
            <div class="total-amount">
                <h1 class="js-gtotal">0.00</h1>   
            </div>
        </div>
    </nav>
    
<div class="container-fluid">
        <div class="items">
            <div class="row">
                <div class="input-group">
                    <input onkeypress="check_for_enter_key(event)" value="" oninput="search_item(event)"  type="text"  accesskey="z" class="form-control ms-3 js-search border-primary mb-3" onclick="this.select()" placeholder="Search product" aria-label="Username" aria-describedby="basic-addon1" autofocus>
                    <span class="input-group-text bg-dark text-light" id="basic-addon1"><i onclick="arrowR_command()" class="arrowR text-xl text-danger fas fa-solid fa-arrow-right mb-3"></i></span>
                </div>
                <div class="js-products" onclick="add_item(event)">
                </div>
            </div>  
        </div>
        <div class="product">
            <div class="product-navbar">
                <i onclick="arrowL_command()" class="arrowL text-danger fas fa-solid fa-arrow-left me-2 mt-2 fw-bold"></i>
                <h4 class="items-title">ITEMS:</h4>
                <h4 class="js-items-count">0</h4>
                <h5 class="date"><?= date('F j, Y')?></h5>
                <h5 class="time" id="clock"></h5> 
            </div>
            <div class="js-items"></div>
            <div class="col-sm-12 p-3">
                <div class="row"><button onclick="show_modal('payment-modal')" accesskey="x" class="col-sm-12 btn btn-success mb-2 float-end p-4">Check-out</button></div> 
                <div class="row"><button onclick="clear_all()" class="col-sm-12 btn btn-warning mb-2 me-5 p-4">Clear-all</button></div>
                <!-- <div class="row"><button onclick="POS()" class="col-sm-12 btn btn-primary p-4">Go to POS</button></div> -->
            </div>            
        </div>
 </div>
 
     <!--payment-modal start-->
     <div role="close-button" onclick="hide_modal(event,'payment-modal')" class="js-payment-modal d-none">
         <div class="main-payment-modal">
            <div class="row-sm-12 d-flex">
                <h3 class="payment-title"><strong>SUMMARY</strong></h3>
            </div>
                <div class="row d-flex">
                    <p class="col text-left text-white mt-1">TOTAL-COST:</p><h3 class="js-gtotal_mod col text-center text-success"></h3>
                </div>
                <div class="row d-flex">
                    <p class="col text-left text-white mt-1">TOTAL-ITEMS:</p><h3 class="js-items-total col text-center text-success"></h3>
                </div>
                <div class="row d-flex">
                    <p class="col text-left text-white mt-1">TOTAL-COUNT:</p><h3 class="js-items-pcs col text-center text-success"></h3>
                </div>
                <div class="row d-flex mb-3">
                        <input onkeyup ="enter_checkout(event)" class="js-payment-input form-control col text-white" type="hidden"  placeholder="Enter amount" name="">
                </div>
                <button role="close-button" onclick="checkout(event);rendered_success()" class="js-change-modal-close btn btn-primary js-render col-12">Proceed</button>       
            </div>
    </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    </body>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/raw-pos.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- data-tables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/table.js"></script>
    <script src="assets/js/clock.js" type="text/javascript"></script>

</html>