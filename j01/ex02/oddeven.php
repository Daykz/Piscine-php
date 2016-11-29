#!/usr/bin/php
<?php 
while (1)
{	
	echo "Entrez un nombre : ";
	if ($val = fgets(STDIN))
	{
		$val = trim($val);
		if (!is_numeric($val))
			echo "'$val' n'est pas un nombre\n";
		else
		{
			if (!($val % 2))
				echo "Le chiffre $val est Pair\n";
			else
				echo "Le chiffre $val est Impair\n";
		}	
	}
	else
	{
		echo "\n";
		break;
	}
}
?>