
<?php

//przekazanie żądania do następnego dokumentu ("forward")
include 'security/check.php';

?>

<html>
<head>
    <?php
    if(empty($kwota) or empty($proc) or empty($raty) ){
        $kwota = 1000;
        $raty = 3;
        $proc = 10;
    }

    ?>
<link href="styl.css" rel="stylesheet" type="text/css">
   <!-- font icons -->
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/rubic.css">

</head>
<body>

	<a class="btn byn-light" style="background-color:white;" href="security/logout.php" >Wyloguj</a>

<div class="box">

<h1 style="color: white;">KALKULATOR RAT ! </h1><br><br><br><br>
<form class="form" action="/calc_sec.php" method="post">
    <!-- kwota kredytu --> 
  <label style="color: white;" for="kw">Kwota kredytu</label><br>
  <input class="btn btn-primary rounded" type="number" min="1000" max="100000"  name="kwota" value="<?php print($kwota); ?>"><br><br>
  <label style="color: white;" for="rt">podaj ilość rat</label><br>
  <input type="range" min="3" max="36" step="3" name="raty" value="<?php print($raty); ?>" oninput="this.nextElementSibling.value = this.value" >
  <output style="color: white;"><?php print($raty); ?></output>
  <br><br>
  <label style="color: white;" for="kw">oprocentowanie</label><br>
  <input class="btn btn-primary rounded" type="number" min="1.0" max="15.0"  name="oprocentowanie" value="<?php print($proc); ?>"><br><br>
  <input class="btn btn-primary" type="submit" value="Wyślij">
</form> 


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ 
echo "<div style='margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;'>";
echo "Miesięczna rata wynosi  : ". round($result,2). " zł ". "<br>  Prowizja to: " . $prowizja . "zł <br>" . "Kwota do spłaty : ". $kwotaend . "zł" ;
echo "</div>";        }  ?>


</div>
</body>
</html>