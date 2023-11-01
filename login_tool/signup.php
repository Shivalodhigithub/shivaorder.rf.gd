<?php
$ShowAlert=false;
$ShowErr=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    
    include("db_connection.php");
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $exits=false;
    // check wheter this user name exist 
    $existsql="SELECT * FROM `sign` WHERE name='$name' ";
    $result=mysqli_query($con,$existsql);
    $numRowexists=mysqli_num_rows($result);
    if( $numRowexists > 0)
    {
        $exits=true;
        $ShowErr=" User name already Exists";
    }
    else{
        // $exits=false;

        if(($password==$cpassword)) 
    {
        $hash=password_hash($password,  PASSWORD_DEFAULT); // make password hash for user security
        $sql="INSERT INTO `trip`.`sign` ( `name`, `email`, `password`, `dt`) VALUES ( '$name', '$email', '$hash', current_timestamp());";

        $result=mysqli_query($con,$sql);
        if($result)
        {
            $ShowAlert=true;
        }

    }
    else{
        $ShowErr="Password do not match";
     }
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
    <title>Sign up</title>
</head>
<body>
     
    <?php
     
     if($ShowAlert)
     {
         
        echo ' <div class="showAlert">
        <strong>Success!</strong> Your account is now created and you can login
      
        <a href="login.php"> <button class="btn-s" >log in</button></a>

         
    </div> ';
     }
     if ($ShowErr)
     {
         

       echo ' <div class="showErr">
        <strong>Error!</strong> '. $ShowErr.'
        <a href="login.php"> <button class="btn-s" >log in</button></a>

         
    </div> ';
     }
  

    ?>
    <div class="container">
        <h2 class="h-secondry">Sign up to my website</h2>
         <p class="para-class">Please fill in this form to create an account.</p>
         <div class="form">
            <form action="signup.php" method="post"> 
                <div class="form-group">
                    <label for="name"><b>Name</b></label><br>
                    <input type="text" name="name" placeholder="Enter user name"><br>
                </div>
                <div class="form-group">
                     <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required><br>

                </div>
                <div class="form-group">
                    <label for="password"><b>password</b></label><br>
                    <input type="password" name="password" id="password" placeholder="Enter password"><br>
                </div>
                <div class="form-group">
                    <label for="cpassword"><b>Conform password</b></label><br>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Conform password"><br>
                    
                </div> 
                
                    <label   for="" class="checkbox">
                        <input type="checkbox" name="" id="">Remeber me
                    </label>
              
                 <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="button" >
                  
                <button class="btn-s" >Sign up</button>
                    <button class="btn-s">Reset</button>
                </div>
            </form>
         </div>
    </div>
</body>
</html>