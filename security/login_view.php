<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link href="../styl.css" rel="stylesheet" type="text/css">
   <!-- font icons -->
   <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="../assets/css/rubic.css">
</head>
<body style="overflow-y:hidden;">
<? 

 function out(&$param){
	if (isset($param)){
		echo $param;
	}
}



?>

<div class="box" style="height:auto;">
<form style="top:10%;left:38%;position:relative;" action="../security/login.php" method="post" >

		<label class="btn btn-primary rounded" for="id_login">login: </label><br>
		<input  style="width:25%;" class="form-control" id="exampleFormControlInput1" type="text" name="login" value="<?php ?>" /><br><br>
		<label class="btn btn-primary rounded" for="id_pass">pass: </label>
		<input  class="form-control" style="width:25%; id="id_pass" type="password" name="pass" />


	<input type="submit" value="zaloguj"/>
</form>	
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</div>



</body>
</html>