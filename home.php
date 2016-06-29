<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html >
<style>
p { margin-left:300px;}
<style>
a:link    {color:#D3D3D3; background-color:transparent; text-decoration:none}
a:visited {color:#D3D3D3; background-color:transparent; text-decoration:none}
a:hover   {color:#D3D3D3; background-color:transparent; text-decoration:underline}
a:active  {color:#D3D3D3; background-color:transparent; text-decoration:underline}
 
</style>
</style>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Game- <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="styl.css" type="text/css" />
</head>
<body background="image.jpg">
<div id="header">
 <div id="left">
    <label><a href = "hang.html"><b>Click to Play Hangman</b></a></label>

    </div>
    <div id="right">
     <div id="content">
         Hey ! <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>

</div><br>
<br><br><br><br><br><a href = "">
<img src = "hang.jpg">
</a>
&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp<br><br><br><br><br><br>
&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
 <div><p><font size=10 ><a href = "about.html"><b> Game Rules</b></a></font></p></div>
</body>
</html>