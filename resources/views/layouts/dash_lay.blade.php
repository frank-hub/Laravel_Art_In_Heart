<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Art In Heart | Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include('navbar.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <?php
              include '../login/conn.php';
              $count = mysqli_query($connecting ,"SELECT COUNT('id') FROM artwork_details WHERE medium = 'Water Paints'");
              $water = mysqli_fetch_array($count);
              ?>
              <div class="mr-5"><?php echo $water['0'] ?> Water Paints</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <?php
              include '../login/conn.php';
              $count = mysqli_query($connecting ,"SELECT COUNT('id') FROM artwork_details WHERE medium = 'Acrylics'");
              $acrylics = mysqli_fetch_array($count);
              ?>
              <div class="mr-5"><?php echo $acrylics['0'] ?> Acrylics</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <?php
              include '../login/conn.php';
              $count = mysqli_query($connecting ,"SELECT COUNT('id') FROM artwork_details WHERE medium = 'Oils'");
              $oils = mysqli_fetch_array($count);
              ?>
              <div class="mr-5"><?php echo $oils['0'] ?> Oils</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <?php
              include '../login/conn.php';
              $count = mysqli_query($connecting ,"SELECT COUNT('id') FROM artwork_details WHERE medium = 'Mixed Mediums'");
              $mixed = mysqli_fetch_array($count);
              ?>
              <div class="mr-5"><?php echo $mixed['0'] ?> Mixed Mediums</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Card Columns Example Social Feed-->
          
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Art Work Uploaded</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Mediums</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Posted date</th>
                  <th>Image</th>
                  <th>##</p>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Mediums</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Posted date</th>
                  <th>Image</th>
                  <th>##</p>
                </tr>
              </tfoot>
              <tbody>
                <?php 
                            include '../login/conn.php';
                            $select = "SELECT * FROM `artwork_details` ORDER BY id DESC";
                            $exc_select = mysqli_query($connecting,$select)or die(mysqli_error($connecting));

                            while ($results = mysqli_fetch_array($exc_select)) {
                              // $id = $results['id'];
                              ?>
                             <tr>
                              <td><?php echo $results['name']; ?></td>
                              <td><?php echo $results['medium']; ?></td>
                              <td><?php echo $results['descr']; ?></td>
                              <td><?php echo $results['price']; ?></td>
                              <td><?php echo $results['posted_date']; ?></td>
                              <td><img src="uploads/<?php echo $results['image']; ?>" title="<?php echo $results['image']; ?>" alt="<?php echo $results['image']; ?>" height="30px"></td>
                              <td>
                                    <div class="row mx-auto">
                                      <button type="button" method="post" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter" name="<? echo $results['id']; ?>" style="padding: 2px;margin: 0px;margin-right:5px;">
                                          <i class="fa fa-eye"></i><span>
                                             
                                          </span>
                                      </button>
                                      <button class="delete btn btn-sm btn-danger" id='del_<?= $results['id'] ?>' style="padding: 2px;margin: 0px;margin-left:5px;">
                                          <i class="fa fa-trash"></i><span>
                                              
                                          </span>
                                      </button>
                                    </div>
                              </td>
                            </tr>
                            <?php }  ?>
              </tbody>
            </table>
          </div>
        </div>
        <?php $last= mysqli_query($connecting , "SELECT posted_date FROM artwork_details ORDER BY id DESC LIMIT 1");
           $updated = mysqli_fetch_array($last);
        ?>
        <div class="card-footer small text-muted">Updated on <?php echo $updated['posted_date']; ?></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website <?php echo date('Y')?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../login">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    
    <script type="text/javascript">

        $(document).ready(function(){

  // Delete 
  $('.delete').click(function(){
    var el = this;
    var id = this.id;
    var splitid = id.split("_");

    // Delete id
    var deleteid = splitid[1];
 
    // Confirm box
    bootbox.confirm("Are you sure want to delete?", function(result) {
 
       if(result){
         // AJAX Request
         $.ajax({
           url: 'delete.php',
           type: 'POST',
           data: { id:deleteid },
           success: function(response){

             // Removing row from HTML Table
             $(el).closest('tr').css('background','tomato');
             $(el).closest('tr').fadeOut(800, function(){ 
               $(this).remove();
             });

           }
         });
       }
 
    });
 
  });
});
    </script>
  </div>
</body>

</html>
