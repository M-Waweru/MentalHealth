<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  
 <title>SignUp Form</title>

<style>
body{
   margin: center; 
   padding:0;
   /*background-size: cover;
   background-position: center;*/
   font-family: sans-serif;

  
   
 }

.button {
    background-color: purple;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
a:hover{
  background-color: blue;
}

  .wrap{
    width: 480px;
    height: 620px;
    background: white
    color: grey;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 60px 5px;
    background-color: grey;
    background-image: url('background.jpg');
}
    
      


h2{
text-align:center;
background:purple;
color:white;
padding:10px;
border-radius:10px;

}
input{
padding:10px;
margin:5px;
border-radius:5px;
border:none;
}
input[type=text],input[type=email],input[type=number],input[type=text]
{
width:90%;
}
input[type=submit]{
width:95%;
background:purple;
cursor:pointer;
font-size:18px;
font-weight:bold;
color:white;
}
input[type=submit]:hover{
background:blue;
}
select{
padding:10px;
width:32%;
border-radius:5px;

}



</style>
</head>
<body class="Signup is-preload">

<div class="wrap">

    <form name="my form" method="post">
       
 <h2> EVENT REGISTRATION FORM </h2>  
 <input type="text" name ="yourIDno" placeholder="Your ID Number" autocomplete="off" required>
 <input type="text" name ="yourname" placeholder="Your Name" autocomplete="off" required>
 <input type="email" name ="email" placeholder="Your Email" autocomplete="off" required>
 <input type="number" name ="number" placeholder="Mobile Number" autocomplete="off" required>
 <br>
 <br>
 
   <input type="checkbox"> I Agree to The Terms And Conditions
   <br><br>

   <input type="submit" name="register" class="button"/>
  
   
   </form>

   
</div>

</body>
</html>﻿
