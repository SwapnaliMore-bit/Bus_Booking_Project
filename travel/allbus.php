<?php 
include('head.php');
include('menu1.php');
@mysql_connect('localhost', 'root', '')or die('cannot connectssss');	
	mysql_select_db('busbooking')or die('cannot select DB');

if(isset($_GET['frm']))
{
	$frm=$_GET['frm'];
	$to=$_GET['to'];
	$dt=$_GET['dt'];
	$seat=$_GET['seat'];
	$sql="SELECT * FROM dailybus WHERE froms LIKE '$frm' AND tos LIKE '$to' AND dts  LIKE '$dt'";
    $result=mysql_query($sql);
	if($result==false ){die(mysql_error());}
    $row = mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	}
else
{
	
		$sql="SELECT * FROM dailybus";
        $result=mysql_query($sql);
		if($result==false ){die(mysql_error());}
        $row = mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		
	
}?>
   <div class="clearfix"></div>
    <div class="full_width destinaion_sorting_section">
      <div class="container">
        <div class="row space_100"> 
          <!-- left sidebar start --> 
          <!-- left sidebar end --> 
          <!-- right main start -->
          <div class="col-lg-12">
            <div class="tour_package_booking_section"> 
              <!-- package tabs start -->
              <div id="tour_booking_tabs"> 
                <!-- tabs start -->
                <div class="tour_booking_tabs">
                  <ul>
                    <li><a href="#booking_details">Booking Details</a></li>
                    <li><a href="#personal_info">Personal Info</a></li>
                    <li><a href="#payment_info">Payment Info</a></li>
                    <li><a href="#confirmation">Confirmation</a></li>
                  </ul>
                </div>
                <!-- tabs end --> 
                <!-- booking_details Start -->
                <div id="booking_details" class="main_content_area hotel_main_content">
                  <div class="inner_container"> 
                    <!--  tab inner section two Start -->
                    <div class="tab_inner_section flight_inner_section">
                      <div class="heading_tab_inner">
                        <h5>Bus Details We Find Only Following Result No More Record <?php //echo $sql;?></h5>
                        <span>change Bus</span> </div>
                    <?php 
		for($i=0;$i<$count;$i++)
			{
		?>
					 <div class="tab_inner_body full_width">
                        <div class="flight_review_area full_width">
                          <div class="col-lg-10 col-md-9"> 
                            <!--  review area start -->
                            <div class="row">
                              <div class="col-lg-4 col-md-4"> <img src="images/bus2.jpg" alt="review image"> </div>
                              <div class="col-lg-8 col-md-8">
                                <div class="review_content">
                                  <div class="top_head_bar">
                                    <h4>ROUTE</h4>
                                    <span class="country_span"><?php echo $row['froms'];?> to <?php echo $row['tos'];?></span> <span class="country_span"> One Way </span> </div>
                                  <div class="review_star_cover">
                                    <div class="bottom_star_rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                    <span></span> </div>
                                </div>
                              </div>
                              <!--  review area end --> 
                            </div>
                            <!-- row --> 
                          </div>
                          <!--  col-lg-9 -->
                          
                          <div class="right_includes_flight col-lg-2 col-md-3">
                            <div class="doller_left">
                              <h2><?php echo $row['rate'];?></h2>
                              <p>/Person</p>
                            </div>
                          </div>
                        </div>
                        <!-- tab include area Start -->
                        
                        <div class="inludes_section flight_schedule_section"> <span class="emirates_button btn-yellow">SEAT -<?php echo $row['aseat'];?></span>
                          <div class="main_section_flight">
                            <div class="country_section_box">
                             
                              <h4><?php echo $row['froms'];?></h4>
                              <p class="shedule_d"><?php echo $row['sttym'];?></p>
                            </div>
                            <div class="middle_flight_section">
                              <h5><?php echo $row['dts'];?></h5>
                              <p></p>
                            </div>
                            <div class="country_section_box">
                              
                            <div class="country_section_box">
                              
                              <h4><?php echo $row['tos'];?></h4>
                              <p class="shedule_d"><?php echo $row['endtym'];?></p>
                            </div>
                          </div>
                        </div>
                        <!-- tab include area End --> 
                        <!-- tab include area Start -->
                        <div class="inludes_section">
                          <div class="flight_details_table full_width">
                            <div class="table_heding_title">Other Details</div>
                            <!-- table  start-->
                            <div class="hotel_airlines_list">
                              <div class="airline_detail_list">
                                <fieldset>
                                  <ul>
                                    <li> <span>BUS SEAT</span><span>-</span><span><?php echo $row['aseat'];?></span> </li>
                                    <li> <span>Type</span><span>-</span><span>Economy</span> </li>
                                    <li> <span>Fare type</span><span>-</span><span>Refundable</span> </li>
                                    </ul>
                                </fieldset>
                              </div>
                              <div class="airline_detail_list table_bold">
                                <fieldset>
                                  <ul>
                                    <li> <span>Baggage</span><span>-</span><span>No Extra charge</span> </li>
                                    <li> <span>Base fare</span><span>-</span><span class="bold"><?php echo $row['rate'];?></span> </li>
                                  </ul>
                                </fieldset>
                              </div>
							  
                            </div>
                            <!-- table end --> 
                          </div>
                          <!-- flight_details_table End--> 
                        </div>
                        <!-- tab include area End --> 
                      </div>
					  
                      <!--  tab inner body  End--> 
                        <?php 
						$ts= $row['id'];
						echo "<div class='heading_tab_inner'>
                        <h5> No More Record</h5>
                        <a href='perinfo.php?id=".$ts."'><span>BOOK NOW</span></a>
                  </div>";
			$row = mysql_fetch_array($result);
			
		}?>  
                    </div>
                    <!-- tab inner section end --> 
                    
                  </div>
                  <!--  inner_container --> 
                  
                  <!-- total row Start-->
                
                </div>
                </div>
                </div>
              <!-- package tabs End --> 
            </div>
            <!-- right main start --> 
          </div>
          <!-- col-lg-9-end --> 
        </div>
        <!--  row main --> 
      </div>
      <!-- container --> 
    </div>
    <!-- main wrapper -->
	
<?php include('footer.php');
?>