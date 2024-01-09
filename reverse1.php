<html>
<head>
<title>PHP program to find reverse of a given number</title>
</head>
<body>
<form method="post">
<input type="text"name="num"value=""placeholder="enter a number"/>
<input type="submit"name="submit"value="submit"/>
</form>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['num'];
$x=$n;
$r=0;
while($n>1)
{
$r=$r*10;
$r=$r+($n%10);
$n=$n/10;
}
echo "reverse of number".$x."is:".$r;
return 0;
}
?>
</body>
</html>
