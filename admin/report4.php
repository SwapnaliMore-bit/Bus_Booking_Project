<?php
$cn=mysqli_connect("localhost","root","","busbooking");
$ptype="";
$search="";
$sql="select * from driver";
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
	<a href="reports.php" class="d-print-none btn btn-danger">Route List</a>
	<br>
	<h1 class="text-center">online Bus booking  </h1>
	<h6 class="text-right"><?=date('d-m-Y')?></h6>
	<h4 class="text-center" style="text-decoration: underline;">Registered Driver List</h4>
	<form method="post" name="form1">
		<table>
			<tr>
				<td>Search booking</td>

				<td>
					<select name="search">
						<option <?=$search=="id"?"selected":""?> value="id">id</option>
						<option <?=$search=="dnm"?"selected":""?> value="dnm">driver name</option>
						<option <?=$search=="address"?"selected":""?> value="address">address</option>
						<option <?=$search=="numbr"?"selected":""?> value="numbr">mobil no</option>
						<option <?=$search=="payment"?"selected":""?> value="payment">payment</option>
						<option <?=$search=="expr"?"selected":""?> value="expr">exprienc</option>
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
			<th>id</td>
			<th>Driver name</th> 
			<th>Address</th>
			<th>mobile no</th>
			<th>payment</th>
			<th>exprience</th>
			
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
								
			</tr>
			
			<?php
				}
			?>	
		</tbody>
	
	</table>	
	<br>
</div>	
