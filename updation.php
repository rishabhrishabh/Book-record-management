<?php
$size=sizeof($_POST);
$records=$size/4;
for($i=1;$i<=$records;$i++)
{
$index1="bookid".$i;
$bookid[$i]=$_POST[$index1];
$index2="title".$i;
$title[$i]=$_POST[$index2];
$index3="price".$i;
$price[$i]=$_POST[$index3];
$index4="author".$i;
$author[$i]=$_POST[$index4];



}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

for($i=1;$i<=$records;$i++)
{
$q="update book
SET title='$title[$i]',price=$price[$i],author='$author[$i]'
where bookid=$bookid[$i]";
mysqli_query($con,$q);}
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="insertstyle.css"/>
<title>Updation</title>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>
<p>
<?php
echo $records." RECORDS UPDATED";
?>
</p>
<h2>GO BACK TO HOMEPAGE<a href="home.php"> Click here</a></h2>
</body>
</html>