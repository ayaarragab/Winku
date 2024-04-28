<?php 
session_start();

include_once '../controllers/dbControllers.php';
include_once '../Models/Question.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST['title'];
    $body = $_POST['body'];
    $tags = $_POST['tags'];
	if ($_SESSION && $_SESSION['username'] && $_SESSION['userId']) {
		$username = $_SESSION['username'];
		$userId = $_SESSION['userId'];	
	}
	echo $title;
	$date = date("Y-m-d");
	// Create an object (assuming your DBController expects an object)
    $question = new Question('ayaragab', $body, $tags ,$date , "0", '0', '0', $title);
    
    
    // Insert the object into the database using your DBController
    $result = DBMapper::add('questions',$question); // Modify this according to your DBController
    
    if ($result) {
        echo "Question added successfully";
    } else {
        echo "Error adding question";
    }
// } else {
//     // Redirect back to the form if accessed directly
//     echo"smth went wrong";
//     exit;
}