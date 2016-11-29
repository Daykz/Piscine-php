#!/usr/bin/php
<?PHP
unset($argv[0]);
$str = implode(" ", $argv);
$tab = explode(" ", $str);
$tab = array_filter($tab);
sort($tab, SORT_REGULAR);
foreach ($tab as $value) {
	echo "$value\n";
}
?>