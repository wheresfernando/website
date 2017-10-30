
<?php

	// $baseSite    		= "http://localhost/MyTutorial";
	$baseSite			= "http://".$_SERVER['SERVER_NAME']."/MyTutorial"; 
	$tangoFolder 		= "/Tango"; 
	$educationFolder 	= "/Education";
	$pcFolder 			= "/PeaceCorps";
	$researchFolder 	= "/Research";
	$currentSite		= "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

	
 	/* echo "<p>" .$baseSite .$pcFolder ."/</p>
<p>" . $currentSite . "</p>";
	if (strpos($currentSite, $baseSite.$pcFolder) !== false){ 
		echo 'Hi';
	}  */

	
	//First, identify which folder we are in:
	if (strpos($currentSite, $baseSite.$tangoFolder) !== false){ 
		$subFolder = $tangoFolder;
		//echo 'tango';
	}
	if (strpos($currentSite, $baseSite.$educationFolder) !== false){
		$subFolder = $educationFolder;		
		//echo 'education';
	}
	if (strpos($currentSite, $baseSite.$pcFolder) !== false){
		$subFolder = $pcFolder;
		//echo 'peacecorps';
	}
	if (strpos($currentSite, $baseSite.$researchFolder) !== false){ 
		$subFolder = $researchFolder;
		//echo 'research';
	}
	
	//Next, navigate to the Posts section of that folder
	$postFolder = $baseSite . $subFolder . "/Posts/";
	echo $postFolder;
	echo getcwd();
	
	/* $folders = explode('/', $baseSite);
	$i = 0;
	foreach($folders as $folder) {
		if (strpos($folder, '.') !== FALSE || empty($folder)) {
			unset($folders[$i]);
		}
		$i++;
	}
	$what_we_need = end($folders);
	echo $what_we_need;
	 */
	
?>



