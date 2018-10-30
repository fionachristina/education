    <?php

    /* Database credentials. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    define('link_SERVER', 'localhost');

    define('link_USERNAME', 'root');

    define('link_PASSWORD', '');

    define('link_NAME', 'scholarly');

     

    /* Attempt to connect to MySQL database */

    $link = mysqli_connect(link_SERVER, link_USERNAME, link_PASSWORD, link_NAME);

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    // connect to database

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    register();
}

// REGISTER USER
function register(){
    // call these variables with the global keyword to make them available in function
    global $link, $errors, $username, $email;

    // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $username =  e($_POST['username']);
    $password_1  =  e($_POST['password_1']);
    $password_2  =  e($_POST['password_2']);
    

    // form validation: ensure that the form is correctly filled
    if (empty($username)) { 
        array_push($errors, "Username is required"); 
    }
    if (empty($password_1)) { 
        array_push($errors, "Password is required"); 
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password =md5($password_1);//encrypt the password before saving in the database

        if (isset($_POST['user_type'])) {
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO admins (username, user_type, password) 
                      VALUES('$username', '$user_type', '$password')";
            mysqli_query($link, $query);
            $_SESSION['success']  = "New user successfully created!!";
            header('location: adminlogin.php');
        }else{
            $query = "INSERT INTO admins (username, user_type, password) 
                      VALUES('$username', '$user_type', '$password')";
            mysqli_query($link, $query);

            // get id of the created user
            $logged_in_user_id = mysqli_insert_id($link);

            $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
            $_SESSION['success']  = "You are now logged in";
            header('location: newlogin.php');              
        }
    }
}

// return user array from their id
function getUserById($id){
    global $link;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($link, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

// escape string
function e($val){
    global $link;
    return mysqli_real_escape_string($link, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
            foreach ($errors as $error){
                echo $error .'<br>';
            }
        echo '</div>';
    }
}   

function isLoggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    }else{
        return false;
    }
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
    login();
}

// LOGIN USER
function login(){
    global $link, $username, $errors;

    // grap form values
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // make sure form is filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM admins WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($link, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {
                session_start();
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                header('location: admin.php');       
            }else{
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are notlogged in";

                header('location: appointment.php');
            }
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// ...
function isAdmin()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
        return true;
    }else{
        return false;
    }
}
?>

