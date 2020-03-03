<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">

    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../style/loginStyle.css" >

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>



    <?php

    if (isset($_POST['user_name']) && $_POST['user_name'] != ""
        && isset($_POST['user_password'])) {

        if ($_POST['user_name'] == "user"
            && md5($_POST['user_password']) == "e8636ea013e682faf61f56ce1cb1ab5c") {
            $_SESSION['user_name'] = $_POST['user_name'];
            $_SESSION['eingeloggt'] = true;

        } else {
            echo "<b>ungültige Eingabe</b>";
            $_SESSION['eingeloggt'] = false;
        }
    }

    if (isset($_POST['logout'])){
        session_destroy();
        $_SESSION = array();
    }
    session_cache_limiter(15);

    echo "<div id='loginBox'>";

    if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == true) {

        echo " <img id=\"icon\" src=\"../bilder/farbpalette.png\" >";
        echo "<h2>Hallo " . $_SESSION['user_name'] . "</h2>";
        echo "<h3>here you can log out if you want</h3>";
        echo '<form name="" action="" method="POST" enctype="text/html">';
        echo '<p><input type="Submit" name="logout" value="Ausloggen" />';
        echo '</form>';
        echo "<h3>and here you go to the home page</h3>";
         echo"<a href='home.html' ><button>Home<i class='fas fa-arrow-right'></i></button></a>";


    } else {

        echo " <img id=\"icon\" src=\"../bilder/farbpalette.png\" >";
        echo "<h3> first sign up, then there is more to see</h3>";
        echo '<form name="" action="" method="POST" enctype="text/html">';
        echo '<input type="text" placeholder="Benutzername" name="user_name" value="" size="20" maxlength="50" />';
        echo '<input type="password" placeholder="Passwort" name="user_password" value="" size="20" maxlength="50" />';
        echo '<p><input  type="Submit" name="login" value="Einloggen"/>';
        echo '</form>';
    }
    echo "</div>";


    ?>


</body>
</html>
