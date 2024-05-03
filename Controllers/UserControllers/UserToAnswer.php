<?php
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\answerController\answerMapper.php';
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Models\Answer.php';
include_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\questionControllers\questionMapper.php';
class UserToAnswer{
    public function addAnswer($questionId,$username,$body){
        $date = date("Y-m-d");
        $answer = new Answer($username, $body,$questionId, $date, "0", '0','0');
        $result = answerMapper::add($answer);

        // Check if question was added successfully
        if ($result) {
            echo "answer added successfully";
            $rep =questionMapper::selectSpecificAttr($questionId, 'id', 'numberOfAnswers');
            $newrep = $rep + 1;
            $arr = array("numOfAnswers" => $newrep);
            $result = QuestionMapper::edit($questionId, $arr, "id");
            //add answer and increament num of answers in  question by 1
            UserControllerHelper::incrementData($_SESSION['username'],'username','numAnswers');
            //inc num of answers in user
            echo $result; // Assuming $result contains some identifier of the added question

        } else {
            echo "Error adding answer ";
        }
    }
    public function deleteAnswer($answerId,$questionId)
    {
      $result = answerMapper::delete($answerId, 'id');
        
            if ($result) {
                echo "answer deleted successfully";
              UserControllerHelper::decreaseData($_SESSION['username'],'username','numAnswers');
              //dec num of answers in user  
              $rep =questionMapper::selectSpecificAttr($questionId, 'id', 'numberOfAnswers');
              $newrep = $rep + 1;
              $arr = array("numOfAnswers" => $newrep);
              $result = QuestionMapper::edit($questionId, $arr, "id");
            echo $result; // Assuming $result contains some identifier of the added question
            } else {
                echo "Error deleting question";
            }
      
      
    }
    public function reactToAnAnswer($answerId)
    {
        $rep =answerMapper::selectSpecificAttr($answerId, 'id', 'numOfReacts');
      $newrep = $rep + 1;
      $arr = array("numberOfReacts" => $newrep);
      $result = answerMapper::edit($answerId, $arr, "id");
      if ($result) {
          echo "answer reacted successfully";
      } else {
          echo "Error reacted answer";
      }
        // Add logic to react to an answer
    }

    public function reportAnswer($answerId)
    {
        $rep =answerMapper::selectSpecificAttr($answerId, 'id', 'numberOfReports');
        $newrep = $rep + 1;
        $arr = array("numOfReports" => $newrep);
        $result = QuestionMapper::edit($answerId, $arr, "id");
        if ($result) {
            echo "quesstion reported successfully";
        } else {
            echo "Error reporting question";}
        // Add logic to report an answer
    }
}
