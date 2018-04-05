 <?php
// Create connection
$connect = mysqli_connect("localhost","root", "", "hygiene");
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//echo $_GET['userid'];
//exit();
// sql to delete a record
//$sql = "DELETE FROM data INNER JOIN emailsupp ON emailsupp.email= data.email";
$sql= "DELETE data FROM `data` inner join emailsupp on emailsupp.email= data.email";

if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $connect->error;
}

$connect->close();
?> 


