<?php

	include('config.php');
	
	$sql="Select * from data";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo" <center><table border=1>
   <tr>
   <th>ID</th>
   <th>First</th>
   <th>Last</th>
   <th>Email</th>
   <th>Mobile</th>
   <th>Status</th>
   <th>Action</th>
   <th>Download</th>
   </tr>";
    while($row = $result->fetch_assoc()) {
       
	echo"   <tr> ";
   echo "<td>" .$row['id']. "</td>";
  echo "<td>" .$row['fname']." </td> ";
  echo "<td>" .$row['lname']." </td> ";
   echo "<td>" .$row['email']. "</td>";
   echo "<td>" .$row['mobile']. "</td>";
   echo "<td>";
   switch($row['status'])
   {
				case '0' : echo "Screening";
				break;
				case '1' : echo "Shortlisted";
				break;
				case '2' : echo "Rejected";
				break;
   }
	echo"</td>";
   echo "<td><a href='show.php?id=".$row['id']."'>Show</a></td>";
   echo "<td><a href='upload/".$row['cv']."' download>Download</a></td>";
   echo "</tr>";
	   
    }
} else {
    echo "0 results";
}
$conn->close();


echo "<a href='index.php' style='padding:5px;text-decoration:none;background-color:#888888;color:#ffffdd;' > Go Back </a><br><br><br>";

?>

