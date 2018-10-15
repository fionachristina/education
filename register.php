

    <?php

    // Include config file

    require_once 'config.php';

     

    // Define variables and initialize with empty values

    $username = $password = $confirm_password = "";

    $username_err = $password_err = $confirm_password_err = "";

     

    // Processing form data when form is submitted

    if($_SERVER["REQUEST_METHOD"] == "POST"){

     

        // Validate username

        if(empty(trim($_POST["username"]))){

            $username_err = "Please enter a username.";

        } else{

            // Prepare a select statement

            $sql = "SELECT id FROM users WHERE username = ?";

            

            if($stmt = mysqli_prepare($link, $sql)){

                // Bind variables to the prepared statement as parameters

                mysqli_stmt_bind_param($stmt, "s", $param_username);

                

                // Set parameters

                $param_username = trim($_POST["username"]);

                

                // Attempt to execute the prepared statement

                if(mysqli_stmt_execute($stmt)){

                    /* store result */

                    mysqli_stmt_store_result($stmt);

                    

                    if(mysqli_stmt_num_rows($stmt) == 1){

                        $username_err = "This username is already taken.";

                    } else{

                        $username = trim($_POST["username"]);

                    }

                } else{

                    echo "Oops! Something went wrong. Please try again later.";

                }

            }

             

            // Close statement

            mysqli_stmt_close($stmt);

        }

        

        // Validate password

        if(empty(trim($_POST['password']))){

            $password_err = "Please enter a password.";     

        } elseif(strlen(trim($_POST['password'])) < 6){

            $password_err = "Password must have atleast 6 characters.";

        } else{

            $password = trim($_POST['password']);

        }

        

        // Validate confirm password

        if(empty(trim($_POST["confirm_password"]))){

            $confirm_password_err = 'Please confirm password.';     

        } else{

            $confirm_password = trim($_POST['confirm_password']);

            if($password != $confirm_password){

                $confirm_password_err = 'Password did not match.';

            }

        }

        

        // Check input errors before inserting in database

        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

            

            // Prepare an insert statement

            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

             

            if($stmt = mysqli_prepare($link, $sql)){

                // Bind variables to the prepared statement as parameters

                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

                

                // Set parameters

                $param_username = $username;

                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

                

                // Attempt to execute the prepared statement

                if(mysqli_stmt_execute($stmt)){

                    // Redirect to login page

                    header("location: login.php");

                } else{

                    echo "Something went wrong. Please try again later.";

                }

            }

             

            // Close statement

            mysqli_stmt_close($stmt);

        }

        

        // Close connection

        mysqli_close($link);

    }

    ?>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js">
</script>

<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>

<html lang="en">
 
   <head> 
        
<meta name="viewport" content="width=device-width, initial-scale=1">
        
<link rel="stylesheet" type="text/css" href="signup.css">

        
<!-- Website CSS style -->
        
<link rel="stylesheet" type="text/css" href="assets/css/main.css">

        
<!-- Website Font style -->
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        
<!-- Google Fonts -->
        
<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        
<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
            
<!--
            CSS
            ============================================= -->
           
<link rel="stylesheet" href="css/linearicons.css">=
            
<link rel="stylesheet" href="css/font-awesome.min.css">
            
<link rel="stylesheet" href="css/magnific-popup.css">
            
<link rel="stylesheet" href="css/nice-select.css">
            
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            
<link rel="stylesheet" href="css/bootstrap.css">
            
<link rel="stylesheet" href="css/main.css">
            
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style type="text/css">

            body{ font: 14px sans-serif; }

            .wrapper{ width: 350px; padding: 20px; }                

        </style>
<title>Signup page</title>
    
</head>


<header class="default-header">
                
<div class="container">
                    
<div class="header-wrap">
                        
<div class="header-top d-flex justify-content-between align-items-center">
                            
<div class="logo">
                                
<a href="#home"><img src="img/logo.png" alt=""></a>
                            
</div>
                            
<div class="main-menubar d-flex align-items-center">
                                
<nav class="hide">
                                    
<a href="#home">Home</a>
                                   
 <a href="#service">Services</a>
                                    
<a href="#appoinment">Appoinment</a>
                                    
<a href="#consultant">Consultants</a>
                                
</nav>
                                
<div class="menu-bar"><span class="lnr lnr-menu">
</span>
</div>
                            
</div>
                        
</div>
                    
</div>
                
</div>
            
</header>  

    <body>


<div class="container">
                            
      <div class="panel-heading">
                   
        <div class="panel-title text-center">
                        
            <h1 class="title">Sign up</h1>
                        
        </div>
                
     



           <div class="container">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                    <label>Username</label>

                    <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">

                    <span class="help-block"><?php echo $username_err; ?></span>

                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password</label>

                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">

                    <span class="help-block"><?php echo $password_err; ?></span>

                </div>

                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">

                    <label>Confirm Password</label>

                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">

                    <span class="help-block"><?php echo $confirm_password_err; ?></span>

                </div>

                <div class="form-group">

                    <input type="submit" class="btn btn-primary" value="Submit">

                    <input type="reset" class="btn btn-default" value="Reset">

                </div>

                <p>Already have an account? <a href="login.php">Login here</a>.</p>

            </form>

        </div>    
</div>
</div>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

    </body>

    </html>

