<?php 
	class Menu
	{
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

		static $start = '<div><ul class="menu">';
		static $end = '</ul></div>';

		static public function CreateMenu($number)
		{			
			$menu = self::$start;
			foreach (self::$items as $key => $value) {
				if ($key == $number)
				{
					$value = str_replace('menu__item-link', 'menu__item-link menu__item-link_disabled', $value);
				}
				$menu = $menu.$value;				
			}
			reset(self::$items);
			$menu = $menu.self::$end;
			return $menu;
		}
	}

 ?>