<?php include 'validation.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div id="main">
       
        <div class="form">
            <img src="image/ava.jpg" alt="avatar">
                    <div id="arun">
                                    <h1>
                                        Get Started
                                    </h1>
                                    <form  method="POST">

                                    
                                        <p>
                                            <label for="user">First Name</label>
                                            <input type="text" name="firstName" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $firstName;?>"  placeholder="Enter First Name" require>
                                            <span style="color: red;">
                                            <?php 
                                                  if(isset($errors['firstName'])) {
                                                      echo $errors['firstName'];
                                                  }
                                              ?>
                                            </span>
                                           
                                            
                                        </p>
                                        <p>
                                            <label for="user">Last Name</label>
                                            <input type="text" name="lastName" placeholder="Enter Last Name" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $lastName; ?>"   require>
                                            <span style="color: red;">
                                            <?php 
                                            
                                                  if(isset($errors['lastName'])) {
                                                      echo $errors['lastName'];
                                                  }
                                              ?>
                                            </span>
                                           
                                            
                                        </p>
                                        <p>
                                            <label for="user">Email</label>
                                            <input type="text" name="email" value="<?php   if($_SERVER['REQUEST_METHOD']=='POST') if($_SERVER['REQUEST_METHOD']=='POST') echo $email; ?>" placeholder="www.email.com" require>
                                            <span style="color: red;">
                                            <?php 
                                                  if(isset($errors['email'])) {
                                                      echo $errors['email'];
                                                  }
                                              ?>
                                            </span>
                                          
                                            
                                        </p>
                                        <p>
                                            <label for="pass">Password</label>
                                            <input style="display: block; width:100%; background:transparent; outline:none; border:none; color:white;   border-bottom: 1px solid red;" type="password" id="pass" name="password" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $password; ?>" placeholder="Enter Password" require>
                                            <span style="color: red;">
                                            <?php 
                                                  if(isset($errors['password'])) {
                                                      echo $errors['password'];
                                                  }
                                              ?>
                                            </span>
                                            
                                        </p>
                                        <p>
                                            <label for="user">Address</label>
                                            <input type="text" name="address" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $address; ?>" placeholder="Enter Address" require >
                                            <span style="color: red;">
                                            <?php 
                                                  if(isset($errors['address'])) {
                                                      echo $errors['address'];
                                                  }
                                              ?>
                                            </span>
                                           
                                            
                                        </p>
                                        <p>
                                            <button type="submit">Sign UP</button>
                                           
                                        </p>
                                        <p>
                                            
                                                <a href="#">Lost your password?</a>
                                                <a href="#">Don't have an account?</a>
                                            
                                        </p>
                                        
                                        
                                        
                                        
                                    </form>
                    </div>
        </div>

    </div>
   

    
</body>
</html>

