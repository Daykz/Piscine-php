<?php
if ($_GET['action'] == "set")
	setcookie($_GET['name'], $_GET['value'], time() + 60 * 60 * 24 * 30);
else if ($_GET['action'] == "get")
{
	$str = $_COOKIE[$_GET['name']];
	if ($str)
		echo $str."\n";
}
else if ($_GET['action'] == "del")
	setcookie($_GET['name'], "", time() - 3600);
?>