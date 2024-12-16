<?php
$cn=mysqli_connect("localhost","root","","busbooking");
$ptype="";
$search="";
$sql="select * from booknw";
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
	<h1 class="text-center">Online bus booking</h1>
	<h6 class="text-right"><?=date('d-m-Y')?></h6>
	<h4 class="text-center" style="text-decoration: underline;">Registered Customer List</h4>
	
		<form method="post" name="form1">
		<table>
			<tr>
				<td>Search booking</td>

				<td>
					<select name="search">
						<option <?=$search=="id"?"selected":""?> value="id">id</option>
						<option <?=$search=="fnm"?"selected":""?> value="fnm">first Name</option>
						<option <?=$search=="lnm"?"selected":""?> value="lnm">last Name</option>
						<option <?=$search=="eml"?"selected":""?> value="eml">Email ID</option>
						<option <?=$search=="adds"?"selected":""?> value="adds">Address</option>
						<option <?=$search=="cty"?"selected":""?> value="cty">Town city</option>
						<option <?=$search=="adlt"?"selected":""?> value="adlt">total adults</option>
						<option <?=$search=="seats"?"selected":""?> value="seats">seats</option>
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
			<th>ID</th>
			<th>first Name</th> 
			<th>last Name</th>
			<th>Email ID</th>
			<th>Address</th>
			<th>Town city</th>
			<th>total adults</th>
			<th>seats</th>
			</tr>
		</thead>
		<tbody>
			<?php
		
				$rss=mysqli_query($cn,$sql);
				while($row1=mysqli_fetch_array($rss))	
				{
			?>
			<tr>
				<td><?=$row1[0]?></td>
				<td><?=$row1[1]?></td>
				<td><?=$row1[2]?></td>
				<td><?=$row1[3]?></td>
				<td><?=$row1[4]?></td>
				<td><?=$row1[5]?></td>
				<td><?=$row1[6]?></td>		
				<td><?=$row1[7]?></td>					
								
			</tr>
			<?php
				}
			?>	
		</tbody>
	
	</table>	
	<br>
</div>	
