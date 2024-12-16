<?php 
include('head.php');
include('menu1.php');?>

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
			 <!-- first content_start -->
            <div id="building_search" class="main_content_form">
			 <!-- tab_search form start -->
			 <form action="allbus.php" method="GET">
				<div class="pull_left destination_field">
				 <label>From</label>
					<input type="text" placeholder="From" name="frm">
					<input type="hidden" placeholder="From" name="femid" value="1">
				</div>
				<div class="pull_left destination_field">
				 <label>To</label>
					<input type="text" placeholder="To" name="to">
				</div>
				<div class="pull_left check_in_field">
				<label>Date</label>
					<input type="text" id="Check_in_date_tab" name="dt" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="pull_left room_select_field">
				<label>Seat</label>
					<select  class="form-control selectpicker" data-live-search="true" name="seat" id="search_seat" >
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="4">05</option>
						<option value="4">06</option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>
				<div class="pull_left submit_field">
					<!--<input type="search" placeholder="SEARCH" class="search_tabs">-->
					<input type="submit"  class="btn" value="SUBMIT" ></input>
				</div>
				</form>
				<!-- tab_search form End -->
            </div>
			<!-- first content_end -->
			</div>
		</div>
	</div><br>
	
			<aside 
            <br> <h4 class="widget-title">TOP ROUTE</h4><br>
            <ul>
              <li><a href="">kolhapur to pune</a></li><br>
              <li><a href="">kolhapur to sangli</a></li><br>
              <li><a href="">kolhapur to satara</a></li><br>
            </ul>
          </aside>


<?php include('footer.php');
?>
