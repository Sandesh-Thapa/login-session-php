<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    if($username == 'admin' && $password == 'pass') {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    }
    else {
        echo "<script>alert('Incorrect Username or Password !!!')</script>";
        header("Location: login.html");
    }


}

?>