<!DOCTYPE html>
<?php
	include("connect.php");
	if (isset($_SESSION['user_log'])){
		$username = $_SESSION["user_log"];
	}
?>

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
		*{
	-webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none; 
	margin:auto;
	padding:0;
	
	}
        body{
        	
			background-image: url("images/oo2.png");
    background-repeat: no-repeat;
    background-position: left;
    background-attachment: fixed;
	margin:auto;
        }
		#loader{
			width:100%;
			height:100%;
			position:absolute;
			z-index:10001;
			background-color:#ffffff;
			opacity:0.8;
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
	
	var win_h = $(window).height();
	alert(win_h);
	var win_w = $(window).width();
	$("#loader").css('height',win_h).css('width',win_w);
	$("#loader2").css('height',win_h).css('width',win_w);
	</script>
	<script>
	window.addEventListener('load',function(){
		var loader = document.getElementById("loader");
		document.body.removeChild(loader);
	});
	$(document).ready(function(){
	$(".loads").click(function(){
			$("#loader2").show();
			});
		$('.hideside').click(function(){
			$('.button-collapse').sideNav('hide');
		});
});

	</script>
</head>

<body>
	<div id="loader" style="">
		<center>
				<img style="margin-top:55%;" src="images/wheel.gif" height="40" width="auto"/>
		</center>
	</div>
	<div id="loader2" style="display:none;">
		<center>
			<img style="margin-top:55%;" src="images/wheel.gif" height="40" width="auto"/>
		</center>
	</div>
	<script src="material/jquery.min.js"></script>
	<script src="material/materialize.min.js"></script>
	<script src="scripts/javascript.js"></script>
	<script>  
	$(document).ready(function(){
		$('select').material_select();
		$('.button-collapse').sideNav({menuWidth: 240 ,edge: 'left',closeOnClick: true});
	});
	</script>
	
	<header id="header">
		<div data-activates="slide-out" class="button-collapse himg waves-effect waves-light" id="himg" height="20" width="20">
		<img src="images/appbar.home.garage.png" height="50" width="40" />		
		</div>	
		<p style='color:#FFFFFF;padding-top:14px;padding-left:20px;font-size:15px;'>Stacked Track</p>

			<a href="logout.php" class='loads'><img src="images/appbar.connect.png" id="himg2" height="35" width="auto" /></a>

	</header><br />
	<img src="view2.png" height="" width="100%" style="border-bottom:4px solid #01B1E2;z-index:-2;"/><br /><br/>
	<ul id="slide-out" class="side-nav">
	  <li><a href="#!"><img src="images/pass.png" height="20" width=""/><span style='color:#01B1E2;font-size:14px;padding-left:10px;'>Student Info</span><img src="images/pass.png" height="20" width=""/></a></li><br />
	  <center>
			<img src="images/stackedschool_Logo.png" height="65px" width="auto" />
	  </center><br />
	  <li style='border-bottom:2px solid #01B1E2;border-top:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;' class="hideside si"><a href="javascript:;" class=""><img style='margin-top:13px;position:absolute;' src="images/stud.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>Student Info</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	  <li style='border-bottom:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;'><a href="javascript:;" class="hideside res"><img style='margin-top:13px;position:absolute;' src="images/result.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>Result</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	  <li style='border-bottom:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;'><a href="javascript:;" class="hideside fee"><img style='margin-top:13px;position:absolute;' src="images/fee.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>School Fee</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	  <li style='border-bottom:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;'><a href="javascript:;" class="hideside att"><img style='margin-top:13px;position:absolute;' src="images/att.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>Attendance</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	  <li style='border-bottom:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;'><a href="javascript:;" class="hideside eve"><img style='margin-top:13px;position:absolute;' src="images/event.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>Events</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	  <li style='border-bottom:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;'><a href="javascript:;" class="hideside msg"><img style='margin-top:13px;position:absolute;' src="images/inbox.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>Inbox</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	  <li style='border-bottom:2px solid #01B1E2;margin-top:-7px;margin-bottom:-7px;'><a href="javascript:;" class="hideside sfa"><img style='margin-top:13px;position:absolute;' src="images/send.png" height="20" width=""/><span style='position:absolute;color:#01B1E2;font-size:12px;padding-left:35px;'>Send Message</span><img style='float:right;margin-top:20px;' src="images/poi.png" height="10px" width=""/></a></li>
	 
    </ul>
<center>
	<?php 
		$stud_id_query = $conn->query("SELECT * FROM studreg WHERE username = '$username'");
		while($row = $stud_id_query->fetch_assoc()){ 
			$profile_pic_name = $row["profpic"]; 
			echo '<div class="row">';
					echo '<div class="col-lg-4"></div>';
					echo '<div class="col-lg-4"><div style="margin-top:-75px;position:relative;width:97px;height:97px;background:url(../schoolAppAdmin/userdata/profile_pics/'.$profile_pic_name.');background-size: 100% 100%;background-repeat: no-repeat;background-color:#FFFFFF;border:4px solid #01B1E2;border-radius:100%;"></div></div>';
					echo '<div class="col-lg-4"></div>';
			echo '</div>';
		}
		?>
	<div id="studentinfo" style="">
		<?php 
		$stud_id_query = $conn->query("SELECT * FROM studreg WHERE username = '$username'");
		while($row = $stud_id_query->fetch_assoc()){ 
			$surname = $row['surname'];
			$firstname = $row['firstname'];
			$middlename = $row['middlename'];
			$gender = $row['gender'];
			$dob = $row['dob'];
			$class = $row['class'];
			$pnum = $row['pnum'];
			$address = $row['address'];
			$doa = $row['doa'];
			$session = $row['session'];
			$username = $row['username'];
			$pass = $row['password'];
			$profile_pic_name = $row["profpic"]; 
			echo '<div class="row">
						<div class="col s1"></div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Surname</p>'.$surname.'</div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Firstname</p>'.$firstname.'</div>
						<div class="col s1"></div>
				  </div>';
			echo '<div class="row">
						<div class="col s1"></div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Middlename</p>'.$middlename.'</div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Gender</p>'.$gender.'</div>
						<div class="col s1"></div>
				  </div>';
			echo '<div class="row">
						<div class="col s1"></div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Date of Birth</p>'.$dob.'</div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Class</p>'.$class.'</div>
						<div class="col s1"></div>
				  </div>';
			echo '<div class="row">
						<div class="col s1"></div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Phone number</p>'.$pnum.'</div>
						<div class="col s5 truncate" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Address</p>'.$address.'</div>
						<div class="col s1"></div>
				  </div>';
			echo '<div class="row">
						<div class="col s1"></div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Admission Mode</p>'.$doa.'</div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Session</p>'.$session.'</div>
						<div class="col s1"></div>
				  </div>';
			echo '<div class="row">
						<div class="col s1"></div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Username</p>'.$username.'</div>
						<div class="col s5" style="font-size:12px;border-bottom:2px solid #01B1E2;"><p style="font-size:12px;color:#01B1E2;">Password</p>'.$pass.'</div>
						<div class="col s1"></div>
				  </div>';
		}
?>
	</div>
</center>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<center>
	<div id="result" style="display:none;"><br />
	<div class="divider"></div>
	<p style="color:#01B1E2;text-size:20px;"><b>RESULTS</b></p>
	<div class="divider"></div>
<?php
$sql_sess_fee = $conn->query("SELECT * FROM session");
		while($sess_row_fee = $sql_sess_fee->fetch_assoc()){
			$sess = $sess_row_fee['sessioninput'];

		$res_sql = $conn->query("SELECT * FROM results WHERE username='$username' AND session='$sess'");
		echo '<div class="row">';
		while($res_row = $res_sql->fetch_assoc()){
             $r_session = $res_row["session"];
             $result = $res_row["result"];
			  echo'<div class="col s5 m5 l5">';
				echo '<p><b>Session:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$r_session.'</p>';
			  echo'</div>';
				echo '<b>Result</b>';
				
				echo'<p style="color:#01B1E2;word-wrap: break-word;max-width:300px;">'.$result.'</p>';
				echo'<div class="divider"></div>';
				
				
			}
			echo '</div>';
		}
?>
		
	</div>
</center>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<center>
	<div id="fee" style="display:none;"><br />
	<div class="divider"></div>
	<p style="color:#01B1E2;text-size:20px;"><b>SCHOOL FEE</b></p>
	<div class="divider"></div>
<?php
		echo '<table class="responsive-table">';
	echo '<thead>
      <tr>
        <th>SESSION</th>
        <th>FEE PAID</th>
        <th>BALANCE</th>
      </tr>
    </thead><tbody>';
		$sql_sess_fee = $conn->query("SELECT * FROM session");
		while($sess_row_fee = $sql_sess_fee->fetch_assoc()){
			$sess = $sess_row_fee['sessioninput'];
				
		$school_status_sql = $conn->query("SELECT * FROM studreg WHERE username='$username'");
		while($school_status_row = $school_status_sql->fetch_assoc()){
			$school_status = $school_status_row["doa"];
			if($school_status == 'Day'){
				$fee_sql = $conn->query("SELECT * FROM fee WHERE username='$username' AND session='$sess'");
			while($fee_row = $fee_sql->fetch_assoc()){
				$status_Owing = $conn->query("SELECT $class FROM setfee");
				while($row1 = $status_Owing->fetch_assoc()){
				 $claz = $row1[$class];
				}
				 $fee_sess = $fee_row["session"];
				 $paid = $fee_row["paid"];
				  echo'<tr>';
					echo'<td><p style="color:#01B1E2;word-wrap: break-word;">'.$fee_sess.'</p></td>';
					echo'<td><p style="color:#01B1E2;word-wrap: break-word;">N '.$paid.'</p></td>';
					echo'<td><p style="color:#01B1E2;word-wrap: break-word;">N '.($claz-$paid).'</p></td>';
					//echo '<hr /><div class="row"><div class="col s1"></div><div class="col s5"><p style="color:#01B1E2;word-wrap: break-word;">'.$sess2.'</p></div><div class="col s5"><p style="width:5em;color:#01B1E2;word-wrap: break-word;">'.$result.'</p></div><div class="col s1"></div></div><hr />';
				   echo'</tr>';
				}
			}
			if($school_status == 'Boarding'){
				$fee_sql = $conn->query("SELECT * FROM fee WHERE username='$username' AND session='$sess'");
			while($fee_row = $fee_sql->fetch_assoc()){
				$status_Owing = $conn->query("SELECT $class FROM setfeeboard");
				while($row1 = $status_Owing->fetch_assoc()){
				 $claz = $row1[$class];
				}
				 $fee_sess = $fee_row["session"];
				 $paid = $fee_row["paid"];
				  echo'<tr>';
					echo'<td><p style="color:#01B1E2;word-wrap: break-word;">'.$fee_sess.'</p></td>';
					echo'<td><p style="color:#01B1E2;word-wrap: break-word;">N '.$paid.'</p></td>';
					echo'<td><p style="color:#01B1E2;word-wrap: break-word;">N '.($claz-$paid).'</p></td>';
					//echo '<hr /><div class="row"><div class="col s1"></div><div class="col s5"><p style="color:#01B1E2;word-wrap: break-word;">'.$sess2.'</p></div><div class="col s5"><p style="width:5em;color:#01B1E2;word-wrap: break-word;">'.$result.'</p></div><div class="col s1"></div></div><hr />';
				   echo'</tr>';
				}
			}
		
		}
		
		}	
	echo  '</tbody></table>';
	
?>
	</div>
</center>
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<center>
	<div id="msg" style="display:none"><br />
	<p style="color:#01B1E2;text-size:20px;"><b>GENERAL MESSAGE</b></p>
<?php
		$msg_sql = $conn->query("SELECT * FROM classmessage WHERE class='$class'");
		echo '<div class="row">';
		while($msg_row = $msg_sql->fetch_assoc()){
             $msg_sub = $msg_row["subject"];
             $msg_date = $msg_row["date"];
             $msg_msg = $msg_row["message"];
			  echo'<br /><br /><div class="col s5 m5 l5">';
				echo '<p><b>Subject:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$msg_sub.'</p>';
			  echo'</div>';
			  echo'<div class="col s5 m5 l5">';
				echo '<p><b>Date:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$msg_date.'</p>';
			  echo'</div>';
				echo '<b>Message</b>';
				
				echo'<p style="color:#01B1E2;word-wrap: break-word;max-width:300px;">'.$msg_msg.'</p>';
				echo'<div class="divider"></div>';	
			}
			echo '<br /><br /><br /><p style="color:#01B1E2;text-size:20px;"><b>PERSONAL MESSAGE</b></p>';
		$msg_sql = $conn->query("SELECT * FROM message WHERE username='$username'");
		echo '<div class="row">';
		while($msg_row = $msg_sql->fetch_assoc()){
             $msg_sub = $msg_row["subject"];
             $msg_date = $msg_row["date"];
             $msg_msg = $msg_row["message"];
			  echo'<br /><br /><div class="col s5 m5 l5">';
				echo '<p><b>Subject:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$msg_sub.'</p>';
			  echo'</div>';
			  echo'<div class="col s5 m5 l5">';
				echo '<p><b>Date:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$msg_date.'</p>';
			  echo'</div>';
				echo '<b>Message</b>';
				
				echo'<p style="color:#01B1E2;word-wrap: break-word;max-width:300px;">'.$msg_msg.'</p>';
				echo'<div class="divider"></div>';	
			}
	
?>
	</div>
</center>	
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<center>
	<div id="eve" style="display:none"><br />
	<div class="divider"></div>
	<p style="color:#01B1E2;text-size:20px;"><b>SCHOOL EVENTS</b></p>
	<div class="divider"></div><br />

<?php

		$eve_sql = $conn->query("SELECT * FROM events");
		echo '<div class="row">';
		while($eve_row = $eve_sql->fetch_assoc()){
             $eve_name = $eve_row["name"];
             $eve_date = $eve_row["date"];
             $eve_desc = $eve_row["descr"];
			  echo'<div class="col s5 m5 l5">';
				echo '<p><b>Event Name:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$eve_name.'</p>';
			  echo'</div>';
			  echo'<div class="col s5 m5 l5">';
				echo '<p><b>Date:</b></p>';
			  echo'</div>';
			  echo'<div class="col s7 m7 l7">';
				echo'<p style="color:#01B1E2;word-wrap: break-word;">'.$eve_date.'</p>';
			  echo'</div>';
				echo '<b>Description</b>';
				
				echo'<p style="color:#01B1E2;word-wrap: break-word;max-width:300px;">'.$eve_desc.'</p>';
				echo'<div class="divider"></div>';
				
				
			}
		echo '</div>';
	
?>
	</div>
</center>	

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<center>
	<div id="att" style="display:none">
	<div class="divider"></div><br />
	<p style="color:#01B1E2;text-size:20px;"><b>ATTENDANCE</b></p>
	<div class="divider"></div>
<?php
		echo '<table class="responsive-table">';
	echo '<thead>
      <tr>
        <th>WEEK RANGE</th>
        <th>DAYS ATTENDED</th>
      </tr>
    </thead><tbody>';
		$sql_attcreate = $conn->query("SELECT * FROM attcreate");
		while($attcreate_row_fee = $sql_attcreate->fetch_assoc()){
			$att = $attcreate_row_fee['att'];
				
		$att_sql = $conn->query("SELECT * FROM attendance WHERE username='$username' AND att_date='$att'");
		while($att_row = $att_sql->fetch_assoc()){
             $att_date = $att_row["att_date"];
             $mark = $att_row["mark"];
			  echo'<tr>';
				echo'<td><p style="color:#01B1E2;word-wrap: break-word;">'.$att_date.'</p></td>';
				echo'<td><p style="color:#01B1E2;word-wrap: break-word;">'.$mark.'</p></td>';
				//echo '<hr /><div class="row"><div class="col s1"></div><div class="col s5"><p style="color:#01B1E2;word-wrap: break-word;">'.$sess2.'</p></div><div class="col s5"><p style="width:5em;color:#01B1E2;word-wrap: break-word;">'.$result.'</p></div><div class="col s1"></div></div><hr />';
			   echo'</tr>';
			}
		}	
	echo  '</tbody></table>';
	
?>
	</div>
</center>

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	<div id="sfa" style="display:none">
	<div class="divider"></div><br />
		<center>
	<p style="color:#01B1E2;text-size:20px;"><b>SEND MESSAGE TO ADMIN</b></p>
		</center>
	<div class="divider"></div>


<script type="text/javascript">
$(document).ready(function(){
	document.getElementById("sndmsg").addEventListener("click", function(){
		
		var subject = $('#subject').val();
		var message = $('#message').val();
		if(subject != '' && message != ''){
			$('#sndmsg').attr('disabled','disabled');
		$.ajax({
			type: "POST",
			url: "msgadm.php",
			data: { 
				subject: subject, message: message
			}
			}).success(function(data) {
				$('#resultter').html(data);
				var subject = $('#subject').val('');
				var message = $('#message').val('');
		   		$('#sndmsg').removeAttr("disabled");
		   		delay(2000);
		   		$('#resultter').html(' ');

			});
		}
		else{
			alert('fill all the fields')
		}
		});
	});
</script>
		<div class="row">
			<div class="col s2"></div>
			<div class="input-field col s8">
			  <input id="subject" style=" border-bottom: 1px solid #01B1E2;box-shadow: 0 1px 0 0 #01B1E2;color: #01B1E2;" type="text" class="validate">
			  <label for="subject" style=" color: #01B1E2;">Subject</label>
			</div>
			<div class="col s2"></div>
		</div>
		<div class="row">
			<div class="col s2"></div>
			<div class="input-field col s8">
			  <textarea id="message" style=" border-bottom: 1px solid #01B1E2;box-shadow: 0 1px 0 0 #01B1E2;color: #01B1E2;text-align:center;" class="materialize-textarea"></textarea>
			  <label for="message" style=" color: #01B1E2;">Message</label>
			  <center><div id="resultter" style="color:green;"></div></center>
			</div>
			<div class="col s2"></div>
		</div>
			<center>
				
				<button class="waves-effect waves-light btn-large" style=" background-color:#01B1E2;" id="sndmsg" type="button">Send</button>
			</center>
	</div>

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br /><br />
</body>
</html>
