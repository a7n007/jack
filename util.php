<?php

$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        $conn = mysqli_connect($servername, $username, $password, $dbname);


$sql =  "CREATE TABLE applied(
applicaionid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
adhar VARCHAR(30) ,
asid INT NOT NULL,
appdate date ,
status VARCHAR(50) DEFAULT 'Pending',
 index(adhar),
  index(asid),
FOREIGN KEY (adhar) REFERENCES studentinfo(adhar),
FOREIGN KEY (asid) REFERENCES availscheme(asid))
";
$result = mysqli_query($conn,$sql);
if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>