#!/usr/bin/php
<?PHP 
if ($argv[1])
{
	$str = trim($argv[1]);
	$str = str_replace("\t", " ", $str);
	$tab = explode(" ", $str);
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