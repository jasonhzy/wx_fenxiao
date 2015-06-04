<?php
setcookie('FENXIAOPINETUSER[SUBSCRIBE]', '', 0);
setcookie('FENXIAOPINETUSER[TOOPENID]', '', 0);

setcookie('FENXIAOPINETUSER[UKEY]', '', 0);
setcookie('FENXIAOPINETUSER[PASS]', '', 0);
setcookie('FENXIAOPINETUSER[TID]', '', 0);
setcookie('FENXIAOPINETUSER[UID]', '', 0);
setcookie('FENXIAOPINETUSER[CODETIME]', '', 0);
setcookie('FENXIAOPINETUSER[USERNAME]', '', 0);
setcookie('FENXIAOPINETUSER[URL]', '', 0);
setcookie('HISTORYVIEW', '', 0);
setcookie('PHPSESSID', '', 0);
session_destroy();
		
require_once('load.php');
$app->action('page','index');
?>
