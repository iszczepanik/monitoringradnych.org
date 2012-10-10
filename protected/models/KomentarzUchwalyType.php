<?php
class KomentarzUchwalyType
{
    const Dziennikarski = 1;
    const Ekspercki = 2;
	const Radnego = 3;
	
	const DziennikarskiLabel = "Komentarz Dziennikarski";
    const EksperckiLabel = "Komentarz Ekspercki";
	const RadnegoLabel = "Komentarz Radnego";
	
	private static $enum = array
	(
		1 => "Komentarz Dziennikarski" , 2 => "Komentarz Ekspercki" , 3 => "Komentarz Radnego"
	);

	public function GetOrdinal($name) 
	{
		return array_search($name, self::$enum);
	}

	public function GetDescription($ordinal) 
	{
		return self::$enum[$ordinal];
	}
	
    // etc.
}