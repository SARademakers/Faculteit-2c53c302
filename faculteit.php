<?php
echo ("Van welk getal wil je de faculteit weten?" . PHP_EOL);
$a = readline();
$b = 1;
for ($i = 1; $i <= $a; $i++) {
	$b = $b * $i;
}
echo $b;
?>