#!/usr/bin/php
<?PHP 
$read = fopen("$argv[1]", "r+");
while(!feof($read))
{
	$line = fgets($read);
	$begin_link = strpos($line, "<a");
	if ($begin_link || $begin_link === 0)
	{
		$end_link = strpos($line, "</a>");
		$link = substr($line, $begin_link, $end_link - $begin_link + 1);
		if ($begin_title = strpos($line, "title="))
		{
			$title = substr($line, $begin_title + 6);
			$end_title = strpos($title, "\"", 1);
			$title = substr($title, 1, $end_title - 1);
			$title = strtoupper($title);
			$line = preg_replace("#$title#i", $title, $line);
		}
		if ($end_a = strpos($link, ">"))
		{
			$str = substr($link, $end_a + 1);
			$end_str = strpos($str, "<");
			$str = substr($str, 0, $end_str);
			$str = strtoupper($str);
			$line = preg_replace("#$str#i", $str, $line);
		}
	}
	echo "$line";
}
fclose($read);
?>