@extends('layouts.app')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Art List</li>
            <li style="margin-left:45em; margin-top:0px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">ADD ART</button></li>
          </ol>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Art Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" enctype="multipart/form-data" action="">
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="artname" placeholder="Name of Art">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="medium" class="col-sm-2 col-form-label">Mediums</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="medium" name="medium">
                      <option selected disabled>** Select Medium **</option>
                      <option>Water Paints</option>
                      <option>Acrylics</option>
                      <option>Oils</option>
                      <option>Mixed Mediums</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="descr" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="descr" name="desc" placeholder="Description">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="price" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date" class="col-sm-2 col-form-label">Post Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="dop">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="image" class="col-sm-2 col-form-label">Art Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="artImage" placeholder="Upload Image">
                  </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    
          <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> Art </div>
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
                      <th>##</th>
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
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                        <td>Something here</td>
                        <td>Something Here</td>
                        <td><Something here</td>
                        <td>Something Here</td>
                        <td>Something Here</td>
                        <td>Something Here</td>
                    </tr>
                               
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
          <div class="container">
            <div class="text-center">
              <small>Copyright © Art In Heart 2018</small>
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
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>
      
      </div>
@endsection