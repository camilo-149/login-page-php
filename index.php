<?php  
    session_start();
    $username="professor_x";
    $password="mutant-cerebro-97";
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
        header("location:loginsucess.php");
        exit();
    }
    
    if(isset($_POST['username']) && isset($_POST['password'])) {
        if($_POST['username']==$username && $_POST['password']==$password) {
            $_SESSION['loggedin']=true;
            header("Location: loginsucess.php");
            exit();
        }
        else {
            echo "Username or password is incorrect.";

        }
    }
?>

<!DOCTYPE HTML>
<html>
<body>
<form method = "post" action="index.php">
    username:<br>
    <input type="text" name="username"><br>
    password:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="login">
    
</form>
</body>
</html>
