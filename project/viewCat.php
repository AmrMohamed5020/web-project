<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Acculife</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/acclg-removebg-preview.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Saturday - Thursday, 8AM to 12AM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +020 1096 8052 05
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="assets/img/out5-removebg-preview.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">categories</a></li>
          <li>
            <a type="button"  class="nav-link scrollto"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              All Products
            </a>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" onMouseOver="this.style.color='red'"
          onMouseOut="this.style.color='#626262'" href="functions/logout.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#contact" class="appointment-btn scrollto"><span class="d-none d-md-inline">Reach</span> US</a>

    </div>
  </header>
  <!-- End Header -->

  <br><br><br><br><br><br>

  <?php

  ?>
  <table class="table table-hover table-bordered table-spriped">
         <thead style="color: #FFFFFF; background-color:#5FAB0E;">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>PRICE</th>
                 <th>SALE</th>
                 <th>CATEGORIES</th>

             </tr>
         </thead>
         <tbody>
         <?php
                include 'functions/connect.php';
                $id = $_GET['id'];
                $selectprod = "SELECT * FROM products WHERE $id = cat_id";
                $queryprod = $conn -> query($selectprod);
                foreach($queryprod as $product){
            ?>
            <tr>
                <td><?=$product['id'] ?></td>
                <td><?=$product['name'] ?></td>
                <td><?=$product['price'] ?></td>
                <td><?=$product['sale'] ?></td>
                <td>
                    <?php
                        $cat_id = $product['cat_id'] ;
                        $selectCat = "SELECT name FROM cate WHERE id = $cat_id";
                        $queryCat = $conn -> query($selectCat);
                        $category = $queryCat -> fetch_assoc();
                        echo $category['name'];
                    ?>
                </td>
             </tr>
             <?php } ?>
         </tbody>
        </table>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</script>

</body>

</html>