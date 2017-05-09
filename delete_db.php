<!DOCTYPE html>
<html>
<head>
<title>Delete file</title>
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
$sql = "DELETE FROM tabledb WHERE ID = $ID";

if (mysqli_query($con, $sql)){
//echo "Congratulation...Registration successfull!!!!!!!";
  header('location:delete.php');

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