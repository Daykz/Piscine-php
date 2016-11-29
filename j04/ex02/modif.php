<?php
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === "OK")
{
	$account = unserialize(file_get_contents('../private/passwd'));
	if ($account)
	{
		foreach ($account as $key => $value)
		{
			if ($value['login'] === $_POST['login'])
			{
				if ($value['passwd'] === hash('whirlpool', $_POST['oldpw']))
				{
					$account[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
					file_put_contents('../private/passwd', serialize($account));
					echo "OK\n";
				}
				else
					echo "ERROR\n";
			}
			else
				echo "ERROR\n";
		}
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>
