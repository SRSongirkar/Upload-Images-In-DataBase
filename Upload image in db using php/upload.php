<?php
//    include("config.php");
$servername="localhost";
$username="root";
$password="";
$dbname="testing";

	//$pic=$_FILES['file'];
	
	$con=mysqli_connect($servername,$username,$password,$dbname);
 
 
 
 
 
 
    if(isset($_POST['submit'])){


	$fname=$_POST['fname'];
	$addr=$_POST['addr'];
	$cont=$_POST['cont'];

		$name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = /*$target_dir . basename*/($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
			//('$fname','$addr','$cont','$pic','".$name."')
            $query = "insert into test values('','".$fname."','".$addr."','".$cont."','".$image."')";
           
             mysqli_query($con,$query)or die(mysqli_error($con));
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);

        }
    
    }
    ?>


























<!--?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

	$fname=$_POST['fname'];
	$addr=$_POST['addr'];
	$cont=$_POST['cont'];
	$pic=$_FILES['file'];
	
	$conn =Mysqli_connect($servername, $username, $password, $dbname);


							$filename=$file['name'];

							$filetext=explode('.', $filename);
							$filecheck=strtolower(end($filetext));

							$fileextstore=array('png','jpg','jpeg');

							if(in_array($filecheck,$fileextstore))
							{


							$q="INSERT INTO test VALUES('$fname','$addr','$cont','$pic')";
							//$query=mysqli_query($conn,$q);


if ($conn->mysqli_query($q) ===TRUE) 
{
  echo "record insert";
} else
	{
  echo "Error not insert";
}

$conn->mysqli_close();
?-->