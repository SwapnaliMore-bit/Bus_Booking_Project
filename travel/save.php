<?php
	$femid=$_GET['femid'];
	@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');

if($femid=='1')//booknw table
{	
	$firstname=$_GET['firstname'];
	$lastname=$_GET['lastname'];
	$email=$_GET['email'];
	$Address=$_GET['Address'];
	$cty=$_GET['cty'];
	$adlt=$_GET['adlt'];
	$seat=$_GET['seat'];
	$bsid=$_GET['bsid'];
	
	$sql1="insert into booknw(`fnm`,`lnm`,`eml`,`adds`,`cty`,`adlt`,`seats`,`bsid`)values('$firstname','$lastname','$email','$Address','$cty','$adlt','$seat','$bsid')";
	mysql_query($sql1);
	header('Location: successfull.php');	/// Ethe change kelele page ch nav tak (bus)
}
elseif($femid=='3')//route table
{
	$frm=$_GET['frm'];
	$too=$_GET['too'];
	$rtnm=$_GET['rtnm'];
	$distnce=$_GET['distnce'];
	$duratiom=$_GET['duratiom'];
	$stops=$_GET['stops'];
	
	$sql1="insert into `route_table`(`route_name`,`from_destination`,`to_destinstion`,`route_description`,`time_duration`,`stops`)values('$rtnm','$frm','$too','$distnce','$duratiom','$stops')";
	mysql_query($sql1);
	header('Location: allroute.php');	// allroute 
}
elseif($femid=='4')
{
	$dno=$_GET['dno'];
	$addrs=$_GET['addrs'];
	$mob=$_GET['mob'];
	$pay=$_GET['pay'];
	$exp=$_GET['exp'];
	
	$sql1="insert into `driver`(`dnm`,`address`,`numbr`,`payment`,`expr`)values('$dno','$addrs','$mob','$pay','$exp')";
	mysql_query($sql1);
	header('Location: alldrivers.php');	//alldrivers
}
elseif($femid=='5')
{
	$buno=$_GET['buno'];
	$rtnm=$_GET['rtnm'];
	$srcs=$_GET['srcs'];
	$dyscs=$_GET['dyscs'];
	$ddt=$_GET['ddt'];
	$mnt=$_GET['mnt'];
	$strttyn=$_GET['strttyn'];
	$endtim=$_GET['endtim'];
	$avlseat=$_GET['avlseat'];
	$dtnw=$_GET['dtnw'];
	$rt=$_GET['rt'];
	
	$sql1="insert into `dailybus`(`busno`,`rotno`,`froms`,`tos`,`dy`,`mnt`,`sttym`,`endtym`,`aseat`,`dtnw`,`rate`)values('$buno','$rtnm','$srcs','$dyscs','$ddt','$mnt','$strttyn','$endtim','$avlseat','$dtnw','$rt')";
	mysql_query($sql1);
	header('Location: daliybus.php'); //daliybus
}
elseif($femid=='51')//bus update, delete
{
	$buno=$_GET['buno'];
	$butyp=$_GET['butyp'];
	$descrp=$_GET['descrp'];
	$amint=$_GET['amint'];
	$manufdt=$_GET['manufdt'];
	$seat=$_GET['seat'];
	$id=$_GET['id'];
	
	$sql1="update bus_table set `bus_number`='$buno', `bus_type`='$butyp',`bis_description`='$descrp',`amenities`='$amint' WHERE id=''";
	mysql_query($sql1);
	header('Location: managebus.php');		
}
elseif($femid=='101')
{
	$id=$_GET['id'];
	
	$sql1="update bus_table set `is_delete`='1', WHERE id='$id'";
	mysql_query($sql1);
	echo $sql1;
	//header('Location: managebus.php');		
}

elseif($femid=='52')//route update,delete
{
	$routnm=$row['route_name'];
	$routefrom= $row['from_destination'];
	$routeto=$row['to_destinstion'];
	$routedesc=$row['route_description'];
	$routedura=$row['time_duration'];
	$routestop=$row['stops'];
	$id=$_GET['id'];
	
	$sql1="update route_table set `routenm`='$route_name',`routefrom`='$from_destination',`routeto`='$to_destinstion',
	`routedesc`='$route_decription',`routedura`='$time_duration',`routesto`='$stops' WHERE id=''";
	mysql_query($sql1);
	header('Location: allroute.php');		
}
elseif($femid=='103')
{
	$id=$_GET['id'];
	
	$sql1="update route_table set `is_delete`='1', WHERE id='$id'";
	mysql_query($sql1);
	echo $sql1;
	//header('Location: managebus.php');		
}

?>