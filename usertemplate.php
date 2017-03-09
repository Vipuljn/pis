<?php
session_start();

?>
<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<title>Personal Information System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  <!--h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;-->
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }

html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" class="w3-light-grey">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Personal Information System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
		<li><a href="#myModal" data-toggle="modal">Sign up</a></li>       
		<li><a href="pisnewhome.php">LOGOUT</a></li>
		
      </ul>
    </div>
  </div>
</nav>
<!-- Top container -->
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-right">Logo</span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/team/fpo_avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Welcome, <strong><?php echo $_SESSION["uname"]; ?></strong></span><br>
      <!--<a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>-->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>  
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"href="#">Personal Information <span class="caret"></span></a>
     <ul class="dropdown-menu">
	<li><a href="#basic information" class="w3-padding" onclick="showPanel1();"><span class="glyphicon glyphicon-edit"></span>Basic Information</a></li>
  <li><a href="#qualifications" class="w3-padding" onclick="showPanel2();"><span class="glyphicon glyphicon-file"></span>Qualifications </a></li>
  <li><a href="#dependents" class="w3-padding" onclick="showPanel3();"><i class="fa fa-users fa-fw"></i>Dependents</a></li>
  <li><a href="#emergenceyconatcts" class="w3-padding" onclick="showPanel4();"><span class="glyphicon glyphicon-bullhorn"></span>Emergency Contacts</a></li>
  </ul>
  <li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"href="#">Finance <span class="caret"></span></a>
     <ul class="dropdown-menu">
  <li><a href="#salary" class="w3-padding" onclick="showPanel5();"><i class="fa fa-diamond fa-fw"></i>Salary</a></li>
  <li><a href="#loan" class="w3-padding" onclick="showPanel7();"> <span class="glyphicon glyphicon-road"></span>Loan</a></li>
  </ul>
  </li>
  <a href="#subordinates" class="w3-padding" onclick="showPanel8();"><span class="glyphicon glyphicon-picture"></span>Subordinates</a>
  </nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i>Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-14 ">
        <div class="w3-left"><p><span class="glyphicon glyphicon-edit"></span></p></div>
		 
        <div class="w3-right">
          <h2>1</h2>
        </div>
        <div class="w3-clear"></div>
        <h5><b> Basic Information</b></h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-14">
        <div class="w3-left"><span class="glyphicon glyphicon-file"></span></div>
        <div class="w3-right">
           <h2>2</h2>
        </div>
        <div class="w3-clear"></div>
        <h5>Qualifications</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-14">
        <div class="w3-left"><span class="glyphicon glyphicon-bullhorn"></span></div>
        <div class="w3-right">
          <h2>3</h2>
        </div>
        <div class="w3-clear"></div>
        <h5>Dependents</h5>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-14">
        <div class="w3-left"><span class="glyphicon glyphicon-user"></span></div>
        <div class="w3-right">
           <h2>4</h2>
        </div>
        <div class="w3-clear"></div>
        <h5>Users</h5>
      </div>
    </div>
  </div>
	
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">
    
			 
		     </div>
     </div>
	 <!-- Modal 2-->
	 <div id="myModal" class="modal fade"  role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">  
					<button type="button" class="close" data-dismiss="modal">×</button>		
					<h4>REGISTER HERE</h4>
				</div>
				<div class="modal-body">
					 <form id="main-signup-form" onsubmit="return valid()" autocomplete="on" name="data" method="post" action="signup.php">
							<div class="form-group">
                                 <b> IC NO.</b><font color="red">*</font> <input type="text" name="icno"  class="form-control" placeholder="IC No." required/>
                               </div> 
							<div class="form-group">
                                 <b> User Name</b><font color="red">*</font> <input type="text" name="uname"  class="form-control" placeholder="User Name" required/>
                               </div> 
								<div class="form-group">
                                  <b> Password</b><font color="red">*</font> <input type="password" name="psw" id="psw" class="form-control" placeholder="Password" required/>
                                </div>
		
		</div>
	</div>
	</div>
	</div>
	
	
 <section id="basic information">
        <iframe src="usermom.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section>

<section id="qualifications">
        <iframe src="usernoticecircular.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section> 
 
 <section id="dependents">
        <iframe src="usercashcollection1.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section>
 
 <section id="emergenceyconatcts">
        <iframe src="complaint1.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section>
 
 <section id="salary">
        <iframe src="Salarys1.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section>
 
 <section id="loan">
        <iframe src="viewparkbooking.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section>
 
 <section id="subordinates">
        <iframe src="parkingsticker.php" style="border:none;" height="400" width="100%" class="section-title text-center"></iframe>
 </section>

 


<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}

function showPanel1()
{
document.getElementById('basic information').style.display = "";
document.getElementById('qualifications').style.display = "none";
document.getElementById('dependents').style.display = "none";
document.getElementById('emergenceyconatcts').style.display = "none";
document.getElementById('Salary').style.display = "none";
document.getElementById('loan').style.display = "none";
document.getElementById('subordinates').style.display = "none";
}
function showPanel2()
{
document.getElementById('basic information').style.display = "none";
document.getElementById('qualifications').style.display = "";
document.getElementById('dependents').style.display = "none";
document.getElementById('emergenceyconatcts').style.display = "none";
document.getElementById('salary').style.display = "none";
document.getElementById('loan').style.display = "none";
document.getElementById('subordinates').style.display = "none";
}
function showPanel3()
{
document.getElementById('basic information').style.display = "none";
document.getElementById('qualifications').style.display = "none";
document.getElementById('dependents').style.display = "";
document.getElementById('emergenceyconatcts').style.display = "none";
document.getElementById('salary').style.display = "none";
document.getElementById('loan').style.display = "none";
document.getElementById('subordinates').style.display = "none";

}
function showPanel4()
{
document.getElementById('basic information').style.display = "none";
document.getElementById('qualifications').style.display = "none";
document.getElementById('dependents').style.display = "none";
document.getElementById('emergenceyconatcts').style.display = "";
document.getElementById('salary').style.display = "none";
document.getElementById('loan').style.display = "none";
document.getElementById('subordinates').style.display = "none";
}
function showPanel5()
{
document.getElementById('basic information').style.display = "none";
document.getElementById('qualifications').style.display = "none";
document.getElementById('dependents').style.display = "none";
document.getElementById('emergenceyconatcts').style.display = "none";
document.getElementById('salary').style.display = "";
document.getElementById('loan').style.display = "none";
document.getElementById('subordinates').style.display = "none";
function showPanel6()
{
document.getElementById('basic information').style.display = "none";
document.getElementById('qualifications').style.display = "none";
document.getElementById('dependents').style.display = "none";
document.getElementById('emergenceyconatcts').style.display = "none";
document.getElementById('salary').style.display = "none";
document.getElementById('loan').style.display = "";
document.getElementById('subordinates').style.display = "none";
}
function showPanel7()
{
document.getElementById('basic information').style.display = "none";
document.getElementById('qualifications').style.display = "none";
document.getElementById('dependents').style.display = "none";
document.getElementById('emergenceyconatcts').style.display = "none";
document.getElementById('salary').style.display = "none";
document.getElementById('loan').style.display = "none";
document.getElementById('subordinates').style.display = "";
}
</script>

</body>
</html>

