<!DOCTYPE html>
<html>
<head>
<title>update file</title>
</head>

<body>

<?php



if($_POST){

$server = "localhost";
$username = "root";
$pswd = "";
$dbName="project2";
$con = mysqli_connect($server,$username,$pswd,$dbName);
//$con = mysql_connect("mysql.cis.ksu.edu","cis_id","password");

if($con){
$ID=$_POST['id'];
$sql = "UPDATE tabledb SET `ID`='13045405' WHERE ID= $ID";

if (mysqli_query($con, $sql)){
//echo "Congratulation...Registration successfull!!!!!!!";
  header('location:update.php');

  }

else
{

	echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
}

else{
	echo "Connection error!!";
}

}

else{
	echo "Not posted!!";
}

?>





</body>

</html>