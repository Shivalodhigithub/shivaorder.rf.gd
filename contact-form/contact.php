<?php
$insert=false;
if(isset($_POST['name'])){
    include("../login_tool/db_connection.php");

    // collect post variable 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql="INSERT INTO `contact` ( `name`, `email`, `phone`, `other`, `date`) VALUES (  '$name', '$email', '$phone', '$message', current_timestamp())";
    if($con->query($sql)==true){
        // echo "Successfully data is inserted:";
        
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error ";

    }
       
    

    // data base connection is close 
    $con->close();

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-form</title>
    <style>
        p{
            background: #c7aa95;
    height: 33px;
    padding: 23px;
    text-align: center;

        }
    </style>
</head>
<body>
    <?php
if($insert){
           echo '<p>Your data is inserted  Successfully..<b> Soon I will do response your Email <b> </p>';
        }
        ?>
    
</body>
</html>