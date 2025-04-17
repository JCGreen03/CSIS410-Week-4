<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reggie Hernandez</title>
    <link rel="stylesheet" type="text/css" href="./CSS/Sessions.css">
</head>
<body>

<?php
include "./Components/Navbar.php";
?>
<?php
include("./Components/variables.php");
?>

<?php
session_start();
?>


<?php
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
include "./Components/EmployeeReggie.php";
}
else{
    echo "Access denied. If you have credentials, please<a class='login' href='Login.php'>log in</a>.";
}
?>

<?php
include "./Components/Footer.php";
?>
</body>
</html>