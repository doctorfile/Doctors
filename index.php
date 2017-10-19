
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>Doctor File Directories</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,700italic,900' rel='stylesheet' type='text/css'> -->
<link href="css/roboto.min.css" rel="stylesheet" type="text/css" />



<!-- CSS Stylesheets -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<link href="bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

<link href="css/dropdowns-enhancement.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />



<link href="css/select2.css" rel="stylesheet" type="text/css" />

<link href="css/doctors_search_form.css" rel="stylesheet" type="text/css" />

<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
 
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- CSS Stylesheets -->

<!-- script -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="js/moment.min.js" type="text/javascript"></script>
<script src="js/moment-with-locales.min.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="js/dropdowns-enhancement.js" type="text/javascript"></script>
<script src="js/jquery.matchHeight-min.js" type="text/javascript"></script>

<script src="js/typeahead.min.js" type="text/javascript"></script>
<script src="js/jssocials.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>


<script>
	var BASE_URL = "";
</script>
<script src="js/maincore.js" type="text/javascript"></script>
<!--script -->

<link rel="canonical" href="#" />
		<meta name="keywords" content="" />
		<meta name="robots" content="index, follow" />
		<meta name="description" content="" />

<script>
	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80647521-1', 'auto');
  ga('send', 'pageview');


</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
			
	</head>
	<body>
	<?php
	include ('config.php');
	session_start();

	?>


		<div id="wrapper">
		<!-- Sidemenu -->
			<div id="sidemenu-wrapper" class="">
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less-->
		<section class="sidebar">
		  <!-- sidebar menu: : style can be found in sidebar.less -->
		  <ul class="sidebar-menu">
			<!-- <li class="header">MAIN NAVIGATION</li> -->
							<li class="">
			  <a href="hospital.php">
									<img src="img/thumb/fill-hospital.png" class="normal no-downloaders-restriction">
					<img src="img/thumb/fill-hospital1.png" class="active no-downloaders-restriction">
					<img src="img/thumb/fill-hospital1.png" class="placeholder">
							  </a>
			</li>	

									<li class="">
			  <a href="category.php">
									<img src="img/thumb/fill-category.png" class="normal no-downloaders-restriction">
					<img src="img/thumb/fill-category1.png" class="active no-downloaders-restriction">
					<img src="img/thumb/fill-category1.png" class="placeholder">
							  </a>
			</li>
									
									<li class="">
			  <a href="doctor.php">
									<img src="img/thumb/fill-doctor.png" class="normal no-downloaders-restriction">
					<img src="img/thumb/fill-doctor1.png" class="active no-downloaders-restriction">
					<img src="img/thumb/fill-doctor1" class="placeholder">
							  </a>
			</li>
									
								
					  </ul>
		</section>
		<!-- /.sidebar -->
	</aside>
</div>
<div class="fader"></div>
<style type="text/css">
	.glyphicon-chevron-down{vertical-align: middle !important;margin-left: 50%;}
	@media(max-width: 991px) {
		#sidemenu-wrapper {width: 150px; left: -160px;transition: all ease .25s; -webkit-transition: all ease .25s;z-index: 1032;}
		.show-menu #sidemenu-wrapper {left: 0;overflow-y: auto;}
		.fader {position: fixed;top: 0;left: 0;right: 0;bottom: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,0.6);z-index: 1031;display: none;}
		.show-menu .fader {display: block;}
		.sidebar .sidebar-menu > li {height: auto !important;}
		.sidebar .sidebar-menu > li a {height: auto !important;}
		.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {border-color: #fff;}
	}
</style>

<script type="text/javascript">
	$(function() {
		$('.navbar-toggle').on('click', function() {
			$('html').addClass('show-menu');

		});

		$('.fader').on('click', function() {
			$('.show-menu').removeClass('show-menu');
			return false;
		});
	});
</script>




			<!-- Header -->
			<div id="navbar-main">
	<!-- Fixed navbar -->
	<div id="navigation" class="navbar navbar-inverse navbar-fixed-top">
			
		<div class="container">
			<div class="row">
				<div class="cb-header">
					<div class="navbar-header roboto-font">
						<div class="menu_icon">
							<button class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<i></i><i></i><i></i>
							</button>
						</div> <!-- menu_icon -->

						<a class="navbar-brand" href="index.php">
							<span class="vertical-helper">&nbsp;</span>
							<img class="hidden-xs hidden-sm" alt="dfd_logo.png" src="img/large/dfd-logo.png" />
		
						</a>
					</div>
												<div class="navbar-collapse navbar-right collapse text-right roboto-font">
					
						<ul class="visible-md visible-lg nav navbar-nav desktop">
							<!-- <span class="" style="position: absolute; color: #010e6f; font-weight: 700; top: 18px; margin-left: 167px;"> -->
							
											<li class="" style="font-weight:600">
								
												<a style="" href="register.php" target="" class="">

													<img src="" style="vertical-align:middle;">
													<span style="vertical-align: middle;">Register &nbsp;&nbsp;&nbsp;|</span>
												</a>

									
																	</li>
										<li class="" style="font-weight:600">
								
										<a href="login.php" target="" class="">

											<img src="" style="vertical-align:middle;">
											<span style="vertical-align: middle;">Login</span>
										</a>
									
																	</li>
																
																					</ul>
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--  -->
<!--  -->


			<!-- Content Body -->
							<div class="container content">
					<div class="row">
						<div class="cb">
							
															<!-- Load partial -->
								<div class="banner remove-margin-bottom">
	
	<div class="banner-breadcrumbs">
		<div id="breadcrumbs">
					<ul class="breadcrumbs remove-margin-bottom">
		<li><span class="fa fa-home fa-lg" style="font-size"></span></li>
						<span class="current_bc">Home</span>
			</ul>

		</div>
	</div>


		</div> <!-- banner -->
<div class="body-container">
	<br>
	<br>
	<div class="col-xs-12">
		<div class="div-title visible-xs visible-sm col-sm-12 col-xs-12">
			<span>Search</span>
					</div>
		<form action="index.php" method="GET" class="search-form">
			<div class="row">
				<div class="form-group col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<div class="input-group input-group-lg">
						<span class="input-group-addon search"><i class="fa fa-search flip-search"></i></span>
						<input type="text" name="search_home" class="form-control search-input" placeholder="Search " aria-describedby="sizing-addon1" value="">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
				  	<button class="btn btn-lg btn-default hidden-xs" id="search-button">Search</button>
				  	<button class="btn btn-lg btn-default btn-lock visible-xs" id="search-button">Search</button>
				</div>
			</div>
		</form>		
	</div>
	<div class="hidden-xs hidden-sm col-md-1 col-lg-1">
		<h1 class="rotated-title">Search</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 results">
				<div class="row">
			
			<div class="col-xs-12 col-sm-8 col-md-9 no-search-container">
				<hr class="visible-xs">
<?php 
 $con = mysqli_connect("localhost", "root", "", "test"); 

if(!empty($_GET['search_home']))
{
  $search = $_GET['search_home'];
  $sql = "SELECT *  FROM tbl_doctors WHERE CONCAT( `name`, `specialties`,`affilation`)  LIKE '%$search%'";
}
  else 
{
  $sql = "SELECT *  FROM tbl_doctors";
}

 $retval = mysqli_query($con, $sql);

 if(! $retval ) 
  {
    die('Could not get data: ' . mysqli_error($con));
  }
     elseif (mysqli_num_rows($retval) < 1)
  {
    echo "<h5 class='text-center' style='color: #000;'>Sorry your keyword doesnt match to any Doctors</h5>";
  }
    else
  {

    while($myrow = mysqli_fetch_array($retval, MYSQLI_ASSOC))
          {
			        
     
            echo "
             <form action='index.php'>
                <div class='col-xs-12 col-sm-12'>
                  <div class='col-sm-12' style=' border: 1px solid #CCC;padding : 5px 5px 0px 5px;box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); margin-top: 10px;height:100%; width:100%;	'>
                     <div class='col-sm-2'>
                      <img src='data:image/jpeg;base64,".base64_encode($myrow['image'])."' style='height: 120px;width: 120px;'/> 
                    </div>
                    <div class='col-sm-8'style='margin-left:50px;'>
                    <h5><strong> </strong>{$myrow['name']}</h5><br>
                    <h5><strong> </strong>{$myrow['specialties']}</h5>
						   
						 <div class='button-overlay hidden-xs'>
					<a style='margin-bottom:25px;background-color: #225e96;border-color: #225e96;'class='btn btn-danger' href='D1.php?id=".$myrow['id']."'>View Profile</a>
							</div>
						   
                    </div>
                                
                    </div>
                    </div>
              </form>
              ";
            }
          }
?>
			
	
			</div>
			<br clear="all">
			<br>
		</div>		
			</div>

	
</div>

<style>
.pagination > ul {padding-left: 0;}
	input::-webkit-input-placeholder {
		color:#222;
	}

	.row-adjust-20 {
		margin-right:-30px;
		margin-left:-30px;
	}

	.row-adjust-20 [class*='col-'] {
		padding-left:42px;
		padding-right:30px;
	}

	

	.result-title {
		font-weight: bold;
		font-size: 15px;
	}

	.result-intro {
		font-size:14px;
	}

	.pagination {
		float:right;
		clear:right;
	}

	h1.rotated-title {
		white-space: nowrap;
		width: 480px;
		transform: translate(-223px,230px) rotate(-90deg);
		-webkit-transform: translate(-223px,230px) rotate(-90deg);
		-moz-transform: translate(-223px,230px) rotate(-90deg);
		-ms-transform: translate(-223px,230px) rotate(-90deg);
		position: absolute;
		left: 0;
		top: 0;
		text-align: right;
		margin-bottom: 0;
		font-size: 28px;
		font-weight: 400;
		font-family: "Open Sans";
	}

	h1.rotated-title:after {
		content: ' ';
		display: inline-block;
		width: 170px;
		height: 1px;
		background-color: #010D6F;
		margin-left: 10px;
	}

 
	/*.result-item img {
		width:100%;
		padding: 0 28px 0 0;
	}*/

	.result-item p {
		margin-bottom:6px;
	}

	.row-adjust-0 [class*='col-'] {
		/*padding-left:0;*/
		/*padding-right:0;*/
	}

	/*hide no thumb container*/
	.thumb-, .thumb-dummy {
		display:none;
	}

	.thumb- + div, .thumb-dummy + div {
		width: 100% !important;
	}

	.no-search-instruction {
		font-size: 28px;
		line-height: 1em;
		margin-top: 20px;
		color: #bbb;
		font-weight: 100;
		font-family: 'Roboto', sans-serif;
	}

	.results .categories span {
    float: right;
}
</style>

<script>
	$('#search-button').on('click', function() {
		$('.search-form').trigger('submit');
	});
</script>

													</div>
					</div>
				</div>
			<!-- Footer -->
			<div class="footer_wrap">
<div id="footerwrap">
								<p>&copy;2017. Doctor File Directories.&nbsp;</p>
						
</div> <!-- footerwrap -->
</div> <!-- footer_wrap -->


<a href="#wrapper" class="btn backtotop affix" data-spy="affix" data-offset-top="500"></a>

		</div>
	</body>	
</html>