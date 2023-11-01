<?php

session_start();
if (isset($_SESSION['loggedin']) && 'loggedin' == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myfooddelivary.com</title>
    <!-- <link rel="stylesheet" href="cssStyle.css"> -->
    <!-- <link rel="stylesheet" media="screen and (max-width:960px )" href="phone.css"> -->
    <style>
        /* Reset css */
* {
  margin: 0;
  padding: 0;
}

html {
  scroll-behavior: smooth;
}

/* Navigation bar  */

#navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: sticky;
  top: 0px;
}

#navbar::before {
  content: "";
  background-color: black;
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: -1;
  opacity: 0.4;
}

/* logo and images  */
#logo {
  margin: 7px 20px;


}

#logo img {
  margin: -2px 10px;
  height: 66px;

}

/* List styling */
 
.items {
  margin-right: 471px;
}

#navbar ul {
  display: flex;
  align-items: center;
  text-decoration: none;
}

#navbar ul li {

  list-style: none;
}

#navbar ul li a {
  color: white;
  display: block;
  padding: 12px 28px;
  text-decoration: none;
  font-size: 1.3rem;
  border-radius: 18px;

}

#navbar ul li a:hover {
  color: black;
  background-color: white;

}

/* Home Section  */
#home {

  padding: 3px 4px;
  height:  48vh;
  margin: 54px 200px;
  display: flex;
  flex-direction: column;
  text-align: center;
  justify-content: center;
}

#home::before {
  content: "";
  position: absolute;
  top: 0px;
  left: 0px;
  background: url("images/bg1.jpeg") no-repeat center center/cover;
  height:  74%;
  width: 100%;
  z-index: -1;
  opacity: 5.89;

}

#home h1 {
  font-size: 2.8rem;
  color: white;

  text-align: center;
  padding: 12px;
  font-family: 'Shantell Sans', cursive;

}

#home p {
  color: white;
  text-align: center;
  font-size: 1.3rem;
  font-family: 'Shantell Sans', cursive;
}

/* Services section  */
/* #services-container {} */

.services {
  display: flex;

}

.box {
  background: #d4dfe4;
   
  display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  border: 2px solid black;
  height:  44vh;
  width: 32vw;
  border-radius: 23px;
  margin: 2px 6px;

}

.box img {
  width: 259px;
  height: 175px;
  /* margin-left: 100px; */
}

.center {
  text-align: center;
}

/* Client section  */

#client-section {
  height:  55vh;
  margin-top: 34px;

}

#client-section::before {
  content: "";

  position: absolute;
  background: url("images/bg2.jpg") no-repeat center center/cover;

  height: 48%;
  width: 100%;
  z-index: -1;
  opacity: 1.4;

}

#clients {
  display: flex;
  justify-content: center;
  align-items: center;

}

#clients img {
  height: 90px;
  margin: 5px 34px;
  padding: 2px 4px;

}

/* Contact Section  */
#contact-section {
  position: relative;

}

#contact-section::before {
  content: "";
  position: absolute;
  background: url("images/bg3.jpg") no-repeat center center/cover;
  height: 107%;
  width: 100%;
  z-index: -1;
  opacity: 3.4;

}

#contact-box {
  background: #ede1e1;
  display: flex;
  direction: colom;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 35%;
  margin: auto;
  padding: 15px 3px;
  border: 2px solid #8b2708;
  border-radius: 24px;
}

.formgroup {
  padding: 8px 24px;
  margin: 3px 3px;

}

/* Footer section  */
footer {
  margin:  40px 0px;
  padding: 4px 20px;
  height: 100%;
  background: black;
  color: white;
}

/* utility classes  */
.h-primary {
  font-size: 2.8rem;
  color: black;

  text-align: center;
  padding: 12px;
  font-family: 'Shantell Sans', cursive;

}

.h-secondry {
  font-size: 2.8rem;
  text-align: center;
  padding: 12px;
  font-family: 'Shantell Sans', cursive;
  color: black;



}

.btn {

  width: 174px;
  font-size: 1.4rem;
  border: 2px solid white;
  background: white;
  color: #b80505;
  padding: 9px 20px;
  margin: auto;
  margin-top: 23px;
  border-radius: 10px;
  cursor: pointer;
}

.btn:hover {
  color: rebeccapurple;
  background: lightgray;
}

a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: none;
}

.catering-container {
  height: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-size: 2.3em;
}
        @media screen and (max-width:1000px ) {
            /* *{
                background-color: red;
            } */

            /* Navigation */
 
#logo img {
     
    height: 41px;
    width: 43px;
    border-radius: 15px;
 }
 
 #navbar {
     flex-direction: column;
     /* width:  141%; */
 }
 
 #navbar ul li a{
     font-size: 1.2rem;
     padding: 0px 7px;
     padding-bottom: 8px;
 }
 #navbar::before{
    /* width:  191%; */
    
 }
 .items {
    margin-right: 0px;
}
 .login{
    margin-top:  0px;
 }
 /* Home section */
 #home{
     height:   25vh; 
     padding: 29px 0px;
    margin: 2px 9px;
    /* width:  141%; */
 }
 #home h1{
    font-size: 1.6rem;
 }
 
 #home::before{
    height: 39%;
    
    /* width: 146%; */
 }
 
 #home p{
    font-size: 0.6rem;
    display: none;
 }
 .box img {
    width: 239px;
    height: 167px;
    /* margin-right:  35px; */
    /* margin-left: 72px; */
}
.box  .big{
   

}
 
 /* Services section  */
 
 .services{
     flex-direction: column;
     /* display: flex; */
     justify-content: center;
     align-items: center;
     /* margin-left: 35px; */
 
 }
 
 #services-container {
    margin-top: -38px;
    /* width: 135%; */
 }
 
 #services .box { 
  flex-direction: column;
     padding: 14px;
     margin: 2px 0px; 
     margin-bottom: 20px;
 }
.box{
    height: 44vh;
    width: 93vw;
    margin: 6px 1px;

    flex-direction: column;
    justify-content: flex;
    
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}
.h-secondry {
    font-size: 2.7rem;
}
 /* Clients section */
 #clients{
     flex-wrap: wrap;
 }
 #client-section::before{
     height:  27%;
     /* width: 145%; */
 }
 #client-section{
    /* width: 140%; */
    height: 40vh;
 }
 
 #clients img{
    width: 50px;
     padding: 2px;
     height: auto;
 }
 
 /* Contact us section */
 
  
 #contact-section {
     
    margin-top: -82px;
    /* width:   145%; */
}
#contact-section::before{
    /* width: 108%; */
}
 
 
 #contact-box{
    width:  83%;
 }
 #contact-box form{
     width:80%;
 }
 .formgroup textarea{
  margin: 1px 35px;
 }
 .message1{
  margin: 0px 37px;
 }
 /* Footer */
 
 /* Utility classes */
 .h-primary{
     font-size:26px;
 }
 .btn{
     font-size: 15px;
     padding: 2px 8px;
    width: 94px;
 }
 footer{
    margin: 45px 0px;
    /* width: 135%; */
 }
 
 

 
            
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/logo.jpg" alt="Error">
        </div>
         
        <div class="items">
            <ul>
                <li class="item"><a href="#home">Home</a>
                </li>
                <li class="item"><a href="#services-container">Services</a></li>
                <li class="item"><a href="#client-section">Clients</a></li>
                <li class="item"><a href="#contact-section">Contact us</a></li>
            </ul>
        </div>
        <div class="login">
            <ul>
                <?php
                if (!$loggedin) {
                    echo '<li class="item"><a href="login_tool/login.php">log in</a></li>
                 <li class="item"><a href="login_tool/signup.php">Sign in</a></li>';
                }
                if ($loggedin) {
                    echo ' <li class="item"><a href="login_tool/logout.php">log out</a></li>';
                }

                ?>

            </ul>
        </div>

        
       
        
    </nav>
    <section id="home">
        <h1 class="h-primary">
            Welcome to My website
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, incidunt perspiciatis placeat quaerat
            exercitationem illum, doloribus necessitatibus dignissimos .</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore fuga iusto asperiores maxime hic amet!</p>
        <button class="btn">Order Now</button>
    </section>
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div class="services">
        <a href="services/food_catring.php"> 
            <div class="box">
             
                <img class="big" src="images/pizz1.png" alt="Error loading">
                <h1 class="h-secondry center">
                    Food Catering
                </h1>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias ratione obcaecati
                    quis Lorem, ipsum. </p>
                    
            </div>
            </a>

            <a href="services/bulk_catring.php"> 
            <div class="box">
                <img src="images/sandwitch.png" alt="Error loading">
                <h1 class="h-secondry center">
                    Bulk Catering
                </h1>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias ratione obcaecati
                    quis Lorem, ipsum. </p>
            </div>
            </a>

            <a href="services/food_odering.php"> 
            <div class="box">
                <img src="images/truck.png" alt="Error loading">
                <h1 class="h-secondry center">
                    Food Odering
                </h1>
                <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. At alias ratione obcaecati
                    quis Lorem, ipsum.</p>
            </div>
            </a>


        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">
            Our Clients
        </h1>
        <div id="clients">
            <div class="clients-items">
                <img src="images/applogo.jpg" alt="Error">
            </div>

            <div class="clients-items">
                <img src="images/mslogo.png" alt="Error">
            </div>

            <div class="clients-items">
                <img src="images/hplogo.png" alt="Error">
            </div>

            <div class="clients-items">
                <img src="images/Delllogo.jpg" alt="Error">
            </div>
        </div>
    </section>

    <section id="contact-section">
        <h1 class="h-primary center">
            Contact Us
        </h1>
        <form action="./contact-form/contact.php" method="post"> 
        <div id="contact-box">
            <div class="formgroup">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>

            <div class="formgroup">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your Mail ID">
            </div>

            <div class="formgroup">
                <label for="phone">Phone:</label>
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone Number">
            </div>

            <div class="formgroup">
                <label  class = "message1" for="message">Message: </label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <button class="btn">Submit</button>

        </div>
        </form>
        
    </section>
    <footer>
        <div class="center">
            copyright &copy; www.onlineMymeal.com All right reserved!
        </div>
    </footer>
</body>

</html>