<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	


    <title>L-earn | Statistics</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome-animation.min.css">


    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
	<style>

      #map {
        height: 400px;
      }
    </style>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img id="smalllogo" class="hide" src="images/logosmall.png" alt="L-earn"></i> <img id="biglogo" src="images/logo.png" alt="L-earn"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/profile_tutor.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Peter [Tutor]</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
					<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="notification.php"><i class="fa fa-envelope-o"></i> Notification</a></li>
					<li><a href="#"><i class="fa fa-clock-o"></i> History</a></li>
					<li><a href="Statistics.php"><i class="fa fa-line-chart"></i> Statistics</a></li>
					
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/profile_tutor.png" alt="">Peter [Tutor]
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="#"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/profile_smith.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/profile_smith.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/profile_smith.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/profile_smith.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Skills Heat Map</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
				
					<div class="col-md-12 col-sm-12 col-xs-12">
					
						<div id="map"></div>
						
						
					</div>

					
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Rights reserved by L-earn
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	<script src="js/pagescripts.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		var map;
		var infoWindow;
		
		google.charts.load('current', {'packages':['corechart']});
		//google.charts.setOnLoadCallback(drawChart);

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 5,
				center: {lat: 2.923841, lng: 101.6400315},
			});
		  
			map.data.loadGeoJson('geodata/SkillbyCountry.json');
		  
			map.data.setStyle(function(feature) {
				var color = 'red';
				if (feature.getProperty('color')) {
					color = feature.getProperty('color');
				}
				return /** @type {google.maps.Data.StyleOptions} */({
					fillColor: color,
					strokeColor: color,
					strokeWeight: 1
				});
			});
		  
			map.data.addListener('click', function(event) {
				PlotStatistics(event);
			});
			
			// map.data.addListener('mouseover', function(event) {
				// var label = event.feature.getProperty('label');
				// var totalTrans = event.feature.getProperty('TransactedAmountSum');
				
				// infoWindow.setContent("State : " + label + "</br>Total Count : " + totalTrans);
				// infoWindow.setPosition(event.latLng);
				// infoWindow.open(map);
			// });

		  
			map.addListener('zoom_changed', function() {
				ReloadMapData();
			});
			
			infoWindow = new google.maps.InfoWindow;
		}
		
		var isCountryLayerLoaded = true;
		var isStateLayerLoaded = false;
		var isTownLayerLoaded = false;
		
		function ReloadMapData()
		{
			var zoomLevel = map.getZoom();
			//console.log('zoom Level : ' + zoomLevel);
			
			if(zoomLevel >= 9)
			{
				if(!isTownLayerLoaded)
				{
					isCountryLayerLoaded = false;
					isStateLayerLoaded = false;
					
					//remove existing
					map.data.forEach(function(feature) {
						map.data.remove(feature);
					});
					
					//load by town
					map.data.loadGeoJson('geodata/SkillbyTown.json');
					isTownLayerLoaded = true;
				}
			}
			else if(zoomLevel >= 7)
			{
				if(!isStateLayerLoaded)
				{
					isCountryLayerLoaded = false;
					isTownLayerLoaded = false;
					
					//remove existing
					map.data.forEach(function(feature) {
						map.data.remove(feature);
					});
					
					//load by state
					map.data.loadGeoJson('geodata/SkillbyState.json');
					isStateLayerLoaded = true;
				}
			}
			else
			{
				if(!isCountryLayerLoaded)
				{
					isTownLayerLoaded = false;
					isStateLayerLoaded = false;
					
					//remove existing
					map.data.forEach(function(feature) {
						map.data.remove(feature);
					});
					
					//load by country
					map.data.loadGeoJson('geodata/SkillbyCountry.json');
					isCountryLayerLoaded = true;
				}
			}
		}

		function PlotStatistics(event)
		{
			var label = event.feature.getProperty('label');
			
			var topsales_area = event.feature.getProperty('TopSales_Area');
			var topsales_price = event.feature.getProperty('TopSales_Price');
			
			var toprental_area = event.feature.getProperty('TopRental_Area');
			var toprental_price = event.feature.getProperty('TopRental_Price');
			
			var listing_sell = event.feature.getProperty('Listing_SELL');
			var listing_rent = event.feature.getProperty('Listing_RENT');
			
			var search_price = event.feature.getProperty('Search_PRICE');
			var search_size = event.feature.getProperty('Search_SIZE');
			
			//console.log('label : ' + label);
			$("#modalHeader").html('Analysis for (' + label + ')');
			
			drawTopSalesChart(topsales_area, topsales_price);
			drawTopRentChart(toprental_area, toprental_price);
			drawPropTypeChart(listing_sell, listing_rent);
			drawPropSearchChart(search_size, search_price);
			
			$("#myModal").modal("show");
			//document.getElementById('info-box').textContent = event.feature.getProperty('letter');
		}


		function drawPropTypeChart(saleCount, rentCount) {

			var arrayData = new Array();
			arrayData.push(['Property Type', 'Available Units']);
			arrayData.push(['For Sales', parseInt(saleCount)]);
			arrayData.push(['To Rent', parseInt(rentCount)]);
			
			var data = google.visualization.arrayToDataTable(arrayData);
			var options = {
				title: 'Available Listings',
				colors: ['blue', 'green', 'red', 'green', 'yellow', 'gray'],
				//legend: { position: 'right', alignment: 'center' },
				legend: 'labeled', pieSliceText: 'none',
				slices: {0: {offset: 0.2}},
				width: 560,
				height: 250,
				is3D:false,
			};

			var chart = new google.visualization.PieChart(document.getElementById('chart3'));

			//console.log('Chart : ' + chart);
			chart.draw(data, options);
		}
		
		function drawPropSearchChart(sizeCount, priceCount) {

			var arrayData = new Array();
			arrayData.push(['Search Key', 'Result Count']);
			arrayData.push(['Price', parseInt(priceCount)]);
			arrayData.push(['Size', parseInt(sizeCount)]);
			
			var data = google.visualization.arrayToDataTable(arrayData);
			var options = {
				title: 'Search Creteria',
				colors: ['purple', 'orange', 'red', 'green', 'yellow', 'gray'],
				//legend: { position: 'right', alignment: 'center' },
				legend: 'labeled', pieSliceText: 'none',
				width: 560,
				height: 250,
				pieHole: 0.4,
				slices: {1: {offset: 0.2}},
				is3D:false,
			};

			var chart = new google.visualization.PieChart(document.getElementById('chart4'));

			//console.log('Chart : ' + chart);
			chart.draw(data, options);
		}
		
		function drawTopSalesChart(areaCollection, priceCollection) {

			console.log('price: '+priceCollection);
			var areaArray = areaCollection.split(","); 
			var priceArray = priceCollection.split(","); 
			
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Area');
			data.addColumn('number', 'Price');

			for(var i=0; i < areaArray.length; i++)
			{
				var dataValue = 0;				
				if(priceArray[i] !== 'undefined')
				{
					dataValue = parseInt(priceArray[i]);
				}
				data.addRows([
					[areaArray[i], dataValue]
				]);

			}
			var options = {
				title: 'Top Sales',
				is3D:true,
				colors: ['blue', 'red', 'black', 'green', 'yellow', 'gray'],
				legend: { position: 'none', alignment: 'center' },
				width: 560,
				height: 250,
				hAxis: {title: "" , direction:1, slantedText:true, slantedTextAngle:340 }
			};
			
			var chart = new google.visualization.ColumnChart(document.getElementById('chart1'));
			chart.draw(data, options);
		}
		
		function drawTopRentChart(areaCollection, priceCollection) {

			console.log('price: '+priceCollection);
			var areaArray = areaCollection.split(","); 
			var priceArray = priceCollection.split(","); 
			
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Area');
			data.addColumn('number', 'Price');

			for(var i=0; i < areaArray.length; i++)
			{
				var dataValue = 0;				
				if(priceArray[i] !== 'undefined')
				{
					dataValue = parseInt(priceArray[i]);
				}
				data.addRows([
					[areaArray[i], dataValue]
				]);

			}
			var options = {
				title: 'Top Rental',
				is3D:true,
				colors: ['green', 'red', 'black', 'green', 'yellow', 'gray'],
				legend: { position: 'none', alignment: 'center' },
				width: 560,
				height: 250,
				hAxis: {title: "" , direction:1, slantedText:true, slantedTextAngle:340 }
			};
			
			var chart = new google.visualization.ColumnChart(document.getElementById('chart2'));
			chart.draw(data, options);
		}
	  
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsTOH6ts-oJ7XpvJ6wEcXHYDKDhGSVx-w&callback=initMap"async defer></script>	
  </body>
</html>
