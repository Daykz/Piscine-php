<?PHP
function auth($login, $passwd)
{
	$content = file_get_contents("../private/passwd");
	if ($content)
	{
		$unserial = unserialize($content);
		if ($unserial)
		{
			$hashpw = hash("whirlpool", $passwd);
			foreach ($unserial as $user)
			{
				if ($user["login"] === $login)
				{
					if ($user["passwd"] === $hashpw)
						return TRUE;
					else
						return FALSE;
				}
			}
		}
	}
	else
		return FALSE;
}
?>
