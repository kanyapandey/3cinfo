<?php include_once("header.php"); ?>
  <style>
  div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent, .tabcontent1 {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
  </style>
        <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9">
            <div class="page-header">
              <h1>
                Learn how uniquely we engage with our people
              </h1>
            </div>
            <div class="block block-border-bottom-grey block-pd-sm">
                <div id="map" style="width:850px;height:400px;background:yellow"></div>

					<script>
					function myMap() {
					var mapOptions = {
					    center: new google.maps.LatLng(51.5, -0.12),
					    zoom: 10,
					    mapTypeId: google.maps.MapTypeId.HYBRID
					}
					var map = new google.maps.Map(document.getElementById("map"), mapOptions);
					}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKqF78D6S09Bk7O8T1UKv2V3_2lncId-o&callback=myMap"></script>

					<div class="tab">
						  <button class="tablinks" onclick="openCity(event, 'London')">Thailand</button>
						  <button class="tablinks" onclick="openCity(event, 'Paris')">Malaysia</button>
						  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Singapore</button>
						</div>
						<div id="London" class="tabcontent" style="display: block;">
						  <div class="active_country_desc_lft fl">
								<h4>3C infotech Pvt. Ltd.</h4><p>Level 29 , The offices at Centralworld<br>999/9 Rama 1 Road , Pathumwan<br>Bangkok 10330<br></p><span><i class="fa fa-phone-square" aria-hidden="true"></i>+91 (79) 6608 6792</span><a class="view_map cboxElement" href="#">
								<div class="gmap_div" id="gmap_div_21">

								</div>
								</div>
						</div>

						<div id="Paris" class="tabcontent">
						  <h3>Malaysia</h3>
						  <p>Coming Soon</p> 
						</div>

						<div id="Tokyo" class="tabcontent">
						  <h3>Singapore</h3>
						  <p>Coming Soon</p>
						</div>
            </div>
          </div>
          <script>
			function openCity(evt, cityName) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(cityName).style.display = "block";
			    evt.currentTarget.className += " active";
			}
			</script>
          <!-- sidebar -->
       
        </div>
      </div>
    </div>

  <?php include_once("footer.php"); ?>