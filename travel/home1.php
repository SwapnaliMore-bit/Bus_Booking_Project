<?php 
include('head.php');
include('menu1.php');
?>


<!--page title Start-->
    <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(http://placehold.it/1599x640);">
      <ul>
        <li><a href="javascript:;">Available  bus</a></li>
      </ul>
    </div>
    <!--page title end-->
	
			  <!-- END REVOLUTION SLIDER -->
		  </article>
	  </div>
	  <!-- section end -->
  </div>
	<!-- Home first slider End -->
	<div class="home_tabs_search">
	<div class="full_width slider_form_main">
	 <div class="container">
	 <div class="row">
	 <div class="col-lg-12">
		<div class="slider_tabs">
            <div class="wsa_tab">
				<ul>
					<li> <a href="#building_search"><i class="fa fa-building-o"></i></a> </li>
					
				</ul>
            </div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<div class="full_width slider_content_wrap">
			<div class="container">
			 
            <div id="building_search" class="main_content_form">
			 <!-- tab_search form start -->
			 <form>
				<div class="pull_left destination_field">
				 <label>From</label>
					<input type="text" placeholder="From">
				</div>
				<div class="pull_left destination_field">
				 <label>To</label>
					<input type="text" placeholder="To">
				</div>
				<div class="pull_left check_in_field">
				<label>Date</label>
					<input type="text" id="Check_in_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left check_in_field">
				<label>Return Date</label>
				<input type="text" id="Check_out_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left room_select_field">
				<label>Seat</label>
					<select  class="form-control selectpicker" data-live-search="true" id="search_seat" >
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i>
					
				</div>
				<button type="button">SUBMIT</button>
				</form>
				<!-- tab_search form End -->
            </div>
			<!-- first content_end -->
			</div>
		</div>
	</div>
	
	<div class="full_width slider_content_wrap">
			<div class="container">
			 <!-- first content_start -->
            <div id="building_search" class="main_content_form">
			 <!-- tab_search form start -->
			 <form>
				<div class="pull_left destination_field">
				 <label>From</label>
					<input type="text" placeholder="From">
				</div>
				<div class="pull_left destination_field">
				 <label>To</label>
					<input type="text" placeholder="To">
				</div>
				<div class="pull_left check_in_field">
				<label>Date</label>
					<input type="text" id="Check_in_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left check_in_field">
				<label>Return Date</label>
				<input type="text" id="Check_out_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left room_select_field">
				<label>Seat</label>
					<select  class="form-control selectpicker" data-live-search="true" id="search_seat" >
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i>
					
				</div>
				<button type="button">SUBMIT</button>
				</form>
				<!-- tab_search form End -->
            </div>
			<!-- first content_end -->
			</div>
		</div>
	</div> <!-- slider_tab_main end -->



<?php include('footer.php');
?>