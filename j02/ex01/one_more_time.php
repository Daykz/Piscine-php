#!/usr/bin/php
<?PHP 

function check_month($str)
{
	if (!strcasecmp($str, "Janvier"))
		return 1;
	elseif (!strcasecmp($str, "Fevrier"))
		return 2;
	elseif (!strcasecmp($str, "Mars"))
		return 3;
	elseif (!strcasecmp($str, "Avril"))
		return 4;
	elseif (!strcasecmp($str, "Mai"))
		return 5;
	elseif (!strcasecmp($str, "Juin"))
		return 6;
	elseif (!strcasecmp($str, "Juillet"))
		return 7;
	elseif (!strcasecmp($str, "Aout"))
		return 8;
	elseif (!strcasecmp($str, "Septembre"))
		return 9;
	elseif (!strcasecmp($str, "Octobre"))
		return 10;
	elseif (!strcasecmp($str, "Novembre"))
		return 11;
	elseif (!strcasecmp($str, "Decembre"))
		return 12;

}

$tab = array();
$tab = explode(' ', $argv[1]);
if (preg_match("#^Lundi$|^Mardi$|^Mercredi$|^Jeudi$|^Vendredi$|^Samedi$|^Dimanche$#i", $tab[0]))
{
	if (is_numeric($tab[1]) && ($tab[1] > 0) && ($tab[1] < 32) && (strlen($tab[1]) < 3))
	{
		$day = $tab[1];
		if (preg_match("#^Janvier$|^Fevrier$|^Mars$|^Avril$|^Mai$|^Juin$|^Juillet$|^Aout$|^Septembre$|^Octobre$|^Novembre$|^Decembre$#i", $tab[2]))
		{
			$month = check_month($tab[2]);
			if (is_numeric($tab[3]) && strlen($tab[3]) == 4)
			{
				$year = $tab[3];
				if (preg_match("#^[0-3][0-9]:[0-5][0-9]:[0-5][0-9]$#", $tab[4]))
				{
					$date = array();
					$date = explode(':', $tab[4]);
					$hour = $date[0];
					$min = $date[1];
					$sec = $date[2];
					echo gmmktime($hour, $min, $sec, $month, $day, $year);
					return true;
				}
			}
		}
	}
}
echo "Wrong Format\n";
return false;
?>