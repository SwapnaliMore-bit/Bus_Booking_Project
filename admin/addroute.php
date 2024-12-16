<?php
include('header.php');
include('topnavbar.php');
include('menu.php'); 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');

	$sql="SELECT * FROM route_table where id='$id'";
	$result=mysql_query($sql);
	if($result==false ){die(mysql_error());}
	$row = mysql_fetch_array($result);
		
	$routnm=$row['route_name'];
	$routefrom= $row['from_destination'];
	$routeto=$row['to_destinstion'];
	$routedesc=$row['route_description'];
	$routedura=$row['time_duration'];
	$routestop=$row['stops'];
	$frmid="52";
}
else
{
	$id=0;
	$routnm="";
	$routefrom="";
	$routeto="";
	$routedesc="";
	$routedura="";
	$routestop="";
	$frmid="";
}
?>

 <div class="page-wrapper">
            <div class="row page-titles">
               
                
                <div class="">
                    <!--<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>-->
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<button class="btn btn-danger btn-sm pull-right collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> SUBMIT <i class="ti-angle-down"></i></button>-->
                                <h4 class="card-title">ADD ROUTE</h4>
                                <!--<h6 class="card-subtitle"> All bootstrap element classies </h6>-->
                                <div class="collapse" id="collapseExample" aria-expanded="false">
                                  
                                </div>
                               <form class="form-horizontal m-t-40" action="save.php" Method="GET">
                                 <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">FROM</label>
                                        <div class="col-md-10">
                                          <input type="hidden" name="femid" class="form-control" value="3">
                                      <input class="form-control" type="text" name="frm" value="" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">TO</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="too" type="search" value="" id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Route Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="rtnm" type="search" value="" id="example-search-input">
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Total Distance</label>
                                        <div class="col-md-10">
                                            <input class="form-control"  name="distnce" type="text" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Total Stops</label>
                                        <div class="col-md-10">
                                            <input class="form-control"  name="stops" type="text" value="" >
                                        </div>
                                    </div>
                                  
                                    
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Journy Time</label>
                                        <div class="col-md-10">
                                            <input class="form-control"  name="duratiom" type="text" value="" >
                                        </div>
                                    </div>
                                  
                                    
                                     <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                       <input type="submit" value="save"></input>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
	
     <?php
include('footer.php');
?>