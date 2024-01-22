<?php
$host="localhost";
$user="root";
$pass="";
$database="HOSPITAL";
$connection=mysqli_connect($host,$user,$pass,$database);
if($connection){
echo"successfully connected";
}
else{
die("could not connect");
}
$sqli="INSERT INTO PATIENT
(NAME,PH_NO,DOCTOR)
VALUES('jhon','7654321098','rameesa')";
mysqli_query($connection,$sqli);
mysqli_close($connection);
?>

