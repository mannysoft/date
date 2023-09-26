<?php

namespace Mannysoft\Date;

class Date{
	
	public static function yes()
	{
		echo 'yes yes yes';	
	}
	
	public static function getLastDay($month, $year)
	{
		return idate('d', mktime(0, 0, 0, ($month + 1), 0, $year));
	}
	
	
}
