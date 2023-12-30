<?php
session_start();
session_unset();
session_destroy();
header('Location: http://localhost/do_an1/Webproject/index.php');
exit();
?>