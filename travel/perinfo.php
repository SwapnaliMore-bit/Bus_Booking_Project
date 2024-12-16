<?php 
include('head.php');
//include('menu1.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
}
else
{
	$id=1;
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
                   <!--  tab inner section three Start -->
                  <div class="inner_container">
                    <form method="GET" action="save.php">
                      <div class="tab_inner_section inner_section_2 flight_inner_section">
                        <div class="tab_inner_body full_width"> 
                          <!-- package_booking_form start -->
                          <div class="package_booking_form">
                            <div class="col-lg-6 col-md-6">
                              <input type="hidden" placeholder="First Name" name="femid"  value="1"></input>
                              <input type="hidden" placeholder="First Name" name="bsid" value="<?php echo $id?>"></input>
                              <input type="text" placeholder="First Name" name="firstname" class="booking_input"></input>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Last Name" name="lastname" class="booking_input"></input>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="email" placeholder="Email" name="email" class="booking_input"></input>
                            </div>
                             <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Address" name="Address" class="booking_input"></input>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Town/City" name="cty" class="booking_input"></input>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Total Adults" name="adlt" class="booking_input"></input>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Seats" name="seat" class="booking_input"></input>
                            </div>
                            <div class="col-lg-12">
                              <textarea placeholder="Special Requirement" class="booking_textarea" ></textarea>
                            </div>
                          </div>
                          <!--  package_booking_form END --> 
                        </div>
                        <!--  tab_inner_body end -->
                        
                        <div class="checkbox_book top_margin">
                          <input id="check1" type="checkbox" name="check" value="check1">
                          <label for="check1">I want receive  promotional and offers in the future</label>
                        </div>
                      </div>
                      <!--  tab inner three section End --> 
                      <!-- proceed button -->
                      <div class="full_width t_align_c">
                        <button type="submit" value="proceed to next step" class="btn_green proceed_buttton btns">Book Now</button>
                      </div>
                      
                      <!-- proceed button -->
                    </form>
                  </div>
                  <!--  inner container end --> 
               </div>
			  </div>
			  </div>
			  </div>
			  </div>
<?php include('footer.php');
?>