<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){ 
    session_start();
session_unset();
session_destroy();

 
header("location: ../index.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        *{
        background-color: lightgray;
     }
     @media screen and (max-width:1000px ){
        .showAlert{
            height: 67px;
        }
     }
    </style>
    <title>logout</title>
</head>
<body>
    <h1>logout</h1>
    <form action=" logout.php" method="post"> 
    <div   class="showAlert">
                <span>Now you can log out <b> click here-</b> <button class="btn-s">Log out</button></span>
                    
                </div>
                </form>

                
</body>
</html>