<?php
include('header.php');
include('topnavbar.php');
include('menu.php'); 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');

	$sql="SELECT * FROM driver where id='$id'";
	$result=mysql_query($sql);
	if($result==false ){die(mysql_error());}
	$row = mysql_fetch_array($result);
		
	$dnm=$row['dnm'];
	$address= $row['address'];
	$numbr=$row['numbr'];
	$payment=$row['payment'];
	$exp=$row['expr'];
	$frmid="53";
}
else
{
	$id=0;
	$dnm="";
	$address="";
	$numbr="";
	$payment="";
	$expr="";
	$frmid="4";
}?>
    
	     
<html lang="en">

      
        <div class="page-wrapper">
            
            <div class="row page-titles">
     
              <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">ADD DRIVERS</h4>
                           
                             <form class="form-horizontal m-t-40" action="save.php" Method="GET">
                               <div class="form-group">
                                    <label>Driver Name <span class="help"> </span></label>
                                   <input type="hidden" name="femid" class="form-control" value="<?php echo $frmid; ?>">
                                   <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>">
                                    <input type="text" name="dno" class="form-control" value="<?php echo $dnm; ?>">
                                 </div>
                                <div class="form-group">
                                    <label for="example-email">Address<span class="help"</span></label>
                                    <input type="text" name="addrs" class="form-control" value="<?php echo $address; ?>"  name="adds">
                                </div>
								<div class="form-group">
                                    <label for="example-email">Mobile number<span class="help"</span></label>
                                    <input type="text" name="mob" class="form-control" value="<?php echo $numbr; ?>"  name="mob">
                                </div>
								<div class="form-group">
                                    <label for="example-email">Payment<span class="help"</span></label>
                                    <input type="text" name="pay" class="form-control" value="<?php echo $payment; ?>"  name="rti">
                                </div>
                                <div class="form-group">
                                    <label>experience </label>
                                    <select class="custom-select col-12" name="exp" id="inlineFormCustomSelect"  name="exp">
                                        <option selected>Choose...</option>
                                        <option value="1">One Year</option>
                                        <option value="2">Two Year</option>
                                        <option value="3">Three Year</option>
                                    </select>
                                </div>
                               
                                <div class="form-group">
                                   <input type="submit" class="form-control" value="Save">
                                     </div>
                              
                            </form>
                        </div>
                    </div>
                </div>	
	
	
     <?php
include('footer.php');
?>