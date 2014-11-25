<?php

namespace Plugin\Bullet;

class Event
{
	public static function ipBeforeController()
	{
		ipAddCss('assets/bullet.css');
	}
}