<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css"> 
	
	<link href="styles/style.css" rel="stylesheet">	
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg" style="background-color:#CC3366;border:0px;">
              <div class="sidebar-toggle-box">
                  <div style="color:#FFFFFF;" class="fa fa-bars tooltips " data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>STARK ADMIN</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown" style="color:#FFFFFF;">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#" style="color:#FFFFFF;">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#" style="color:#FFFFFF;">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">stark admin</h5>
              	  	
                  <li class="mt">
                      <a class="" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>students</span>
                      </a>
                      <ul class="sub">
					  <li><a  href="addstudents.php">add student</a></li>
                          <li><a  href="j1.php">jss1</a></li>
                          <li><a  href="j2.php">jss2</a></li>
                          <li><a  href="j3.php">jss3</a></li>
                          <li><a  href="s1.php">sss1</a></li>
                          <li><a  href="s2.php">sss2</a></li>
                          <li><a  href="s3.php">ss3</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Calendar</a></li>
                          <li><a  href="gallery.php">Gallery</a></li>
                          <li><a  href="setfee.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="results.php" >
                          <i class="fa fa-edit"></i>
                          <span>results</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-money"></i>
                          <span>school fees</span>
                      </a>
					   <ul class="sub">
                          <li><a  href="fees.php">Check Status</a></li>
                          <li><a  href="addpay.php">Add Payment</a></li>
                          <li><a  href="setfee.php">Set Fees</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="attendance.php" >
                          <i class="fa fa-book"></i>
                          <span>attendance</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="message.php">
                          <i class=" fa fa-envelope "></i>
                          <span>message</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="events.php" >
                          <i class=" fa fa-clock-o"></i>
                          <span>school events</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="session.php" >
                          <i class=" fa fa-plus"></i>
                          <span>create session</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
   