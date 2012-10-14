<?php
class KomentarzUchwalyType
{
    const Dziennikarski = 1;
    const Ekspercki = 2;
	const Radnego = 3;
	const Mieszkanca = 4;
	
	const DziennikarskiLabel = "Komentarz dziennikarski";
    const EksperckiLabel = "Komentarz ekspercki";
	const RadnegoLabel = "Komentarz radnego";
	const MieszkancaLabel = "Komentarz mieszkańca";
	
	private static $enum = array
	(
		1 => "Komentarz dziennikarski" , 2 => "Komentarz ekspercki" , 3 => "Komentarz radnego" , 4 => "Komentarz mieszkańca"
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