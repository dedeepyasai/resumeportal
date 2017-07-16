<html>
<head>
<title>Resume Portal</title>


</head>
<body>
<center>
<form id="data" method="post" action="upload.php" enctype="multipart/form-data">
    First Name<input type="text" name="fname" required/><br><br>
    Last Name<input type="text" name="lname" required  /><br><br>
    Email Id<input type="email" name="email" required /><br><br>
	Mobile Number<input type="number" name="mob"  required/><br><br>
    <input  type="file" name="fileToUpload" accept=".doc,.docx,.pdf" required/><br><br>
    <input type="submit" value="click">
</form>
<script>
$("form#data").submit(function(){

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: 'upload.php',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            alert(data)
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});
</script>	



</body>
</html>