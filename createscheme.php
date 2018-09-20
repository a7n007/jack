
<!DOCTYPE html>
<html>
<head>
	<title>schemecreate</title>
</head>
<body>

</body>
</html>
<?php
$sql =  "INSERT INTO `availscheme`(`asid`, `asname`, `asdate`, `asdescription`) VALUES ()";
$result = mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>