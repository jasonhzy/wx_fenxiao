<?php
setcookie(CFGH.'USER[SUBSCRIBE]', '', 0);
setcookie(CFGH.'USER[TOOPENID]', '', 0);

setcookie(CFGH.'USER[UKEY]', '', 0);
setcookie(CFGH.'USER[PASS]', '', 0);
setcookie(CFGH.'USER[TID]', '', 0);
setcookie(CFGH.'USER[UID]', '', 0);
setcookie(CFGH.'USER[CODETIME]', '', 0);
setcookie(CFGH.'USER[USERNAME]', '', 0);
setcookie(CFGH.'USER[URL]', '', 0);
setcookie('HISTORYVIEW', '', 0);
setcookie('PHPSESSID', '', 0);
session_destroy();
		
require_once('load.php');
$app->action('page','index');
?>
