<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Page</title>
    
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
?>
  <div class="login" style="margin :0 auto; width: 600px;">
  <h2 class="header">Login Here...</h2>  
  <form method="post">
	<input type="text" name="user" placeholder="Username...">
	<input type="password" name="pass" placeholder="Password...">
	<input type="submit" name="login" value="Log In">
  </form>
  <?php
    if(isset($_POST['user'])&&isset($_POST['pass'])){
        if ($_POST['user']=='admin' && $_POST['pass']=='admin123') {
            $_SESSION['user'] = $_POST['user'];
            header('location:http://localhost/admin/index.php');
        } else {
            echo "<br>Wrong username or password";
        }
    }
  ?>
  </div>
  <?php    
    } else {
        echo "<div style=\"margin :0 auto; width: 600px;\">";
        echo "Selamat Datang ".$_SESSION['user']."!<br>";
        echo "<a href='logout.php'>LOGOUT</a>";
        echo "</div>";
    }
  ?>
</body>
</html>

