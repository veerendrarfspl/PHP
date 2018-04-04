<?php
$servername = "localhost";
$username = "root"; 
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,'csvdata');


if(isset($_POST['submit'])){
if($_FILES['csv_data']['name']){

$arrFileName = explode('.',$_FILES['csv_data']['name']);
if($arrFileName[1] == 'csv'){
$handle = fopen($_FILES['csv_data']['tmp_name'], "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

$item1 = mysqli_real_escape_string($conn,$data[0]);
$item2 = mysqli_real_escape_string($conn,$data[1]);
$import="INSERT into tbl_csv(item1,item2) values('$item1','$item2')";
mysqli_query($conn,$import);
}
fclose($handle);
print "Import done";
}
}
}

?>