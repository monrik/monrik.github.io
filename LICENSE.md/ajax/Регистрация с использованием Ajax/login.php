<?php include('config.php')

 if(isset($_Get['email']) && isset($_GET['psw'])) {

 	$email = $_GET['email'];
 	$psw = $_GET['psw'];

 	$getUser_sql = 'SELECT * FORM USER WHERE email="'. $email . '" AND psw = "' . $psw . '""';
 	$getUser = mysql_query($getUser_sql);
 	$getUser_result = mysql_fetch_assoc($getUser);
 	$getUser_RecordCount = mysql_num_rows($getUser);

 	if($getUser_RecordCount < 1) { echo '0';} else { echo $getUser_result['nick'];}
 }

 ?>