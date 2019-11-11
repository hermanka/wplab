<?php
    session_start();
    function csrf_token_is_valid() {
        if(!isset($_POST['csrf_token'])) { return false; }
        if(!isset($_SESSION['csrf_token'])) { return false; }
        return ($_POST['csrf_token'] === $_SESSION['csrf_token']);
    }

    
    if(csrf_token_is_valid()) {
        echo $_POST['amount'];
    } else {
        echo "Invalid request!";
    }
?>

