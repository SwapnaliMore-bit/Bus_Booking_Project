<?php
include('header.php');
include('topnavbar.php');
include('menu.php'); 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');

	$sql="SELECT * FROM bus_table where id='$id'";
	$result=mysql_query($sql);
	if($result==false ){die(mysql_error());}
	$row = mysql_fetch_array($result);
		
	$busno=$row['bus_number'];
	$bustyp= $row['bus_type'];
	$businfo=$row['bis_description'];
	$busamni=$row['amenities'];
	$frmid="51";
}
else
{
	$id=0;
	$busno="";
	$bustyp="";
	$businfo="";
	$busamni="";
	$frmid="";
}
?>
    
     
<html lang="en">

      
        <div class="page-wrapper">
            
            <div class="row page-titles">
     
              <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">ADD BUS</h4>
                           
                            <form class="form-horizontal m-t-40" action="save.php" Method="GET">
                                <div class="form-group">
                                    <label>BUS Number <span class="help"> </span></label>
                                    <input type="hidden" name="femid" class="form-control" value="1">
                                    <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">
                                    <input type="text" name="buno" class="form-control" value="<?php echo $busno;?>">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">BUS TYPE<span class="help"</span></label>
                                    <input type="text" name="butyp" class="form-control" value="<?php echo $bustyp;?>">
                                </div>
								<div class="form-group">
                                    <label for="example-email">BUS INFORMATION<span class="help"</span></label>
                                    <input type="text" name="descrp" class="form-control" value="<?php echo $businfo;?>">
                                </div>
								<div class="form-group">
                                    <label for="example-email">Aminities<span class="help"</span></label>
                                    <input type="text" name="amint" class="form-control" value="<?php echo $busamni;?>">
                                </div>
								<!--<div class="form-group">
                                    <label for="example-email">ROUTE INFORMATION<span class="help"</span></label>
                                    <input type="text" class="form-control" value="AC/NON-AC">
                                </div>-->
								<div class="form-group">
                                    <label for="example-email">Manufacturing DATE<span class="help"</span></label>
                                    <input type="date" name="manufdt" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Seat Arrangement</label>
                                    <select class="custom-select col-12" name="seat" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">2 x 2 Seater </option>
                                        <option value="2">2 x 3 Seater</option>
                                        <option value="3">1 x 2 Sleeper</option>
                                        <option value="4">2 x 4 Sleeper</option>
                                    </select>
                                </div>
                               
                                <div class="form-group">
                                   
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                       <input type="submit" value="save"></input>
                                              </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
<?php
include('footer.php');
?>