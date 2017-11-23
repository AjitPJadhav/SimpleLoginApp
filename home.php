<html>
<head>
<title> Login Page </title>
</head>
<body bgcolor="shine">
<form action="login.php" method="post">
<center>
<div style="top:200; left:530; position:absolute; ">
<font color="red" size="5"> <b>
<h1> Welcome
<?php 
session_start();
if(!isset($_SESSION['user_name']))
{
header('location:login.php');
}
else
{
echo $_SESSION['user_name'];
}
?>
</h1>
</b>
</font>
</div>

<div style="top:150; left:200; position:absolute; ">
<table bgcolor="yellow" border="1" cellpadding="11">

<tr>
<td><h2><a href="home.php">Home</a></h2></td>
</tr>


<tr>
<td><h2><a href="admin.php">Admin</a></h2></td>
</tr>

<tr>
<td><h2><a href="teacher.php">Teacher</a></h2></td>
</tr>

<tr>
<td><h2><a href="student.php">Student</a></h2></td>
</tr>

<tr>
<td><h2><a href="logout.php">Logout</a></h2></td>
</tr>


</table>
</div>



</center>
</form>
</body>
</html>