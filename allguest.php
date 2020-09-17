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
            <h1 class="m-0 text-dark"></h1>
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

  
          <div class="">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"></span>
               

                <div class="progress">
                  <div class="progress-bar" style="width: 7%"></div>
                </div>
                <span class="progress-description">
                <h5><b>All Guest Status</b></h5> 
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>  


    <!-- DATA-TABLE -->
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bookings Data Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Guest Name</th>                 
                  <th>Room Type</th>  
                  <th>From</th>             
                  <th>To</th>             
                  <th>Room Number</th>             
                  <th>Status</th>             
                  <th>Cancel Booking</th>             
                  <th>Signout</th>             
              
                </tr>
                </thead>
    <?php 
    $bkg_tbl = $conn->query("SELECT * FROM bookings");    
    
    ?>

            <?php while($bkg_row = $bkg_tbl->fetch_assoc()): ?>
                <tbody>
                    <td><?php echo $bkg_row['Bid']; ?></td>
                    <td><?php

                        $guest_name = $bkg_row['guestid'];

                          $guest_tbl = $conn->query("SELECT * FROM guest WHERE guestid = $guest_name");

                          $guest_row = $guest_tbl->fetch_assoc();

                          echo $guest_row['gname'];

                    
                    ?></td>               
                    <td>
                      <?php

                        $room_type = $bkg_row['roomtypeid'];

                        $guest_tbl = $conn->query("SELECT * FROM roomtype WHERE roomtypeid = $room_type");

                        $guest_row = $guest_tbl->fetch_assoc();

                        echo $guest_row['roomtype_desc'];


                      ?>
                    </td>  
                    <td><?php echo $bkg_row['from'];?></td>           
                    <td><?php echo $bkg_row['to']; ?></td>           
                    <td><?php echo $bkg_row['rno']; ?></td>           
                   <td>
                    <?php 
                      if($bkg_row['status'] == 0){
                       
                        echo "Booking Requested";
                      
                      }elseif($bkg_row['status'] == 1){

                        echo "booking confirmed";

                      }elseif($bkg_row['status'] == 2){

                        echo "booking Cancelled";

                      }elseif($bkg_row['status'] == 3){

                        echo "Occupied";

                      }elseif($bkg_row['status'] == 4){

                        echo "Completed";
                      }

                    ?>
                    </td>
                    <td>
                        <?php
                        
                         if($bkg_row['status'] == 1): ?>

                          <a class="btn btn-danger btn-sm" href="code.php?cancel_booking=<?php echo $bkg_row['Bid']; ?>"> <i class="fas fa-trash"></i>Cancel</a>

                         <?php elseif($bkg_row['status'] == 2): ?>                      

                          <h6>Cancelled By Guest</h5>
                         <?php endif; ?>
                    </td>
                    <td>
                        <?php
                        
                         if($bkg_row['status'] == 1): ?>

                          <a class="btn btn-primary btn-sm" href="code.php?sign_out=<?php echo $bkg_row['Bid']; ?>"> <i class="fas fa-trash"></i>Complete Stay</a>

                         <?php elseif($bkg_row['status'] == 4): ?>                      

                          <h6>Stay completed</h5>
                         <?php endif; ?>
                    </td>
               </tbody>
            <?php endwhile; ?>
                 
</div>
</div>






        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  


  <?php include('includes/footer.php'); ?>