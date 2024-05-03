<?php
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\questionControllers\questionBuilder.php';
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\questionControllers\questionMapper.php';
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Models\Question.php';
class UserToQuestion{

  public function addQuestion($username ,$title, $body, $tags, $subcategoryId)
  {
      // Check if user is logged in
      if (!isset($_SESSION['username'])) {
          // Redirect user to landing page if not logged in
          // return header('Location: landing.php');
      }

          // Create a new Question object
          $date = date("Y-m-d");
          $question = new Question($username, $body, $tags, $subcategoryId, $date, "0", '0', '0', $title);
          
          // Insert the question into the database
          $result = QuestionMapper::add($question);

          // Check if question was added successfully
          if ($result) {
              echo "Question added successfully";
              echo $result; // Assuming $result contains some identifier of the added question
          } else {
              echo "Error adding question";
          }
  }




  
   
    public function deleteQuestion($id)
    {
      $result = UserMapper::delete($id, 'id');
        
            if ($result) {
                echo "Category deleted successfully";
            } else {
                echo "Error deleting Category";
            }
      
      
    }
    public function bookmarkQuestion($questionId)
    {

    }
    public function reportQuestion($id)
    {
      $rep =CategoryMapper::selectSpecificAttr($id, 'id', 'numberOfreports');
        $newrep = $rep + 1;
        $arr = array("numberOfreports" => $newrep);
        $result = CategoryMapper::edit($id, $arr, "id");
        if ($result) {
            echo "category reported successfully";
        } else {
            echo "Error reporting Category";
        }
    }   
    public function reactToQuestion($questionId){

    }
} 


/*public function addQuestion($title, $body, $tags ,$subcategoryId)
    {
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Process form data
      print(var_dump($_POST));
        $title = $_POST['title'];
        $body = $_POST['body'];
        $tags = $_POST['tags'];
        $subcategoryId = $_POST['subcategoryId'];
      echo'yarab elproject ymooot';
        // Instantiate UserToQuestion class and call addQuestion method
        $userToQuestion = new UserToQuestion();
        $userToQuestion->addQuestion($title, $body, $tags, $subcategoryId);
    }
    else
    {echo'aaaaaab';}

      if(!isset($_SESSION['username']))
        {
          echo 'eeeeh';
          return header('Location: landing.php');
        } 



  
	/*if ($_SESSION && isset($_SESSION['username'])) {
        // User is logged in
        $username = $_SESSION['username'];	
    }
	echo $title;
	$date = date("Y-m-d");
	// Create an object (assuming your DBController expects an object)
    $question = new Question('temp', $body, $tags ,$subcategoryId,$date , "0", '0', '0', $title);
    
    
    // Insert the object into the database using your DBController
    $result = QuestionMapper::add($question); // Modify this according to your DBController
    
    if ($result) {
        echo "Question added successfully";
		echo $result;
    } else {
        echo "Error adding question";
    }


    }*/