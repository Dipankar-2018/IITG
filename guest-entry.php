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
            <h1 class="m-0 text-dark">Guest Data Entry</h1>
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
                <h3 class="card-title">Insert Guest Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="code.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="userName">Guest Name</label>
                    <input type="text" name="gname" class="form-control" id="userName" placeholder="Enter Name" required style="text-transform:uppercase">
                  </div>
                  <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tell" name="gphone" class="form-control" id="phoneNumber" placeholder="Enter Phone Number" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="gemail" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>

                  <!-- <div class="form-group">
                        <label>Room Type</label>
                        <select class="custom-select">
                          <option>Single with AC</option>
                          <option>Single without AC</option>
                          <option>Double with AC</option>
                          <option>Double without AC</option>
                          <option>Suit</option>
                        </select>
                      </div>  
                      
                  <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                           <label for="dateFrom">Check-in Date</label>
                            <input type="date" class="form-control" id="dateFrom">
                         </div>

                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                           <label for="dateEnd">Check-out Date</label>
                            <input type="date" class="form-control" id="dateEnd">
                         </div>


                      </div>

                  </div>          -->
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submi" name="submit_guest" class="btn btn-primary">Submit</button>
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