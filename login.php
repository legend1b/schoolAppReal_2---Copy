<!DOCTYPE html>
<html>
<head>
    <title>Blank Cordova Mobile App Project Template (Lite)</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link href="material/materialize.min.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
    <style>
        @-ms-viewport { width: 100vw ; zoom: 100% ; }  @viewport { width: 100vw ; zoom: 100% ; }
        @-ms-viewport { user-zoom: fixed ; }           @viewport { user-zoom: fixed ; }
		body{
    background-image: url("images/o.png");
    background-repeat: no-repeat;
    background-position: top;
    background-attachment: fixed;
	margin:auto;
	}
		#loader{
			width:100%;
			height:100%;
			position:absolute;
			z-index:10001;
			background-color:#ffffff;
			}
		#loader2{
			width:100%;
			height:100%;
			position:absolute;
			z-index:10001;
			background-color:#ffffff;
			opacity:0.8;
			}
    </style>
	<script>
	window.addEventListener('load',function(){
		var loader = document.getElementById("loader");
		document.body.removeChild(loader);
	});
	</script>
	<script src="scripts/javascript.js"></script>
</head>

<body>
	<div id="loader">
		<center>
				<img style="margin-top:60%;" src="images/wheel.gif" height="40" width="auto"/>
		</center>
	</div>
	<div id="loader2" style="display:none;">
		<center>
			<img style="margin-top:60%;" src="images/wheel.gif" height="40" width="auto"/>
		</center>
	</div>
	<script src="material/jquery.min.js"></script>
	<script src="material/materialize.min.js"></script>
	<script src="scripts/javascript.js"></script>
	<script src="material/jquery.min.js"></script>
	<!--header id="header" style='-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;'>
<img src="images/appbar.home.garage.png" data-activates="slide-out" class="button-collapse himg " id="himg" height="35" width="auto" />		
			<p style='color:#FFFFFF;padding-top:12px;padding-left:20px;font-size:15px;'>StackedTrack</p>
	</header-->
	<br /><br /><br /><br />

<?php
	include("connect.php");
?>


	
<?php

if (isset($_POST["user_login"]) && isset($_POST["password_login"])) {
	$user_log = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_login"]);
    $password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password_login"]);
	
    $sql = $conn->query("SELECT * FROM studreg WHERE username='$user_log' AND password='$password_login' ");
	$userCount = $sql->num_rows;
	if ($userCount == 1) {
		while($row = $sql->fetch_array()){ 
             $id = $row["id"];
	}
		 $_SESSION["user_log"] = $user_log;
		 header("location: main.php");
         exit();
		} 
		elseif($userCount == 0) {
		$studsuc = "<p style='color:#01B1E2;font-size:14px;text-align:center;'>Incorrect information, try again</p>";
		
	}
}
else{
}
?>
<center>
	<p style='color:#01B1E2;font-size:22px;font-family:cursive;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;'>Login</p><br />

	<form method="post" action="login.php">
		<div class="row">
			<div class="col s2"></div>
			<div class="input-field col s8">
			  <i class="material-icons prefix"><img src="images/user2.png" height="40" width=""/></i>
			  <input id="icon_telephone" style=" border-bottom: 1px solid #01B1E2;box-shadow: 0 1px 0 0 #01B1E2;color: #01B1E2;" name="user_login" type="tel" class="validate">
			  <label for="icon_telephone" style=" color: #01B1E2;">Username</label>
			</div>
			<div class="col s2"></div>
		</div>
		<div class="row">
			<div class="col s2"></div>
			<div class="input-field col s8">
			  <i class="material-icons prefix"><img src="images/pass.png" height="40" width=""/></i>
			  <input id="icon_telephone" style=" border-bottom: 1px solid #01B1E2;box-shadow: 0 1px 0 0 #01B1E2;color: #01B1E2;" name="password_login" type="password" class="validate">
			  <label for="icon_telephone" style=" color: #01B1E2;">Password</label>
			</div>
			<div class="col s2"></div>
		</div>
		<?php echo @$studsuc; ?>
		<button class="waves-effect waves-light btn-large loads" id="cagain" style=" background-color:#01B1E2;" name="button" type="submit">Login</button>
	</form>
</center>
<script type="text/javascript">
$(document).ready(function(){
	document.getElementById("cagain").addEventListener("click", function(){
			 $.ajax({
				url: "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js",
				timeout: 10000,
				error: function(jqXHR) { 
					if(jqXHR.status==0) {
						location.replace("connection.html");
					}
				},
				success: function() {
				//location.replace("login.php");
			}
		 });
		
		});
	});
</script>
<br /><br /><br /><br />
<p style="text-align:center;color:#01B1E2;font-family:cursive;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;">A StackedHub Technology</p>
 </body>
</html>