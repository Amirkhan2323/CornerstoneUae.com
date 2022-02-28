<?php
include('connection.php');
session_start();

?>
<style>
    .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}

</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Admin Login Form</h2>
        
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="" method="post">

            <div class="text-center">
              <img src="img/bg-img/admin.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" name="username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="loginbtn">Login</button></div>
           
          </form>
        </div>

      </div>
    </div>
  </div>
  <?php
if(isset($_POST['loginbtn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from login where username = '$username' and password = '$password' ";
    $run = mysqli_query($con,$query);
    $totalrows = mysqli_num_rows($run);
    //echo $totalrows;
    if($totalrows == 1)
    {
        $_SESSION['username'] = $username;
        header('location:dashboard.php');
    }
    else
    {
      echo("<script>alert('username and password is incorrect')</script>");
    }

}
    ?>