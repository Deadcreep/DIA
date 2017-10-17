<?php 
	class Menu
	{
		//Стандартный массив
		static $items = ['<li class="menu__item"> 
							<img class="logo-img" src="img/logo.png" alt="logo image">
						</li>',

						'<li class="menu__item">
							<a class="menu__item-link" href="index.php?page=1">Game</a>
						</li>',

						'<li class="menu__item">
							<a class="menu__item-link" href="index.php?page=2">About</a>
						</li>',

						'<li class="menu__item" >
							<a class="menu__item-link" href="index.php?page=3">Top players</a>
						</li>'];

		//Массив для бонусного задания
		static $unitedItems = [
			['<li class="menu__item"><img class="logo-img" src="img/logo.png" alt="logo image"></li>', 'assets/game.html'],
			['<li class="menu__item"><a class="menu__item-link" href="index.php?page=1">Game</a></li>', 'assets/game.html'],
			['<li class="menu__item"><a class="menu__item-link" href="index.php?page=2">About</a></li>', 'assets/about.html'],
			['<li class="menu__item" ><a class="menu__item-link" href="index.php?page=3">Top players</a></li>', 'assets/top-list.html']
		];

		static $start = '<div><ul class="menu">';
		static $end = '</ul></div>';

		//Стандартная функция
		static public function CreateMenu($number)
		{			
			$menu = self::$start;
			foreach (self::$unitedItems as $key => $value) {
				if ($key == $number)
				{
					$value[0] = str_replace('menu__item-link', 'menu__item-link menu__item-link_disabled', $value[0]);
				}
				$menu = $menu.$value[0];				
			}
			$menu = $menu.self::$end;
			return $menu;
		}

		//Функция для бонусного задания
		static public function CreatePage($number)
		{
			$page = self::$start;
			foreach (self::$unitedItems as $key => $value) {
				if ($key == $number)
				{
					$value[0] = str_replace('menu__item-link', 'menu__item-link menu__item-link_disabled', $value[0]);
				}
				$page = $page.$value[0];				
			}
			$page = $page.self::$end;
			$page = $page.self::$unitedItems[$number][1];
			return $page;
		}
	}
 ?>