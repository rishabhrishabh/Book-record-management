<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="Select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>View Book Records</title>
<link rel="stylesheet" href="viewstyle.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>
<table id="view_table">
<tr>
<th>Book ID</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['bookid']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['author']; ?></td>

<?php
}
?>

</table>


<h2>GO BACK TO HOMEPAGE<a href="home.php"> Click here</a></h2>

</body>
</html>