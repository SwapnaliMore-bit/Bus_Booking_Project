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
                    <h3 class="text-themecolor">ALL BOOKING</h3>
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
                                <h4 class="card-title">Booking </h4>
                                <h6 class="card-subtitle">Data for booking </h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last name</th>
                                                <th>Email Id</th>
												<th>Address</th>
												<th>Town/city</th>
												<th>Total Adults</th>
												<th>Seats</th>
												
                                            </tr>
                                        </thead>
                                     
              	 <tbody>
                           <?php 
		@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
		mysql_select_db('busbooking')or die('cannot select DB');

		$sql="SELECT * FROM booknw";
        $result=mysql_query($sql);
		if($result==false ){die(mysql_error());}
        $row = mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		for($i=0;$i<$count;$i++)
			{
				$id=$row['id'];
					echo"          
									 
                                            <tr>
                                                
                                                <td>".$row['fnm']."</td>
                                                <td>".$row['lnm']."</td>
												<td>".$row['eml']."</td>
												<td>".$row['adds']."</td>
												<td>".$row['cty']."</td>
												<td>".$row['adlt']."</td>
												<td>".$row['seats']."</td>
											<td><a href='addbooking.php?id=".$id."'> Update </a></td>
                                                <td><a href='save.php?femid=106&id=".$id." '> Delete </a></td>
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