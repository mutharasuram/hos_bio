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
              <h5 class="card-title"></h5>



              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                <?php
$sno=1;
$query = "SELECT * FROM `outpatient`";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $p_id=$row['patientid'];
    $query1 = "SELECT * FROM `patient_bio` where `patientid`='$p_id'";
    $result1 = mysqli_query($conn, $query1);  
    $row1 = mysqli_fetch_assoc($result1);
  $rr=$row1['id'];
?>

                  <tr>
                    <th scope="row"><?php echo $sno++; ?></th>
                    <td><?php echo $p_id=$row['patientid']; ?></td>
                    <td><?php echo $name=$row['patientname']; ?></td>
<?php if($rr==""){

?>
                    <td>
<form action="hospital.php" method="post">
    <input value="<?php echo $p_id; ?>"name="pid"hidden>
    <input value="<?php echo $name; ?>"name="name"hidden>
<input type="submit"class="btn btn-success"value="Verify">
</form>
                    </td>
                    <?php
}else{
    ?>
<td> <form action="view.php" method="post">
    <input value="<?php echo $rr; ?>"name="id"hidden>
    
<input type="submit"class="btn btn-primary"value="View">
</form> </td>
<?php
}
?>
                    
                  </tr>
                 <?php
}
?>
                </tbody>
              </table>



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
