<?php
    session_start();
    if (isset($_SESSION['is_loggedin'])) {
        echo "<div style=\"margin :0 auto; width: 600px;\">";
        echo "<h2>This is Profil Page</h2>";
        echo "User  : ".$_SESSION['is_loggedin'];
        echo "<br>Name  : Admin Web App";
        echo "<br>Email : admin@myweb.app";
        echo "</div>";
    } else {
        header("Location:http://localhost");
    }
?>

