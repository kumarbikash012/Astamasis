<?php

include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');
?>

<div class="content-wrapper">

<!-- user pop up Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action= "handleloggedin.php" method="post">
      <form action="code.php" method="post">
      <div class="modal-body">
      <!-- <div class="form-group">
        <div class="label">Name</div>
        <input type="text" name= "name" class="form-control" placeholder= "Name">
      </div> -->
      <div class="form-group">
        <div class="label">E-Mail id</div>
        <input type="email" id= "email" name= "email" class="form-control" placeholder= "Email">
      </div>
      <!-- <div class="form-group">
        <div class="label">Phone Number</div>
        <input type="text" name= "phone" class="form-control" placeholder= "Phone Number">
      </div> -->
      <div class="form-group">
        <div class="label">password</div>
        <input type="password" id= "password" name= "password" class="form-control" placeholder= "password">
      </div>
      <!-- <div class="form-group">
        <div class="label">conform password</div>
        <input type="password" name= "SignupcPassword" class="form-control" placeholder= "password">
      </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="Submit" name= "addUser" class="btn btn-primary">Login</button>
      </div>
      </form>
      </form>
    </div>
  </div>
</div>


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    

    
   
<!-- <?php
// if(isset($_SESSION['status'])){
//   echo"<h4>". $_SESSION['status'] ." </h4>";
//   unset($_SESSION['status']);
// }
?> -->
       <!-- /.card -->
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Log In</h3>
                  <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Login</a>
                
              </div>  
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone no.</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
    </tbody>
    </table>
       </div>
      </div>
      </div>
</div>
<?php
include('include/footer.php');
?>