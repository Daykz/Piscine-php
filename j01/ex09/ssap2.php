#!/usr/bin/php
<?PHP
$tabnum = array();
$tabalpha = array();
unset($argv[0]);
$str = implode(" ", $argv);
$tab = explode(" ", $str);
foreach ($tab as $key => $value)
{
	if (is_numeric($value))
	{
		$tabnum[] = $value;
		unset($tab[$key]);
	}
	else if (ctype_alpha($value))
	{
		$tabalpha[] = $value;
		unset($tab[$key]);
	}
}
natcasesort($tabalpha);
sort($tabnum, SORT_STRING);
sort($tab, SORT_STRING);
$tabalpha = array_merge_recursive($tabalpha, $tabnum, $tab);
foreach ($tabalpha as $value)
{
	echo "$value\n";
}
?>