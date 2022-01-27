<?php
    session_start();
    require './class/at-class.php';
    
    if($_POST)
    {
        $worker_name = $_POST['worker_name'];
        $worker_details = $_POST['worker_details'];
         $worker_startdate = $_POST['worker_startdate'];
          $worker_email = $_POST['worker_email']; 
          $worker_phone = $_POST['worker_phone'];
           $worker_address = $_POST['worker_address'];
            $worker_password = $_POST['worker_password']; 
          
          $q = mysqli_query($connection,"insert into tbl_worker_master (worker_name,worker_details,worker_startdate,worker_email,worker_phone,worker_password,worker_address) values ('{$worker_name}','{$worker_details}','{$worker_startdate}','{$worker_email}','{$worker_phone}','{$worker_password}','{$worker_address}')") or die(mysqli_error($connection));
        
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
            <h1>Worker Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Worker Form</li>
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
                <h3 class="card-title">Worker Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputname1">Name</label>
                    <input type="text" class="form-control" name="worker_name" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div> 
                    
                     <div class="form-group">
                    <label for="exampleInputname1">Details</label>
                    <input type="text" class="form-control" name="worker_details" id="exampleInputEmail1" placeholder="Enter Details" required>
                  </div> 
                    
                     <div class="form-group">
                     <label>Date:</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="worker_startdate" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                     
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="worker_email" id="exampleInputEmail1" placeholder="Enter Email" required>
                  </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="number" class="form-control" name="worker_phone" id="exampleInputEmail1" placeholder="Enter Mobile No." required>
                  </div>  
                    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="worker_password" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="worker_address" id="exampleInputEmail1" placeholder="Enter Address" required>
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


