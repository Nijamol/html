<html>
<head>
<title>fibonacci series</title>
</head>
<body>
<form>
enter the fibonacci size<input type="number"name="fibonacci">
<input type="submit"value="submit"name="submitform"></br></br>
</form>
</body>
</html>
<?php
if(isset($_GET["submitform"]))
{
$num=$_GET['fibonacci'];
$a=0;
$b=1;
echo"fibonacci series for ".$num."element are:</br>";
echo $a.' '.$b;
$i=0;
while($i<$num-2)
{
$next=$a+$b;
echo' '.$next;
$a=$b;
$b=$next;
$i++;
}
}
?>
