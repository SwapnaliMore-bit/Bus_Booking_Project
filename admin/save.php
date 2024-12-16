<?php
	$femid=$_GET['femid'];
	@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');
	echo $femid;
//INSERT VALUE TABLES	

if($femid=='1')//insert all bus 
{	
	$buno=$_GET['buno'];
	$butyp=$_GET['butyp'];
	$descrp=$_GET['descrp'];
	$amint=$_GET['amint'];
	$manufdt=$_GET['manufdt'];
	$seat=$_GET['seat'];
	
	$sql1="insert into bus_table(`bus_number`,`bus_type`,`bus_manufacturing`,`bis_description`,`seat_arrangement`,`amenities`)values('$buno','$butyp','$manufdt','$descrp','$seat','$amint')";
	mysql_query($sql1);
	header('Location: managebus.php');	
	//echo $sql1;
}
elseif($femid=='3')// insert all route_table
{
	$frm=$_GET['frm'];
	$too=$_GET['too'];
	$rtnm=$_GET['rtnm'];
	$distnce=$_GET['distnce'];
	$duratiom=$_GET['duratiom'];
	$stops=$_GET['stops'];
	
	$sql1="insert into `route_table`(`from_destination`,`to_destinstion`,`route_name`,`route_description`,`time_duration`,`stops`)values('$frm','$too','$rtnm','$distnce','$duratiom','$stops')";
	mysql_query($sql1);
	header('Location: allroute.php');	
}
elseif($femid=='4')//insert all driver
{
	$dno=$_GET['dno'];
	$addrs=$_GET['addrs'];
	$mob=$_GET['mob'];
	$pay=$_GET['pay'];
	$exp=$_GET['exp'];
	$id=$_GET['id'];
	
	$sql1="insert into `driver`(`dnm`,`address`,`numbr`,`payment`,`expr`)values('$dno','$addrs','$mob','$pay','$exp')";
	mysql_query($sql1);
	header('Location: alldrivers.php');	
}
elseif($femid=='5')// insert dailybus`
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
	
	$sql1="insert into `dailybus`(`busno`,`rotno`,`froms`,`tos`,`dy`,`mnt`,`sttym`,`endtym`,`aseat`,`dts`,`rate`)values('$buno','$rtnm','$srcs','$dyscs','$ddt','$mnt','$strttyn','$endtim','$avlseat','$dtnw','$rt')";
	mysql_query($sql1);
	header('Location: allroute.php');	
}

elseif($femid=='6')// insert all Route
{
	$frm=$_GET['frm'];
	$too=$_GET['too'];
	$rtnm=$_GET['rtnm'];
	$distnce=$_GET['distnce'];
	$duratiom=$_GET['duratiom'];
	$stops=$_GET['stops'];
	
	$sql1="insert into `route_table`(`from_destination`,`to_destinstion`,`route_name`,`route_description`,`time_duration`,`stops`)values('$frm','$too','$rtnm','$distnce','$duratiom','$stops')";
	mysql_query($sql1);
	header('Location: allroute.php');	
}

elseif($femid=='7')// insert Booking
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
	header('Location: allbooking.php');	
}


//UPDATE VALUES


elseif($femid=='51')//UPDATE BUS
{
	$buno=$_GET['buno'];
	$butyp=$_GET['butyp'];
	$descrp=$_GET['descrp'];
	$amint=$_GET['amint'];
	$manufdt=$_GET['manufdt'];
	$seat=$_GET['seat'];
	$id=$_GET['id'];
	
	$sql1="update bus_table set `bus_number`='$buno', `bus_type`='$butyp',`bis_description`='$descrp',`amenities`='$amint' WHERE id='$id'";
	mysql_query($sql1);
	header('Location: managebus.php');		
}
elseif($femid=='52')//UPDATE route
{
	$routnm=$_GET['route_name'];
	$routefrom= $_GET['from_destination'];
	$routeto=$_GET['to_destinstion'];
	$routedesc=$_GET['route_description'];
	$routedura=$_GET['time_duration'];
	$routestop=$_GET['stops'];
	$id=$_GET['id'];
	
	$sql1="update route_table set `route_name`='$routnm', `from_destination`='$routefrom',`to_destinstion`='$routeto',`time_duration`='$routedura',`stops`='$routestop' WHERE id=''";
	mysql_query($sql1);
	header('Location: alldrivers.php');		
}
elseif($femid=='53')//UPDATE driver
{
	$dno=$_GET['dno'];
	$addrs=$_GET['addrs'];
	$mob=$_GET['mob'];
	$pay=$_GET['pay'];
	$exp=$_GET['exp'];
	$id=$_GET['id'];
		
	$sql1="update driver set `dnm`='$dno', `address`='$addrs',`numbr`='$mob',`payment`='$pay',`expr`='$exp' WHERE id='$id'";
	mysql_query($sql1);
	header('Location: alldrivers.php');		
}
elseif($femid=='54')//UPDATE booking change the all values
{
	$buno=$_GET['buno'];
	$butyp=$_GET['butyp'];
	$descrp=$_GET['descrp'];
	$amint=$_GET['amint'];
	$manufdt=$_GET['manufdt'];
	$seat=$_GET['seat'];
	$id=$_GET['id'];
	
	$sql1="update bus_table set `bus_number`='$buno', `bus_type`='$butyp',`bis_description`='$descrp',`amenities`='$amint' WHERE id='$id'";
	mysql_query($sql1);
	header('Location: managebus.php');		
}

elseif($femid=='57')//UPDATE booking change the all values
{
	$firstname=$_GET['firstname'];
	$lastname=$_GET['lastname'];
	$email=$_GET['email'];
	$Address=$_GET['Address'];
	$cty=$_GET['cty'];
	$adlt=$_GET['adlt'];
	$seat=$_GET['seat'];
	$bsid=$_GET['bsid'];
	$id=$_GET['id'];
	
	$sql1="UPDATE `booknw` SET `fnm`='$firstname',`lnm`='$lastname',`eml`='$email',`adds`='$Address',`cty`='$cty',`adlt`='$adlt',`seats`='$seat',`bsid`='$bsid' WHERE `id`='$id'";
	mysql_query($sql1);
	header('Location: allbooking.php');		
}


//DELETE VALUES 

elseif($femid=='101')//delete bus values
{
	$id=$_GET['id'];
	
	$sql1="DELETE FROM `bus_table` WHERE `id`='$id'";
	mysql_query($sql1);
	//echo 	$sql1;
	header('Location: allbusupdate.php');		
}
elseif($femid=='102')//delete booking values
{
	$id=$_GET['id'];
	
	$sql1="DELETE FROM `booknw` WHERE `id`='$id'";
	mysql_query($sql1);
	//echo 	$sql1;
	header('Location: allbooking.php');		
}
elseif($femid=='103')//delete route values
{
	$id=$_GET['id'];
	
	$sql1="DELETE FROM `route_table` WHERE `id`='$id'";
	mysql_query($sql1);
	//echo 	$sql1;
	header('Location: allroute.php');		
}
elseif($femid=='104')//delete driver values
{
	$id=$_GET['id'];
	
	$sql1="DELETE FROM `driver` WHERE `id`='$id'";
	mysql_query($sql1);
	//echo 	$sql1;
	header('Location: alldrivers.php');		
}
elseif($femid=='106')//delete driver values
{
	$id=$_GET['id'];
	
	$sql1="DELETE FROM `booknw` WHERE `id`='$id'";
	mysql_query($sql1);
	//echo 	$sql1;
	header('Location: allbooking.php');		
}
?>