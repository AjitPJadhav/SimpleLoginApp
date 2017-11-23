<html>
<head>
<title> Login Page </title>
</head>
<body bgcolor="pink">
<div style="top:200; left:530; position:absolute; ">
<font color="red" size="7"> <b>
<a href="home.php">Home Page </a>
</b>
</font>
</div>
<div style="top:300; left:350; position:absolute; ">
<?php
session_start();
$user=$_SESSION['user_role'];
if(isset($_SESSION['user_name']))
{
  if($user=="teacher")
    {
     echo "<h1>"."<b>"."<font color='red'>";
     echo $_SESSION['user_name']." as a teacher, can not access admin pages";
     echo "</font>"."</b>"."</h1>";  
     }
  else
    {
     echo "<h1>"."<b>"."<font color='red'>";
     echo $_SESSION['user_name']." as a student, can not access admin/teacher pages";
     echo "</font>"."</b>"."</h1>";
    } 
}  
else
{
 header('location:login.php');
}
?>
</div>
</body>
</html>
