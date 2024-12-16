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
	$busno="MH 09 AB 4567";
	$bustyp="VOLVO";
	$businfo="info";
	$busamni="Aminities";
	$frmid="1";
}
?>
    
     
<html lang="en">

      
        <div class="page-wrapper">
            
            <div class="row page-titles">
     
              <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">RUN BUS</h4>
                           
                            <form class="form-horizontal m-t-40" action="save.php" Method="GET">
                                <div class="form-group">
                                    <label>BUS Number <span class="help"> </span></label>
                                    <input type="hidden" name="femid" class="form-control" value="5">
                                    <input type="hidden" name="id" class="form-control" value="1">
                                    <input type="text" name="buno" class="form-control" value="INFO">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">ROUTE Number<span class="help"</span></label>
                                    <input type="text" name="rtnm" class="form-control" value="INFO">
                                </div>
								<div class="form-group">
                                    <label for="example-email">SOURCE<span class="help"</span></label>
                                    <input type="text" name="srcs" class="form-control" value="INFO">
                                </div>
								<div class="form-group">
                                    <label for="example-email">DESTINATION<span class="help"</span></label>
                                    <input type="text" name="dyscs" class="form-control" value="INFO">
                                </div>
								<div class="form-group">
                                    <label for="example-email">DAY DATE<span class="help"</span></label>
                                    <input type="text" name="ddt" class="form-control" value="1">
                                </div>
								<div class="form-group">
                                    <label for="example-email">MONTH<span class="help"</span></label>
                                    <input type="text" name="mnt" class="form-control" value="2">
                                </div>
								<div class="form-group">
                                    <label for="example-email">START TIME<span class="help"</span></label>
                                    <input type="text" name="strttyn" class="form-control" value="14.00">
                                </div>
								<div class="form-group">
                                    <label for="example-email">END TIME<span class="help"</span></label>
                                    <input type="text" name="endtim" class="form-control" value="24.00">
                                </div>
								<div class="form-group">
                                    <label for="example-email">AVAILABLE SEAT<span class="help"</span></label>
                                    <input type="text" name="avlseat" class="form-control" value="40">
                                </div>
								
								<div class="form-group">
                                    <label for="example-email">DATES<span class="help"</span></label>
                                    <input type="text" name="dtnw" class="form-control" value="01/02/2020">
                                </div>
								<div class="form-group">
                                    <label for="example-email">RATE<span class="help"</span></label>
                                    <input type="text" name="rt" class="form-control" value="400">
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