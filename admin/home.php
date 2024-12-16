<?php 
include('header.php');
if(isset($_GET ['Username']))
{
	$username=$_GET['username'];
	$password=$_GET['password'];
	
	if($password='add123' && $username='admin')
	{
		header('location:home.php');
	}	
	else
	{
		header('location:index.php');
	}
}
	else
	{
		
	}
echo  "<form method='GET' Action=''></br></br>
<center><br><br>
             <input type='text' name='username' placeholder='username'</input></br></br>
			   <input type='password' name='password' placeholder='password'</input></br></br>
			     <input type='submit' value='NEXT'</input>
				 
				</center>
           </form>";	
	
//include('all.php');
//include('header.php');
//include('topnavbar.php');
//include('menu.php');

include('footer.php');
?>