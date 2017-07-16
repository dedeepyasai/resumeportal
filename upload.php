<?php

	include('config.php');
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mob= $_POST['mob'];
	$email= $_POST['email'];
	
	$sql="select * from data where mobile='$mob'";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
die("Mobile Number Already Exists.!!! <a href='index.php' style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' > Go Back </a><br><br><br>");
}
	
	$target_dir = "upload/";
	$rname = generateRandomString(5);
	$file_name = $rname.basename($_FILES["fileToUpload"]["name"]);
	$file_name = str_replace(' ','',$file_name);
	$target_file = $target_dir.$file_name;
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
	{}
	
	
	
	
	$sql = "INSERT INTO `data`( `fname`, `lname`, `email`, `mobile`, `status`, `cv`) VALUES ('$fname','$lname','$email','$mob','0','$file_name')";
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header('Location:showdata.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	


