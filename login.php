<?php
session_start();
$con=mysql_connect("localhost","root","");
if(isset($_POST['submit']))
{
$login_id=$_POST['login_id'];
$password=$_POST['password'];
mysql_select_db("session",$con);
$query="select * from info where UserName='".$login_id."' and Password='".$password."' ";
$result=mysql_query($query);
if(mysql_num_rows($result)>0)
  {
       while($row=mysql_fetch_array($result))

           {
           session_start();
           $_SESSION['user_role']=$row['Role'];  
           $_SESSION['user_name']=$row['UserName'];  
           header('location:home.php'); 
           }    
  }
else
  {
    echo "<script language='javascript'> alert('Login Again') </script>";
  }
 }
?>
<html>
<head>
<title> Login Page </title>
</head>
<body bgcolor="pink">
<form action="login.php" method="post">
<center>
<div style="top:200; left:530; position:absolute; ">
<h1>&nbsp&nbsp&nbspLogin Here </h1>
</div>
<div style="top:300; left:500; position:absolute; ">
<table bgcolor="yellow" border="1" cellpadding="13">
<tr>
<td>Login ID</td>
<td><input type="text" name="login_id">  </td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password">  </td>
</tr>
<tr>
<td><input type="submit" value="Submit" name="submit">  </td>
<td><input type="reset" value="Clear">  </td>
</tr>
</table>
</div>
</center>
</form>
</body>
</html>
