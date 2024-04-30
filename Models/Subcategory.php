<?php
require_once "Classification.php";
require_once '../controllers/dbControllers.php';

class Subcategory extends Classification{

    protected $subCategory_id;
    protected $numberOfQuestions;
    protected $numberOfAnswers;
    protected $ownerUsername;
    protected $questions; // of question objs
    protected $Category_id;

    public function __construct($name, $ownerUsername,$Category_id) {
        $this->name = $name;
        $this->ownerUsername = $ownerUsername;
        $this->Category_id = $Category_id;
    }

    public function getnumberOfAnswers(){
        return $this->numberOfAnswers;
    }

    public function getownerusername(){
        return $this->ownerUsername;
    }

    public function getnumberOfreports(){
        return $this->numberOfreports;
   }

/*   public function getQuestions(){
    return $this-> Category_id ;
    return $this-> SubCategory_id ;
   }
*/
   public function getnumberOfQuestions(){
    return $this->numberOfQuestions;
   }
}
