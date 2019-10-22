<?php
SESSION_start();
SESSION_destroy();
header('Location: index.php');
exit();

?>