<?php 
include_once "dbConnection.php";
 session_start();
     if(isset($_POST['update_info']))
     {
     	$id=$_SESSION['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $query="UPDATE tabledb SET Name='$name',Address='$address',Email='$email' where ID='$id'";
        $query_result=mysqli_query($con,$query);
        if($query_result)
        {
            header('location: update.php');

        }
     }

     if(isset($_POST['update']))
		  {
		    $id=$_POST['id_name'];
		    $query="SELECT * from tabledb where ID='$id' ";
		    $query_result=mysqli_query($con,$query);
		    $row=mysqli_num_rows($query_result);
		    if($row==0)
		    {
		       
		     header('Location:update.php');
		    }
		    else {
		    	$_SESSION['id']=$id;
		        header('Location:updateme.php');
		    }
         }
?>