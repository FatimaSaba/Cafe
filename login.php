<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style_images.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<p>
 <form action="check-auth.php" method="post" >
 
 <div class="container">
   <label for="uname"><b>Username</b></label>
   <input type="text" placeholder="Enter Username" name="uname" required><br>

   <label for="psw"><b>Password</b></label>
   <input type="password" placeholder="Enter Password" name="psw" required><br>

   <button type="submit">Login</button>
   <label>
     <input type="checkbox" checked="checked" name="remember"> Remember me
   </label>
 </div>

 <!--
  Login.php

* form which has 3 inputs, username, password, submit
* form has to have method post
* form has to have action to chech-auth.php


  //
  check-auth.php,
   check examples one of the classworks
-- $_POST['username'] -- saba 
-- $_POST['password'] -- sabasaba
 SELECT * FROM `userlogin` WHERE uselirname = 'saba' AND password = 'sabasaba'; 

 check -> https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_oo

if there is more than 0 rows -> set cookie as 'loggedin' and header to index.php
if there is 0 rows which means wrong password or name -> redirect to login.php



///
index.php 
check cookies if there is a cookie name 'loggedin'

if it exists show "orders" button
if there is no cookie show 'login' button



// order.php

* this has to be a page (html structure)

Select all data from users table
similar to this:  SELECT * FROM `userInformation`; 
example  check -> https://tryphp.w3schools.com/showphpfile.php?filename=demo_db_select_oo



-->

 <div class="container" style="background-color:#f1f1f1">
   <button type="button" class="cancelbtn">Cancel</button>
   <span class="psw">Forgot <a href="#">password?</a></span>
 </div>
</form> 
</P>
    
</body>
</html>