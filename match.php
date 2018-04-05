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
$sql = "SELECT data.email FROM data INNER JOIN emailsupp ON emailsupp.email= data.email";
//$sql= "DELETE data FROM `data` inner join emailsupp on emailsupp.email= data.email";


if ($connect->query($sql) === TRUE) {
    echo "Record Match successfully";
} else {
    echo "Error match record: " . $connect->error;
}


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // echo "<br> id: ". $row["id"].  " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";

 echo "<br> id; ". $row["id"]." email; ". $row["email"] . " - Name; ". $row["fname"]. " Last;" . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}














$connect->close();
?> 


