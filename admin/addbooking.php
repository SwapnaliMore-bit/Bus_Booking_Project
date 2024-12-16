<?php
include('header.php');
include('topnavbar.php');
include('menu.php');

if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');

	$sql="SELECT * FROM booknw where id='$id'";
	$result=mysql_query($sql);
	if($result==false ){die(mysql_error());}
	$row = mysql_fetch_array($result);
		
	$fnm=$row['fnm'];
	$lnm= $row['lnm'];
	$eml=$row['eml'];
	$adds=$row['adds'];
	$cty=$row['cty'];
	$adlt=$row['adlt'];
	$seats=$row['seats'];
	$bsid=$row['bsid'];
	$frmid="57";
}
else
{
	$id=0;
	$fnm="";
	$lnm="";
	$eml="";
	$adds="";
	$cty="";
	$adlt="";
	$seats="";
	$bsid="";
	$frmid="7";
}

 ?>	     
<html lang="en">

      
        <div class="page-wrapper">
            
            <div class="row page-titles">
     
              <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">ADD BOOKING </h4>
                           
                            <form class="form-horizontal m-t-40" action="save.php" method="GET">
                                <div class="form-group">
                                    <label>First Name <span class="help"> </span></label>
                                    <input type="hidden" class="form-control" name="femid" value="<?php echo $frmid;?>">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                                    <input type="text" class="form-control" name="firstname" value="<?php echo $fnm;?>">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">Last name<span colass="help"</span></label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo $lnm;?>">
                                </div>
								<div class="form-group">
                                    <label for="example-email">Email Id<span class="help"</span></label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $eml;?>">
                                </div>
								<div class="form-group">
                                    <label for="example-email">Address<span class="help"</span></label>
                                    <input type="text" class="form-control" name="Address" value="<?php echo $adds;?>">
                                </div>
								
								<div class="form-group">
                                    <label for="example-email">Town/city<span class="help"</span></label>
                                    <input type="text" class="form-control" name="cty" value="<?php echo $cty;?>">
                                </div>
								
								<div class="form-group">
                                    <label for="example-email">Total Adults<span class="help"</span></label>
                                    <input type="text" class="form-control" name="adlt" value="<?php echo $adlt;?>">
                                </div>							
														
								<div class="form-group">
                                    <label for="example-email">Seats<span class="help"</span></label>
                                    <input type="text" class="form-control" name="seat" value="<?php echo $seats;?>">
                                </div>
                               	<div class="form-group">
                                    <label for="example-email">BUS ID<span class="help"</span></label>
                                    <input type="text" class="form-control" name="bsid" value="<?php echo $bsid;?>">
                                </div>
                               
                               
                                <div class="form-group">
                                   
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                       
                                        <span class="input-group-addon btn btn-secondary btn-file"> 
                                           <input type="submit" value="save">Save</input>
                                        </span>
									</div>
                              
                            </form>
                        </div>
                    </div>
                </div>			

     <?php
include('footer.php');
?>