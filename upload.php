<?php 


// Create connection
$connect = mysqli_connect("localhost","root", "", "project");
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//start

			if(isset($_POST['submit']))
			{
				if($_FILES['file']['name'])
				{

					$filename = explode('.',$_FILES['file']['name']);
					if($filename[1] == 'csv')
					{
					$handle = fopen($_FILES['file']['tmp_name'], "r");
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
					 {

						$item1 = mysqli_real_escape_string($connect,$data[0]);
						$item2 = mysqli_real_escape_string($connect,$data[1]);
                        $item3 = mysqli_real_escape_string($connect,$data[2]);
						$item4 = mysqli_real_escape_string($connect,$data[3]);
						$item5 = mysqli_real_escape_string($connect,$data[4]);
						

						$sql="INSERT into csvdata(email,fname,lname,ip,state) values('$item1','$item2','$item3','$item4','$item5')";
						mysqli_query($connect,$sql);
					}
					fclose($handle);
					print "Import done";
                 
					}
				}
			}
			


//end
?>
<html>
<head>

</head>
<body align = "center">
<div align="left" style="background-color:lightblue; height:40%; width:25%;">
<form method='POST' enctype='multipart/form-data'>
	 <p> <input type='file' name='file' /> </p>
	 <p> <input type='submit' name='submit' value='import' /></p>
</form>

</div>
</body>

</html>
