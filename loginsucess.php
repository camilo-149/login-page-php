<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false){
        header("location:index.php");
    }
?>

<!DOCTYPE HTML>
<html>
<body>
<h3> You have logged in successfully!</h3>
    
<!-- Logout Button -->
<form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>
    
</body>
</html>
