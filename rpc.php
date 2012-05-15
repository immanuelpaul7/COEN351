<?php
include("dbconfig.php");
	$db = mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
	mysql_select_db($dbname,$db) or die(mysql_error());
	
	if(!$db) {
		echo 'ERROR: Could not connect to the database.';
	} else {
		if(isset($_POST['queryString'])) {
			$queryString = mysql_escape_string($_POST['queryString']);
			if(strlen($queryString) >0) {
				$query = mysql_query("SELECT `topics` FROM `topics` WHERE `topics` LIKE '$queryString%' LIMIT 10");
				if($query) {
					while ($result =  mysql_fetch_array($query)) 
					 {
		     			echo '<li onClick="fill(\''.$result['topics'].'\');">'.$result['topics'].'</li>';
	         		}
				} else {
					echo 'ERROR: There was a problem with the query.';
				}
			} else {
			}
		} else {
	 		echo 'There should be no direct access to this script!';
		}
	}
?>