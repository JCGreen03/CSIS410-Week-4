<?php
session_start();
echo "Logging out...";
session_unset();
session_destroy();
header('Refresh: 3; URL=http://localhost/Week-4/Sessions/Login.php');
?>