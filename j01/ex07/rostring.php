#!/usr/bin/php
<?PHP 
if ($argv[1])
{
	$tab = explode(" ", $argv[1]);
	end($tab);
	$tab[] = $tab[0];
	unset($tab[0]);
	$tab = array_filter($tab);
	$len = count($tab);
	foreach ($tab as $key => $value)
	{
		echo "$value";
		if ($key != $len)
			echo " ";
	}
	echo "\n";
}
?>