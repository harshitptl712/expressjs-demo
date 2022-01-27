<?php
    session_start();
    require './class/at-class.php';
    
    if($_POST)
    {
        $requirement_date = $_POST['requirement_date'];
        $ngo_id = $_POST['ngo_id'];
         $requirement_details = $_POST['requirement_details'];
          $requirement_status = $_POST['requirement_status'];
         
          
          $q = mysqli_query($connection,"insert into tbl_requirement (requirement_date,ngo_id,requirement_details,requirement_status) values ('{$requirement_date}','{$ngo_id}','{$requirement_details}','{$requirement_status}')") or die(mysqli_error($connection));
        
          if($q)
          {
              echo "<script>alert('Record Added');</script>";
          }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Find My Worker</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <?php
       include './theme-part/top-menu.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
      include './theme-part/sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Requirement Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Requirement Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Requirement Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                     <label>Date:</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="requirement_date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ngo Id</label>
                    <input type="number" class="form-control" name="ngo_id" id="exampleInputEmail1" placeholder="Enter Ngo Id" required>
                  </div>  
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Details</label>
                    <input type="text" class="form-control" name="requirement_details" id="exampleInputEmail1" placeholder="Enter Detail" required>
                  </div>
                     
                <div class="form-group">
                        <label for="exampleInputname1">Status</label>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" value="open" name="requirement_status">
                          <label for="customRadio1" class="custom-control-label">Open</label>
                        </div>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" value="close" name="requirement_status">
                          <label for="customRadio2" class="custom-control-label">Close</label>
                        </div>
                        </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
         
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
        include './theme-part/footer.php';
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>


