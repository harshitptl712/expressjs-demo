<?php
    session_start();
    require './class/at-class.php';
    
    if($_POST)
    {
        $user_name = $_POST['user_name'];
        $user_gender = $_POST['user_gender'];
         $user_email = $_POST['user_email'];
          $user_password = $_POST['user_password'];
          $user_address = $_POST['user_address'];
          $user_mobile = $_POST['user_mobile'];
          
          $q = mysqli_query($connection,"insert into tbl_user (user_name,user_gender,user_email,user_password,user_address,user_mobile) values ('{$user_name}','{$user_gender}','{$user_email}','{$user_password}','{$user_address}','{$user_mobile}')") or die(mysqli_error($connection));
        
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
            <h1>User Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Form</li>
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
                <h3 class="card-title">User Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputname1">Name</label>
                    <input type="text" class="form-control" name="user_name" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div> 
                     <div class="form-group">
                        <label for="exampleInputname1">Gender</label>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" value="male" name="user_gender">
                          <label for="customRadio1" class="custom-control-label">Male</label>
                        </div>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" value="female" name="user_gender">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                        </div>
                        </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="user_password" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="user_address" id="exampleInputEmail1" placeholder="Enter Address" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="number" class="form-control" name="user_mobile" id="exampleInputEmail1" placeholder="Enter Mobile No." required>
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


