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




include('includes/topnav.php'); 
error_reporting(0);



?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bookings Data</h1>
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

    <!-- ROOM STATUS QUERY -->
    <?php
    $room = $conn->query("SELECT * FROM `rooms`");
    
    $room_row = $room->fetch_assoc(); 
    ?>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">   
        <!-- Main row -->

        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-info">
              <span class="info-box-icon"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Single With AC</span>
               

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                
                </span>               
            
                Room Numbers:
                <?php $sac = $conn->query("SELECT * FROM rooms WHERE roomtypeid = 1");?>
                <div class="row">
                <?php  while($sac_row = $sac->fetch_assoc()): ?>

                  <?php if($sac_row['status'] == 'empty'): ?>
                        <div class="col-md-2 border border-white" style="background-color:#a4eb34; color:black">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>

                  <?php else: ?>
                    <div class="col-md-2 bg-danger ml-1 border border-white">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>
                  <?php endif; ?>
                

                        <?php endwhile; ?>
                </div>
                
            
                
              </div>
             
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box bg-gradient-success">
              <span class="info-box-icon"><i class="fa fa-user"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Single Without AC</span>              

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
               
                </span>
                Room Numbers:
                <?php $sac = $conn->query("SELECT * FROM rooms WHERE roomtypeid = 5");
                     
                ?>
                <div class="row">
                <?php  while($sac_row = $sac->fetch_assoc()): ?>

                  <?php if($sac_row['status'] == 'empty'): ?>
                        <div class="col-md-2 border border-white" style="background-color:#a4eb34; color:black">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>

                  <?php else: ?>
                    <div class="col-md-2 bg-danger ml-1 border border-white">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>
                  <?php endif; ?>
                

                        <?php endwhile; ?>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box bg-gradient-warning">
              <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Double with AC</span>              

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                 
                </span>
                Room Numbers:
                <?php $sac = $conn->query("SELECT * FROM rooms WHERE roomtypeid = 2");
                     
                ?>
                <div class="row">
                <?php  while($sac_row = $sac->fetch_assoc()): ?>

                  <?php if($sac_row['status'] == 'empty'): ?>
                        <div class="col-md-2 border border-white" style="background-color:#a4eb34; color:black">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>

                  <?php else: ?>
                    <div class="col-md-2 bg-danger ml-1 border border-white">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>
                  <?php endif; ?>
                

                        <?php endwhile; ?>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <!-- /.col -->
           <div class="col-md-2 col-sm-6 col-12">
            <div class="info-box bg-gradient-danger">
              <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Double without AC</span>              

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
            
                </span>
                Room Numbers:
                <?php $sac = $conn->query("SELECT * FROM rooms WHERE roomtypeid = 6");
                     
                ?>
                <div class="row">
                <?php  while($sac_row = $sac->fetch_assoc()): ?>

                  <?php if($sac_row['status'] == 'empty'): ?>
                        <div class="col-md-2 border border-white" style="background-color:#a4eb34; color:black">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>

                  <?php else: ?>
                    <div class="col-md-2 bg-danger ml-1 border border-white">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>
                  <?php endif; ?>
                

                        <?php endwhile; ?>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
                  
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-gradient-primary">
              <span class="info-box-icon"><i class="fas fa-briefcase"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Suit</span>               
                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
           
                </span>
                Room Numbers:
                <?php $sac = $conn->query("SELECT * FROM rooms WHERE roomtypeid = 7");
                     
                ?>
                <div class="row">
                <?php  while($sac_row = $sac->fetch_assoc()): ?>

                  <?php if($sac_row['status'] == 'empty'): ?>
                        <div class="col-md-2 border border-white" style="background-color:#a4eb34; color:black">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>

                  <?php else: ?>
                    <div class="col-md-2 bg-danger ml-1 border border-white">                        
                          <?php echo $sac_row['roomnumber']; ?>
                        </div>
                  <?php endif; ?>
                

                        <?php endwhile; ?>
                </div>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

<!-- SQL-FOR-BOOKING DATA -->
<?php 

$data = $conn->query("SELECT * FROM `guest`");



?>

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
                  <th>Guest Phone</th>
                  <th>Guest Email</th>
                  <th>Book Room</th>              
                </tr>
                </thead>
                <?php while($row = $data->fetch_assoc()):
                  
              
                  
                ?>
                <tbody>                
                    <td><?php echo $row['guestid']; ?></td>
                    <td>
                        <?php echo $row['gname']; ?>
                    </td>
                    <td>
                       <?php echo $row['gphone']; ?>
                    </td>
                    <td>
                        <?php echo $row['gemail']; ?>
                    </td> 
                    <td>
                    <?php 
                    $id = $row['guestid'];
                    $status_check = $conn->query("SELECT * FROM bookings WHERE guestid = $id");        

                    $status_row = $status_check->fetch_assoc();
                    
                    $guest_id = $status_row['guestid'];

                    if($id == $guest_id):
                    
                    ?>
                    <button disabled class="btn btn-success btn-sm" name="submit_booking" data-toggle="modal" data-target="#Modal"><i class="fa fa-check" aria-hidden="true"></i>Room Booked</button>
                    
                    <?php else: ?>
               
                     <button class="btn btn-primary btn-sm" name="submit_booking" data-toggle="modal" data-target="#Modal"><i class="fa fa-check" aria-hidden="true"></i> Confirm</button>
                     <?php endif; ?>
                     </td>        
            
                 </tbody>
                <?php endwhile;?>
</div>
</div>






        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  



  <!-- Modal -->
  <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="code.php" method="post">

          <div class="form-group">
            <label>Enter Guest ID</label>
             <input type="number" class="form-control" name="guestID">
          
          </div>
        
        <div class="form-group">   
        <label>Room Type</label>                 
                        <select class="custom-select" name="category">
                          <option value="">Select Category</option>
                          <option value="1">Single with AC</option>
                          <option value="5">Single without AC</option>
                          <option value="2">Double with AC</option>
                          <option value="6">Double without AC</option>
                          <option value="7">Suit</option>
                       </select>                                 
            </div>   
            <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                           <label for="dateFrom">Check-in Date</label>
                            <input type="date" class="form-control" id="dateFrom" name="dateFrom">
                         </div>

                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                           <label for="dateEnd">Check-out Date</label>
                            <input type="date" class="form-control" id="dateEnd" name="dateEnd">
                         </div>


                      </div>

                  </div> 
                  <div class="form-group">
                    <div class="form-group">
                      <label for="roomNumber">Enter Room Number</label>             
                       <input type="number" name="roomNumber" class="form-control">
                    </div>
                  
                  </div>
        
        
        
    



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="modal_submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script>





</script>


  <?php include('includes/footer.php'); ?>