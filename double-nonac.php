<?php include('includes/topnav.php'); ?>

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
          <div class="info-box bg-gradient-danger">
              <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Double Without AC</span>
               

                <div class="progress">
                  <div class="progress-bar" style="width: 7%"></div>
                </div>
                <span class="progress-description">
                <h5><b>Guest Status</b></h5> 
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
                  <th>Status</th>             
                  <th>Leave Room</th>             
              
                </tr>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>
                        Dipankar Rabha
                    </td>               
                    <td>
                        Single with AC
                    </td>             
                   <td>
                        Occupied
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Signout</button>
                    </td>
                 
</div>
</div>






        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  


  <?php include('includes/footer.php'); ?>