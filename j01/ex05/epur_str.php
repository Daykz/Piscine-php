#!/usr/bin/php
<?php
if (count($argv) != 2)
	return;
$str = trim($argv[1]);
while ($str[$i])
{
	if ($str[$i] == ' ' && $str[$i + 1] == ' ')
	{
		$str = str_replace("  ", " ", $str);
		$i = 0;
	}
	$i++;
}
echo $str."\n";
?>