<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="insertstylesheet.css"/>
<title>Insertion Form</title>
</head>
<body>
<h1>BOOK RECORD MANAGEMENT</h1>

<form action="insertion.php" method="post">
<table>
<tr>
<th>Title</th>
<td><input type="text" name="title" required/></td>
</tr>
<tr>
<th>Price</th>
<td><input type="text" name="price" required/></td>
</tr>
<tr>
<th>Author</th>
<td><input type="text" name="author" /></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="INSERT" required/></td>
</tr>
</table>
<h2>GO BACK TO HOMEPAGE<a href="home.php"> Click here</a></h2>
</form>
</body>
</html>