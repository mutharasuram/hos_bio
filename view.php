<?php error_reporting("0");
include("db.php");


?>
<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
include('header.php');


?> 
  <!-- ======= Header ======= -->
  <!-- End Header -->

<!-- End Sidebar-->

  <main id="" class="container-fluid">

    <div class="pagetitle">
      <h1></h1>
      <nav>
        
      </nav>
    </div><!-- End Page Title -->
    <br><br><br><br>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
       

          <div class="card">
            <div class="card-body">
<?php
            $id = $_POST['id'];
            $query1 = "SELECT * FROM `patient_bio` where `id`='$id'";

            $result1 = mysqli_query($conn, $query1);  
            $row1 = mysqli_fetch_assoc($result1);
          $name=$row1['name'];
          $image=$row1['image'];
          $figerimg=$row1['figerimg'];
          $finger=$row1['finger'];
            ?>
             <center> <h4 class="card-title"><?php echo $name; ?></h4></center>
             <?php


            ?>
              <div class="container">
                <div class="row">
                        <div class="col-sm">
                        <img class="img-circle" src="<?php echo $image; ?>"width="300" height="300" style="float:right"/>

                        </div>

                        <div class="col-sm">
                        <img class="img-circle" src="<?php echo $figerimg; ?>"width="150" height="150"style="border:black solid 1px"/><br><br>
                        <p><b><?php echo $finger; ?></b></p>

                        </div>

                </div>
</div><br>

             <center> <form action="delete.php"method="post">
                            
                            
                            <input name="id"value="<?php echo $id; ?> "hidden >
                            
                            
                            <button class="btn btn-danger"type="submit">Delete</button>
                    </form>
</center>




<br>
<br>

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <!-- End Footer -->

 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>