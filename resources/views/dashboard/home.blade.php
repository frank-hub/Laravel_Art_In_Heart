@extends('layouts.app')

@section('content')
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
                 
                  <div class="mr-5">22222 Water Paints</div>
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
                                  
                  <div class="mr-5">Acrylics</div>
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
                 
                  <div class="mr-5">22333 Oils</div>
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
                 
                  <div class="mr-5">455Mixed Mediums</div>
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
                     <tr>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Something</td>
                        <td>Somfe</td>
                        <td><img src="uploads/h" title="gh" alt="3" height="30px"></td>
                        <td>
                            <div class="row mx-auto">
                                <button type="button" method="post" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter" name="" style="padding: 2px;margin: 0px;margin-right:5px;">
                                    <i class="fa fa-eye"></i><span>
                                        
                                    </span>
                                </button>
                                <button class="delete btn btn-sm btn-danger" id='del' style="padding: 2px;margin: 0px;margin-left:5px;">
                                    <i class="fa fa-trash"></i><span>
                                        
                                    </span>
                                </button>
                            </div>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="card-footer small text-muted">Updated on </div>
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
              <small>Copyright © Your Website</small>
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
@endsection
