<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="INSERT INTO book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
	<link rel="stylesheet" href="insertt.css"/>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT </h1>
<p>
<?php 
if($status==1) echo"Records are inserted"; 
         else echo"Insertion Failed";?></p>
<h2>WANT TO INSERT MORE BOOK RECORDS?<a href="insertform.php">CLICK HERE</a></h2>
<h2>GO BACK TO HOMEPAGE<a href="home.php"> Click here</a></h2>
</body>
</html>