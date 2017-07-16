<?php

	include('config.php');
	$sql="Select * from data where id =".$_GET['id'];
	$result = $conn->query($sql);
	$filename;
	$id;
	if ($result->num_rows > 0) {
	
	 while($row = $result->fetch_assoc()) {
	 $id=$row['id'];
	 $filename=$row['cv'];
	 }
	}
	else
	{
		echo "File Not Found !";
		echo "<a href='showdata.php?'> Go Back</a> ";
		die();
	}
	$filepath = "upload\\".$filename;
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	
	
		
	
	
	//print_r($filepath);
	
	echo "<a style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' href='show.php?id=".($id+1)."'> Next</a> ";
	echo "<a style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' href='show.php?id=".($id-1)."'> Previous</a> ";
	
	
	echo "<a style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' href='changestatus.php?st=1&id=".$id."'> Shortlist</a> ";
	echo "<a style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' href='changestatus.php?st=2&id=".$id."'> Reject</a> ";
	echo "<a style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' href='showdata.php'> Go Back</a> ";
	

?>
<?php if($ext=="pdf" || $ext=="doc" || $ext=="docx")
	{ ?>
<iframe src="<?php echo $filepath ?>" width="800px" height="600px" >
   <?php }
else
{
?>
<br><br><a href="<?php echo $filepath ?>" target="_blank"> Open File </a>
<?php
}

   ?>
   
   
  <style>
  a{
	padding:5px;
	background-color:#e3e3e3;
	text-decoration:none;
  }
  </style>
  