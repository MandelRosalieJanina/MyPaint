<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo_black.ico">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="../scripts/suScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/style_suSite.css">
</head>
<body>


<header>
    <a href="./login.php"><img class="exit" src="../img/arrow_white.png"></a>
</header>


<?php

session_start();

if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == true) {

    echo"<a href=\"home.html\">Home</a>";

} else {
    header("HTTP/1.1 403 Forbidden");

    echo "<h1>Sie müssen eingeloggt sein!</h1>";

    exit();
}
?>

</body>
</html>