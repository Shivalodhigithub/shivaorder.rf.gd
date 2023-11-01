<?php
$login = false;
$ShowErr = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("db_connection.php");
    $name = $_POST["name"];

    $password = $_POST["password"];


    // $sql= "Select * from  sign where name='$name' AND password='$password'";
    $sql = "Select * from  sign where name='$name'";

    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;

                // Start the session 
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $name;
                header("location:../index.php");
            } else {
                $ShowErr = "Password do not match";
            }
        }
    } else {
        $ShowErr = "Invalid credentials";
    }
}
// else{
//     echo "Check manually something wents to wrong:";
// }


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
            .container{
    margin-top: 43vw;
    font-size: 0.6em;
 }
 .container h2{
    font-size: 2.6em;
 }
 .para-class{
    font-size: 15px;
 }
 
 .form-group input{
    width: 65vw;
 }
 .button{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
 }
 
.btn-s{
    width: 17vw;
}
         }
    </style>
    <title> log in</title>
</head>

<body>
    <?php

    if ($login) {
        echo '<div class="showAlert">
          <strong>Successfull</strong> You ae logged in
          </div>
          ';
    }
    if ($ShowErr) {
        echo ' <div class="showErr">
        <strong>Error!</strong> '. $ShowErr.'
         
    </div> ';
    }


    ?>
    <div class="container">
        <h2 class="h-secondry">Login to my website</h2>
        <p class="para-class">Please fill in this form to login for my website</p>
        <div class="form">
            <form action=" login.php" method="post">
                <div class="form-group">
                    <label for="name"><b>Name</b></label><br>
                    <input type="text" name="name" placeholder="Enter user name"><br>
                </div>

                <div class="form-group">
                    <label for="password"><b>password</b></label><br>
                    <input type="password" name="password" id="password" placeholder="Enter password"><br>
                </div>


                <div class="button">
                    <button class="btn-s">Log in</button>
                    <button class="btn-s">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>