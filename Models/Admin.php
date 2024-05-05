<?php

$controllers = glob('../Controllers/adminControllers/*.php');
foreach ($controllers as $controller) {
    require_once $controller;
}
require_once 'D:\Xampp\htdocs\Winku\Winku\Controllers\database\dbConnection.php';

class Admin {

    public $AdminBlider;
    public $AdminToUser;
    public $AdminToQuestions;
    public $AdminToAnswer;
    public $AdminToCategory;
    public $AdminToSubcategory;

    public function __construct($username, $email, $password) {
        $this->AdminBlider = new AdminBuilder($username, $email, $password);
        $this->AdminToUser = new AdminToUsers();
        $this->AdminToQuestions = new AdminToQuestions();
        $this->AdminToAnswer = new AdminToAnswers();
        $this->AdminToCategory = new AdminToCategory();
        $this->AdminToSubcategory = new AdminToSubcategory();
    }
}

?>

<?php

$newadmin = new Admin("admin", "admin", "admin1234");
// $newadmin->AdminToCategory->addCategory('AI ');  // Warning: Undefined global variable $_SESSION
// $newadmin->AdminToCategory->deleteCategory('IS'); //Fatal error: Uncaught mysqli_sql_exception
$newadmin->AdminToSubcategory->addSubcategory('AI');//Warning: Undefined global variable $_SESSION
// $newadmin->AdminToSubcategory->deleteSubCategory('network2'); // nothing happens 
// $newadmin->AdminToQuestions->getAllQuestions(); works well 
// $newadmin->AdminToQuestions->deleteQuestion(21); works well 
// $newadmin->AdminToUser->getAllUsersNames();works well 
// $newadmin->AdminToUser->deleteUser('ayaaa');works well
// $newadmin->AdminToQuestions->getAllQuestions(); workes well 
// print_r($newadmin->AdminToAnswer->getAllAnswers(22)); works well 
// $newadmin->AdminToAnswer->deleteAnswer(2, 22);works well
// $newadmin->AdminToQuestions->deleteQuestion(23); works well 
?>