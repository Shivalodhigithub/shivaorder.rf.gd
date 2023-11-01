<?php
 
session_start();
if(!isset($_SESSION['loggedin']) && 'loggedin'==true){
    
     
    header("location:../login_tool/login.php");
 
}
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssStyle.css">
    <link rel="stylesheet" href="services.css">
    <style> 
     body {

background: url("../images/catering1.avif") no-repeat center center/cover;
opacity: 2.6;
height: 100vh;

}
@media screen and (max-width:1000px ){
    .catering-container{
        font-size: 1.3em;
    }
}
    </style>
    <title>Bulk catering </title>
</head>
<body>
<div class="catering-container">
        <h2 class="h-secondry">WelCome in my Bulk Catering</h2>
        <p class="para-class">
            I'm learner so my objective is not provide facilties to food catering because my objective is
        </p>
        <p class="para-class"> that learn devlopment of web pages.After learning I will provide may be.</p>
        <p class="para-class">
            If you want to do <b>Food catering </b> then click on the button below.
        </p>
        <a href="https://www.freshmenu.com/" target="_blank"><button class="btn">Click here</button></a>
    </div>

</body>
</html>