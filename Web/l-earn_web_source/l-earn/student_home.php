<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>L-earn | Home</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="student_home.php" class="site_title"><img id="smalllogo" class="hide" src="images/logosmall.png" alt="L-earn"></i> <img id="biglogo" src="images/logo.png" alt="L-earn"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/profile_learner.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Bob [Student]</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
					<li><a href="student_home.php"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="#"><i class="fa fa-thumbs-up"></i> Recommended</a></li>
					<li><a href="student_grade.php"><i class="fa fa-trophy"></i> Grade</a></li>
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
                    <img src="images/profile_learner.jpg" alt="">Bob [Student]
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

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row top_tiles">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
				<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input  id="searchInput" type="text" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button id="searchBtn" class="btn btn-default" type="button">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
				
              </div>
            </div>
          <!-- /top tiles -->
		  
		   <div id="progressBar" class="progress hide">
			  <div class="progress-bar progress-bar-striped active" role="progressbar"
			  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
				Searching ...
			  </div>
			</div> 
		  
		  
		  <div id="searchResult" class="row hide">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Search Results</h2>
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
					
						<div class="block">
                          <div class="block_content">
                            <h2 class="title">
								  No active session with entered search keyword. Do you wish to request for New LIVE Session?
								  <button id="btnRequest" class="btn btn-success" type="button">YES</button>
							  </h2>
                          </div>
                        </div>
					</div>
					
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
		  
		  

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Active Sessions</h2>
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
				
				
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="images/samplevideo1.jpg" width="100%" height="100%" alt="Dummy Video" class="">
						<div class="block">
                          <div class="block_content">
                            <h2 class="title">
								  <a>How to bake donut?</a>
							  </h2>
                            <div class="byline">
                              <a>Jane Smith</a> <span class="pull-right">1,024 Views</span>
                            </div>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ... <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="images/samplevideo2.jpg" width="100%" height="100%" alt="Dummy Video" class="">
						<div class="block">
                          <div class="block_content">
                            <h2 class="title">
								  <a>How to repair pipe</a>
							  </h2>
                            <div class="byline">
                              <a>Pablo Aimar</a> <span class="pull-right">456 Views</span>
                            </div>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ... <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="images/samplevideo3.jpg" width="100%" height="100%" alt="Dummy Video" class="">
						<div class="block">
                          <div class="block_content">
                            <h2 class="title">
								  <a>Replacing bicycle gears</a>
							  </h2>
                            <div class="byline">
                              <a>Steve Austin</a> <span class="pull-right">24 Views</span>
                            </div>
                            <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ... <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
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
	
	<script>
		$('#searchInput').keypress(function (e) {
		  if (e.which == 13) {
			SubmitSearch();
		  }
		});
		
		$( "#searchBtn" ).click(function() {
			SubmitSearch();
		});
		
		$( "#btnRequest" ).click(function() {
			var keyText = $('#searchInput').val();
			$.ajax({
			   url: 'check_notification.php?method=InsertAlertRequest&key='+ keyText,
			   success: function (response) {
				 //do nothing
			   }
			});
			
			setTimeout(
			  function() 
			  {
				//do something special
				window.location.href = "student_grade.php";
			  }, 15000);
		});
		
		function SubmitSearch()
		{
			var keyText = $('#searchInput').val();
			
			$( "#searchResult" ).addClass( "hide" );
			if($( "#progressBar" ).hasClass( "hide" ))
			  {
				  $( "#progressBar" ).removeClass( "hide" );
			  }
			
			setTimeout(
			  function() 
			  {
				//do something special
				$( "#progressBar" ).addClass( "hide" );
			  if($( "#searchResult" ).hasClass( "hide" ))
			  {
				  $( "#searchResult" ).removeClass( "hide" );
			  }
			  }, 1000);
			  
			  
		}
	</script>
	
  </body>
</html>
