<?php
$cn=mysqli_connect("localhost","root","","busbooking");
$ptype="";
$search="";
$sql="select * from bus_table";
if(isset($_POST["btn"]))
{
	$ptype=$_POST["ptype"];
	$search=$_POST["search"];
	$sql=$sql." where $search like '%$ptype%'";

}
?>
<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css"/>
<link rel="stylesheet" href="../css/style.css"/>
<style>

</style>
<div class="container">
	<br>
	<button type="button" class="d-print-none btn btn-info" onclick="window.print();">Print Report</button>
	&nbsp;&nbsp;
	<a href="reports.php" class="d-print-none btn btn-danger">Back to List</a>
	<br>
	<h1 class="text-center">Online bus booking </h1>
	<h6 class="text-right"><?=date('d-m-Y')?></h6>
	<h4 class="text-center" style="text-decoration: underline;">Registered Bus List</h4>
	
		<form method="post" name="form1">
		<table>
			<tr>
				<td>Search booking</td>

				<td>
					<select name="search">
						<option <?=$search=="id"?"selected":""?> value="id">id</option>
						<option <?=$search=="bus_number"?"selected":""?> value="bus_number">bus no</option>
						<option <?=$search=="bus_type"?"selected":""?> value="bus_type">Bus type</option>
						<option <?=$search=="bus_manufacturing"?"selected":""?> value="bus_manufacturing">bus_manufacturing</option>
						<option <?=$search=="bis_description"?"selected":""?> value="bis_description">bis_descriptionth</option>
						<option <?=$search=="seat_arrangement"?"selected":""?> value="seat_arrangement">seat_arrangement</option>
						<option <?=$search=="amenities"?"selected":""?> value="amenities">amenities</option>
						
					</select>
				</td>

				<td><input type="text" name="ptype" value="<?=$ptype?>"/></td>
				<td><input type="submit" name="btn" value="Filter"/></td>
			</tr>
		</table>
	</form>	
	
	
	<table id="table1" class="table table-bordered table-">
		<thead>
			<tr>
			<th>id </th>
			<th>bus no </th> 
			<th>Bus type</th>
			<th>bus_manufacturing</th>
			<th>bis_descriptionth</th>
			<th>seat_arrangement</th>
			<th>amenities</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$rs=mysqli_query($cn,$sql);
				while($row=mysqli_fetch_array($rs))	
				{
			?>
			<tr>
				<td><?=$row[0]?></td>
				<td><?=$row[1]?></td>
				<td><?=$row[2]?></td>
				<td><?=$row[3]?></td>
				<td><?=$row[4]?></td>
				<td><?=$row[5]?></td>
				<td><?=$row[6]?></td>	
				<!--<td><?=$row[7]?></td>-->
								
			</tr>
			<?php
				}
			?>	
		</tbody>
	
	</table>	
	<br>
</div>	
