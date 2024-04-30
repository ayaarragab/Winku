<?php
require_once("Person.php");
require_once("Content.php");
require_once("User.php");

class Admin extends Person {

    public function __construct($Fname, $sname, $username, $email, $password, $gender) {
        // Call the parent constructor
        parent::__construct($gender, $Fname, $sname, $username, $email, $password, 0, 0, 0, '', '', '', '');
    }
}
  
class Admin_with_users extends Admin{
    public function getAllUsers()
    {
        // Add logic to get all users    
    }
  
    public function deleteUser($userId)
    {
        // Add logic to delete a user
    }
  
    }
class Admin_with_content extends Admin{
    public $answers = array();
    public $questions = array();
  public function getAllAnswers()
  {
      // Add logic to get all answers
  }

  public function getAllQuestions()
  {
      // Add logic to get all questions
  }

  public function deleteQuestion($questionId)
  {
      // Add logic to delete a question
  }

  public function deleteAnswer($answerId, $questionId)
  {
      // Add logic to delete an answer
  }

}



class Admin_with_categories extends Admin{

  public $recommended_category = array();
  
  public function approveUserCategory($categoryName, $categoryDescription)
  {
      // Add logic to approve user category
  }

  public function discardUserCategory($categoryName)
  {
      // Add logic to discard user category
  }

  public function createCategory($categoryName, $categoryDescription)
  {
      // Add logic to create a category
  }

  public function createSubcategory($categoryId, $subcategoryName, $subcategoryDescription)
  {
      // Add logic to create a subcategory
  }

  public function deleteCategory($categoryId)
  {
      // Add logic to delete a category
  }

  public function deleteSubcategory($subcategoryId)
  {
      // Add logic to delete a subcategory
  }
  
}
?>