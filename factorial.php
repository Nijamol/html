<html>
<head>
<title>factorial program using loop in PHP</title>
</head>
<body>
<form method="post">
enter the number:<br>
<input type="text"name="number"id="number">
<input type="submit"name="submit"value="submit"/>
</form>
<?php
if($_POST){
$fact=1;
//getting value from input text box 'number'
$number=$_POST['number'];
echo"factorial of $number:<br><br>";
//start loop
for ($i=1; $i <= $number; $i++){
$fact=$fact*$i;
}
echo $fact."<br>";
}
?>
</body>
</html>
