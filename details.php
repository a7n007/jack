<?php
include('conn.php');
$adhar=$_POST['adhar'];
$dob=$_POST['dob'];
$foccupation=$_POST['foccupation'];
$acno=$_POST['acno'];
$income	=$_POST['income'];
$caste=$_POST['caste'];
$mailid=$_POST['email'];
$sqlc = "select adhar from users where adhar = '$adhar'";
$result = mysqli_query($conn, $sqlc);

$sql = "INSERT INTO `studentinfo`(`adhar`, `dob`, `foccupation`, `acno`, `income`, `caste`, `mailid`) VALUES ('$adhar','$dob','$foccupation','$acno','$income','$caste','$mailid')";
$result = mysqli_query($conn, $sql);

?>