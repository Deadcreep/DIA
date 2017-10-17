<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>	
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body link="black" vlink="#DFB143">
	<?php 
		ini_set('display_errors',1);
		error_reporting(E_ALL);
		include "menu.php";
		include "content.php";

		if (array_key_exists('page', $_GET)) 
			{
				$page = $_GET['page'];
			}
		else $page = 1;

		//echo Menu::CreateMenu($page);		
		//echo Content::GetPages($page-1);
		echo Menu::CretePage($page);
	?>
</body>
</html>