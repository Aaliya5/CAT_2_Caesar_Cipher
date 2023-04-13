<?php
function encrypt($plainText, $key)
{
	$result = "";

	for ($i = 0; $i < strlen($plainText); $i++)
	{
		if (ctype_upper($plainText[$i]))
			$result = $result.chr((ord($plainText[$i]) + $key - 65) % 26 + 65);
	  else
		  $result = $result.chr((ord($plainText[$i]) + $key - 97) % 26 + 97);
	}
	return $result;
}

$plainText = "ABCd";
$key = 3;
echo "PLAIN TEXT : " . $plainText;
echo "\nKEY:" . $key;
echo "\nCIPHER TEXT: " . encrypt($plainText, $key);
?>
