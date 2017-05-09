<?php

session_start();

//if(!isset($_SESSION['ID'])){
    //header('Location: add_db.php');
//}

?>

<!DOCTYPE html>

<html>

	<head>
		<title>Contacts Details:</title>
		 <style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 22px 22px;
    text-decoration: none;
}

li a:hover, .home:hover .dropbtn {
    background-color: red;
}

li.home {
    display: inline-block;
}

.home-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.home-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.home-content a:hover {background-color: #f1f1f1}

.home:hover .home-content {
    display: block;
}


</style>


	</head>

	<body background="img.jpg">
  <font size="5">
<ul>
  
  <li class="home">
    <a href="index.php" class="dropbtn">Home</a>
    <div class="home-content">
      <a href="Login_system2.php">Login</a>
      <a href="#">Logout</a>
      <a href="#">Registration</a>
    </div>
  </li>
</ul>
</font>

<font color="white">
<h1>Online address Book</h1>
</font>






         <center>
            <font color="black">
		<table border="5px";align="center"; bgcolor="green"cellpadding="30px";>
     				    <thead>
     				     <tr>
     				     	<th>Name</th>
                            <th>ID</th>
     				     	<th>Address</th>
                            <th>Email</th>
                            
     				     </tr>
     				    </thead>
     				    <tbody>
         <?php

         $server = "localhost";
		$username = "root";
		$pswd = "";
		$dbName="project2";
		$con = mysqli_connect($server,$username,$pswd, $dbName) or die();
         //$id = $_SESSION['ID'];

         	//$sql = "SELECT * FROM about WHERE ID='$id'";
              $sql = "SELECT* FROM tabledb ";
     		$res = mysqli_query($con, $sql);
    
     		while($row=mysqli_fetch_assoc($res)){
     			printf(" 
     				    <tr>
     				    	<td style='border:1px solid red'>%s</td>
     				    	<td style='border:1px solid red'>%s</td>
                            <td style='border:1px solid red'>%s</td>
                             <td style='border:1px solid red'>%s</td>
                            
     				    </tr>
     				    
     				", $row['Name'],$row['ID'],$row['Address'],
                
                    $row['Email']); 
                
     		}


         ?>

         </tbody>


    </table>
<font color="Black" size="5">
    <div style="position:absolute;left:490px;color:black;" >

    <table border="0px";align="center"; bgcolor="cyan"cellpadding="10px";>
        <tr>
            <td style='border:1px solid red'>
    <a href="add.php">AddContact</a>
    </td>
    <td style='border:1px solid red'>
    <a href="update.php">Update</a></td>
    <td style='border:1px solid red'>
    <a href="delete.php">Delete</a>
</td>
</tr>
</table>
    </font>
</div>

</font>

</center>


</body>

</html>