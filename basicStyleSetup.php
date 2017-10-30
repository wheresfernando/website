

<?php
	
	// $baseSite    = "http://localhost/MyTutorial";
	$baseSite		= "http://".$_SERVER['SERVER_NAME']."/MyTutorial"; 
	$styleFolder = "/Styling"; 
	
	echo
"<link rel=\"stylesheet\" type=\"text/css\" href=\"" .$baseSite .$styleFolder . "/mystyle.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"" .$baseSite .$styleFolder . "/navstyle.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"" .$baseSite .$styleFolder . "/sidebarstyle.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"" .$baseSite .$styleFolder . "/articleheaderstyle.css\">

<link rel=\"icon\" href=\"" .$baseSite . "\Favicon.png\" type=\"image/png\" />";

?>