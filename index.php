<?php
session_start();
$_SESSION['isvalins'] = false;
if (!file_exists('./config.php')) {
	$_SESSION['isvalins'] = true;
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=getdata.php">'; 
    die;
}
if ($_SESSION['isloggedin'] == true)
{
	if($_SESSION['usrtype'] == "stud")
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=studentHome.php">'; 
}/*
if(isset($_SESSION['dbdone']))
{
	echo 'Databases created';
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Welcome to Course Manager</title>
	<style type="text/css">
	body{
		background: #eeeeee;
	}
	</style>
</head>
<body>
<h1>Welcome to course manager</h1>
<?php
if ($_SESSION['wrongpass'] == true)
{
	echo 'Wrong username or password';
}
?>
<form action="./loginauth.php" method="post">
	<table>
		<tr><td>Username</td><td><input type="text" name="username"/></td></tr>
		<tr><td>Password</td><td><input type="password" name ="password"/></td></tr>
		<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td style="padding-left:35px;"><input type= "submit" value="submit"/></td></tr>
	</table>
</form>
</body>
</html>
