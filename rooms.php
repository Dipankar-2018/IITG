<?php
session_start();
$user_profile =  $_SESSION['user_name'];
if($user_profile == true)
{

}
else
{
  header('location:login.php');
}



include('includes/topnav.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Room Status Entry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">   
        <!-- Main row -->
        <div class="row">

        <div class="col-md-12">

        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Initial Room Data Entry</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="code.php" method="POST">
                <div class="card-body">   
                <div class="form-group">
                <label>Room Number</label>
                 <input type="number" name="room_number" class="form-control" placeholder="Enter Room number">
                </div>              
                  <div class="form-group">
                        <label>Room Type</label>
                          <select class="custom-select" name="category" required>
                          <option value="">Select Category</option>
                          <option value="1">Single with AC</option>
                          <option value="5">Single without AC</option>
                          <option value="2">Double with AC</option>
                          <option value="6">Double without AC</option>
                          <option value="7">Suit</option>
                        </select>
                      </div>      
                      <div class="form-group">
                        <label>Status</label>
                          <select class="custom-select" name="status" required>
                          <option value="">Select Category</option>
                          <option value="empty">Empty</option>
                          <option value="booked">Booked</option>                         
                        </select>
                      </div>                       
                             
            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit_room">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>







        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <?php include('includes/footer.php'); ?>