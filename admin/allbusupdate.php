<?php
include('header.php');
include('topnavbar.php');
include('menu.php'); ?>
          <div class="page-wrapper">
               <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">MANAGE BUS</h3>
                </div>
                
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
           <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bus Data </h4>
                                <h6 class="card-subtitle">Data table example</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Bus Number</th>
                                                <th>Bus Type</th>
                                                <th>Bus Informantion</th>
                                                <th>Bus Amenities</th>
                                                <th>Date</th>
                                                <th>Bus Seats</th>
                                                <th>Action</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
		@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
		mysql_select_db('busbooking')or die('cannot select DB');

		$sql="SELECT * FROM bus_table where is_delete='0'";
        $result=mysql_query($sql);
		if($result==false ){die(mysql_error());}
        $row = mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		for($i=0;$i<$count;$i++)
			{
			$id=$row['id'];
				
                       echo "                     <tr>
                                                <td>".$row['bus_number']."</td>
                                                <td>".$row['bus_type']."</td>
                                                <td>".$row['bis_description']."</td>
                                                <td>".$row['amenities']."</td>
                                                <td>". $row['bus_manufacturing']."</td>
                                                <td>". $row['seat_arrangement']."</td>
												<td><a href='addbus.php?id=".$id."'> Update </a></td>
                                                <td><a href='save.php?femid=101&id=".$id." '> Delete </a></td>
                                               
                                            </tr>";
			
			$row = mysql_fetch_array($result);
		}?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						</div>
                </div>
              
	
	
     <?php
include('footer.php');
?>