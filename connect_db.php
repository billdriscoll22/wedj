<?php
	$dbHost = "mysql.cs147.org";
	$dbUser = "jpulvera";
	#dbPass = "eymQqu6V";
	$dbDatabase = "jpulvera_mysql";
	$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database");
	$db_found = mysql_select_db("$dbDatabase", $db) or die ("Couldn't select the database");
	
?>