<?php
include("connect.php");
	if (isset($_SESSION['user_log'])){
		$username = $_SESSION["user_log"];
	}
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$d = date("Y-m-d"); 
			$sql_sndmsg = $conn->query("INSERT INTO adminmsg(id,username,subject,message,date) VALUES(0,'$username','$subject','$message','$d')");
			if($sql_sndmsg){
				echo'Message Sent To School';
			}
	
?>