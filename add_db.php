<!DOCTYPE html>
<html>
<head>
<title>Add  file</title>
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
$Name = $_POST['name']; 
$ID = $_POST['id'];
$adres = $_POST['adrs'];
$Mail = $_POST['mail'];

 

//$sql="INSERT INTO information (Name)
$sql="INSERT INTO tabledb
VALUES ('$Name','$ID','$adres','$Mail')";

 

if (mysqli_query($con, $sql)){
  header('location:add.php');

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