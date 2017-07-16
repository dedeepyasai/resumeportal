<?php 

 include('config.php');
 
 
 $st=$_GET['st'];
 $id=$_GET['id'];
 
 print_r($st);
 
 $sql="update data set status='$st' where id='$id'";
 
 if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	header('Location:showdata.php');

 
 
 ?>