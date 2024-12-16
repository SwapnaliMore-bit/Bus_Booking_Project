<?php 
if(isset($_GET['usernm']))
{
	$username=$_GET['usernm'];
	$password=$_GET['pass'];
	mysql_connect('localhost', 'root', '')or die('cannot connect');	
	mysql_select_db('busbooking')or die('cannot select DB');
	$sql="SELECT * FROM user where user_name='$username' AND password='$password'";
    $result=mysql_query($sql);
	if($result==false ){die(mysql_error());}
    $row = mysql_fetch_array($result);
	$count=mysql_num_rows($result);
		
	if($count>0)
	{
		
		session_start();
		$_SESSION['user']=$username;
		header('location: index.php');
	}
	else
	{
		header('location: index.php');
	}
}
else
{
}
echo "<form method='GET' Action=''></br></br>
<h1><center></br></br></br>
<input type='text' name='usernm' placeholder='username'></input></br></br>
<input type='password' name='pass' placeholder='password'></input></br></br>
<input type='submit' value='NEXT'></input>
</center></h1>
</form>";

?>
