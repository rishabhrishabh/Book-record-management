<?php 
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
$index="b".$j;
if(isset($_POST[$index]))
$b_id[$i]=$_POST[$index];
else 
$i--;


}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($k=1;$k<=$size;$k++)
{
$q="delete from book where bookid=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="deletestylesheet.css"/>
<title>Deletion</title>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>
<p>
<?php
echo $size." RECORDS DELETED FROM DATABASE";
?>
</p>
<h2>WANT TO INSERT MORE BOOK RECORDS?<a href="insertform.php">CLICK HERE</a><h2>
<h2>GO BACK TO HOMEPAGE<a href="home.php"> CLICK HERE</a><h2>
</body>
</html>