<?php
	Class Content
	{
	 	static $pages=['assets/game.html','assets/about.html','assets/top-list.html'];

	 	static public function GetPages($page)
	 	{
	 		if(array_key_exists($page, self::$pages))
 			{
	 			return file_get_contents(self::$pages[$page]);
	 		}
	 		else return file_get_contents(self::$pages[0]);
	 	}
	 }
 ?>