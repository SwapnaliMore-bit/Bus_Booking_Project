<?php
include('header.php');
include('topnavbar.php');
include('menu.php'); ?>
    
	
	
	       <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">ALL ROUTE</h3>
                </div>
                
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Route</h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>From</th>
                                                <th>TO</th>
												 <th>Route Name</th>
                                                <th>Total Distance</th>
                                                <th>Total Stops</th>
                                                <th>Jurny Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
		@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
		mysql_select_db('busbooking')or die('cannot select DB');
		
		$sql="SELECT * FROM route_table ";
		$result=mysql_query($sql);
		if($result==false ){die(mysql_error());}
        $row = mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		for($i=0;$i<$count;$i++)
			{
				$id=$row['id'];
				echo"
                                            <tr>
                                               <td>".$row['from_destination']."</td>
                                                <td>".$row['to_destinstion']."</td>
                                                <td>". $row['route_name']."</td>
                                                <td>".$row['route_description']."</td>
                                                <td>".$row['stops']."</td>
                                                <td><".$row['time_duration']."</td>
												<td><a href='addroute.php?id=".$id."'> Update </a></td>
                                                <td><a href='save.php?femid=103&id=".$id." '> Delete </a></td>
                                               
                                             </tr>";
                                          
			$row = mysql_fetch_array($result);
		}?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
           
       <?php
include('footer.php');
?>