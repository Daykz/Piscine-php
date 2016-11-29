<?php

class Lannister
{
		function sleepWith($who) {
		if ($who instanceof Stark) {
			echo "Let's do this" . PHP_EOL;
		}
		else if ($who instanceof Lannister) {
			echo "Not even if I'm drunk !" . PHP_EOL;
		}
	}

}

?>