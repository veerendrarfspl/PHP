<?php 

//if(isset($_POST['clean'])) {

//echo $cleann= $_POST['clean'];

//}


// Create connection
$connect = mysqli_connect("localhost","root", "", "hygiene");
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//start data

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
						

						$sql="INSERT into data(email,fname,lname,ip,state) values('$item1','$item2','$item3','$item4','$item5')";
						mysqli_query($connect,$sql);
					}
					fclose($handle);
					print "Import done";
                 
					}
				}
			}
			
//start email supp

			if(isset($_POST['esubmit']))
			{
				if($_FILES['efile']['name'])
				{
	
					$filename = explode('.',$_FILES['efile']['name']);
					if($filename[1] == 'csv')
					{
					$handle = fopen($_FILES['efile']['tmp_name'], "r");
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
					 {

						$item1 = mysqli_real_escape_string($connect,$data[0]);
						$item2 = mysqli_real_escape_string($connect,$data[1]);
                        $item3 = mysqli_real_escape_string($connect,$data[2]);
						$item4 = mysqli_real_escape_string($connect,$data[3]);
						$item5 = mysqli_real_escape_string($connect,$data[4]);
						

						$sql="INSERT into emailsupp(email,fname,lname,ip,state) values('$item1','$item2','$item3','$item4','$item5')";
						mysqli_query($connect,$sql);
					}
					fclose($handle);
					print "Import done";
                 
					}
				}
			}
			
//start domain supp

			if(isset($_POST['dsubmit']))
			{
				if($_FILES['dfile']['name'])
				{
	
					$filename = explode('.',$_FILES['dfile']['name']);
					if($filename[1] == 'csv')
					{
					$handle = fopen($_FILES['dfile']['tmp_name'], "r");
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
					 {

						$item1 = mysqli_real_escape_string($connect,$data[0]);
					
						

						$sql="INSERT into domain(domain) values('$item1')";
						mysqli_query($connect,$sql);
					}
					fclose($handle);
					print "Import done";
                 
					}
				}
			}
		//start md5 supp

			if(isset($_POST['mdsubmit']))
			{
				if($_FILES['mdfile']['name'])
				{
	
					$filename = explode('.',$_FILES['mdfile']['name']);
					if($filename[1] == 'csv')
					{
					$handle = fopen($_FILES['mdfile']['tmp_name'], "r");
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
					 {

						$item1 = mysqli_real_escape_string($connect,$data[0]);
						
						

						$sql="INSERT into md5(md5) values('$item1')";
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
<style>
         blink {
           color:#922B21;
           -webkit-animation: blink 1s step-end infinite;
           animation: blink 1s step-end infinite
         }
 
          @-webkit-keyframes blink {
          67% { opacity: 0 }
         }
 
         @keyframes blink {
         67% { opacity: 0 }
        }
      </style>
</head>
<body style="padding-left:90px;padding-top:80px;width:60%;height:100%;">
<div align="left" style="background-color:lightblue;padding-left:80px;padding-top:60px;width:60%;height:70%;">
<form method='POST' enctype='multipart/form-data'>
	<h1 align="center"> <blink>Hygiene Services</blink></h1>
	<p><br/><br/><br/>Data   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type='file' name='file' /> 
	<input type='submit' name='submit' value='import' /><br/><br/><br/><p>

<div style="background-color:#BDC3C7; width:100%;height:30%;">
	<p><br/><br/>email &nbsp; &nbsp; &nbsp;	<input type='file' name='efile' /> 
	 <input type='submit' name='esubmit' value='import' /> <p>



   		<p>domain	&nbsp;&nbsp;<input type='file' name='dfile' /> 
	 	<input type='submit' name='dsubmit' value='import' /> <p>


	 <p> MD5	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='file' name='mdfile' /> 
	 	<input type='submit' name='mdsubmit' value='import' /> <p>

<!--oparation-->
<br/><br/><br/><br/><br/> <a href="#">Click Here!</a>
<p>Clean  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="delete.php" ><input type='button' name='clean' value='clean' style ="color:red" /> </a></p>
<p>Match&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="match.php" ><input type='button' name='match' value='match' style ="color:red" /> </a></p>


</div>
</form>

</div>
</body>

</html>
