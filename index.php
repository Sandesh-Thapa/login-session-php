<?php
    session_start();
    if(isset($_SESSION['username'])){
        $userloggedin = $_SESSION['username'];
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
            <style>
                a{
                    text-decoration: none;
                    padding: 5px;
                    background: red;
                    color: #fff;
                    border-radius: 3px;
                }
            </style>
        </head>
        <body>
            <h1>Welcome <?php echo $userloggedin ?></h1>
            <a href="logout.php">Logout</a>
        </body>
        </html>
<?php    }
    else{
        header("Location: login.html");
    }



?>