<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'scholarly');

// variable declaration
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $name, $book_cover, $link;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
   
	$name =  e($_POST['sname']);
	$book_cover =  e($_POST['book_cover']);
	$link =  e($_POST['link']);

	// form validation: ensure that the form is correctly filled

	if (empty($name)) { 
		array_push($errors, "Name is required"); 
	}
	if (empty($book_cover)) { 
		array_push($errors, "Book_cover link is required"); 
	}
	if (empty($link)) { 
		array_push($errors, "Link is required"); 
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		if (isset($_POST['status'])) {
			$query = "INSERT INTO subject (sname, book_cover, link) 
					  VALUES('$name', '$book_cover', '$link')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New book successfully created!!";
			header('location: addbook.php');
		}else{
			$query = "INSERT INTO subject ( sname, book_cover, link) 
					  VALUES('$name', '$book_cover', '$link')";
			mysqli_query($db, $query);
			$logged_in_user_id = mysqli_insert_id($db);
			$_SESSION['success']  = "You are now logged in";
			header('location: addbook.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
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
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['access_level'] == '1' ) {
		return true;
	}
	else{
		return false;
	}
}
if (isset($_POST['update_btn'])) {
	update();
}
function update(){
if (count($errors) == 0) {
		$query = "UPDATE block SET status='Occupied' WHERE id='$username' LIMIT 1";		
		$results = mysqli_query($db, $query);

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
       }
   }
}
?> 
