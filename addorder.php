<?php
session_start();
$ip=$_SERVER['REMOTE_ADDR'];
//      $mac = shell_exec('arp '.$ip.' | awk \'{print $4}\'');
      if(!isset($_SESSION["ip"]) && !isset($_SESSION["uname"])) {
	      echo '<script type="text/javascript">
	                 window.location = "login.php"
	            </script>';
      }
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CIP Project</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
		<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
		<script>
			function plus()
			{
			  	var table = document.getElementById("example");
				if (table != null) {
				    for (var i = 0; i < table.rows.length; i++) {
				        
				        table.rows[i].onclick = function () {
				            tableText(this);
				        };
				    }
				}
			}
			function tableText(tableCell) {
			    alert(tableCell.innerHTML);
			}
			  
  			</script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="#" height="35" alt="CIP Project" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Welcome[<b><?php echo $_SESSION["uname"] ?></b>]</span>
								<span class="role">User</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Welcome</span>
										</a>
									</li>
									<li>
										<a href="previousorder.php">
											<span class="pull-right label label-primary">5</span>
											<i class="fa fa-history" aria-hidden="true"></i>
											<span>Previous Orders</span>
										</a>
									</li>
									<li>
										<a href="addorder.php">
											<i class="fa fa-cutlery" aria-hidden="true"></i>
											<span>Add Order</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Welcome</h2>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-12">
							<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>
						
										<h2 class="panel-title">Menu</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered mb-none" id="example">
												<thead>
													<tr>
														<th>Food Name</th>
												        <th>Time Taken</th>
												        <th>Cost(per piece)</th>
												        <th>Minus</th>
												        <th>No. of items</th>		     			      
												        <th>Add</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$servername = "localhost";
													$username = "root";
													$password = "root";
													$dbname = "cipproject";

													// Create connection
													$conn = new mysqli($servername, $username, $password, $dbname);
													// Check connection
													if ($conn->connect_error) {
													     $errors='2';
													} 
													$sql = "SELECT * FROM menucard";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc()) {
														if(($row["choice"] == 0))
												     	{
												     		echo "
												     				<tr>
															        <td>".$row["food"]."</td>
															        <td>".$row["time"]."</td>
															        <td>".$row["cost"]."</td>
														    		<td><button type=\"button\" class=\"btn btn-danger disabled\" field=\"quantity\">-</button></td>
														    		<td><input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"0\" id=\"qty\" /></td>
														    		<td><button type=\"button\" class=\"btn btn-success disabled\" field=\"quantity\" >+</button></td>
												        			</tr>
												         ";
												     	}
												     	else
												     	{
												         echo "
												         			<tr onclick=\"plus()\">
															        <td>".$row["food"]."</td>
															        <td>".$row["time"]."</td>
															        <td>".$row["cost"]."</td>
														    		<td><button type=\"button\" class=\"btn btn-danger\" field=\"quantity\">-</button></td>
														    		<td><input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"0\" id=\"qty\" /></td>
														    		<td><button type=\"button\" class=\"btn btn-success\" field=\"quantity\">+</button></td>
															      	</tr>
												         ";
												         }
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</section>
						</div>
					</div>
					<div class="row">
					</br>
						<div class="col-md-3">
							<button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">
							<i class="fa fa-spoon"></i> Order
							</button>
						</div>
						<div class="col-md-3">
							<button type="button" class="mb-xs mt-xs mr-xs btn btn-danger btn-block">
							<i class="fa fa-times"></i> Cancel
							</button>
						</div>
					</div>
			<!-- end: page -->
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>