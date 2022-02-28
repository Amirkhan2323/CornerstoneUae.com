<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.scss">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Dashboard</title>
</head>
<body style="background-color: #34d0eb;" >
    <?php
    if(isset($_SESSION['username']))
    {
      
    }
    else
    {
        header('location:login.php');
    }

    ?>
    <a href="Logout.php">
    <button style="margin-left:400px; margin-top:10px; height:50px; width:80px;" class="btn btn-primary">logout</button>
</a> 


         <?php 
	

	function display()
	{
		global $con;
		$query ="SELECT * FROM `contact`";
		$run = mysqli_query($con, $query);
        if ($run == TRUE) {
			?>
<div class="table-users">
   <div class="header"></div>
   <center>
   <h1>Contact Details</h1>
   </center>
   <table border="2px">
      <tr  style="background-color: #ebd534;">
   
         <th style="background-color: #e81e13; font-size:larger">NAME</th>
         <th style="background-color: #34a2eb;  font-size:larger">EMAIL</th>
         <th style="background-color:  #a234eb;  font-size:larger">SUBJECT</th>
         <th style="background-color: #13e888;  font-size:larger" width="230">MESSAGE</th>
      </tr>
      <?php
			
			while ( $data = mysqli_fetch_assoc($run)) {
				?>
      <tr style="border-color:black;">
       
         <td  style="background-color: #e81e13; color: white; font-size:20px"><?php echo $data['name'];
							   ?></td>
         <td style="background-color: #34a2eb; color: white;  font-size:20px"><?php echo $data['email'];
							    ?></td>
         <td style="background-color: #a234eb; color: white;  font-size:20px"><?php echo $data['subject'];
							    ?></td>
         <td style="background-color: #13e888; color: white;  font-size:20px"><?php echo $data['message'];
							   echo "<br>"; ?></td>
      </tr>
      <?php
			}
			?>
   </table>
</div>

<?php
			}
			?>
			</table>
			<?php

		}
     
	
 ?>

 		<?php  
 			display();
 		?>
         <br>