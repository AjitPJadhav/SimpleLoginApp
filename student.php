<html>
<body bgcolor="pink">
<div style="top:200; left:350; position:absolute; ">
<?php
session_start();
$user=$_SESSION['user_role'];
if(isset($_SESSION['user_name']))
{
  if($user=="admin")
    {
     echo "<b>"."<font color='red' size='6'>";
     echo $_SESSION['user_name']." is authorized to view all pages";
     echo "</font>"."</b>";
    }
  else if($user=="teacher")
       {
         echo "<b>"."<font color='red' size='6'>";
         echo $_SESSION['user_name']." as a teacher,is authorized to view student page";
         echo "</font>"."</b>"; 
        } 
  else
    {
         echo "<b>"."<font color='red' size='6'>";
         echo $_SESSION['user_name']." can view this page only";
         echo "</font>"."</b>"; 
    } 
}  
else
{
 header('location:login.php');
}
?>
</div>
<div style="top:120; left:120; position:absolute; ">
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
</body>
</html>
