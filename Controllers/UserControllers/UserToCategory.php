<?php
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\associativeClasses\categoryUser\categoryusersMapper.php';
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\categoryControllers\CategoryMapper.php';
require_once 'userMapper.php';
$_SESSION['userId'] = '5';
$_SESSION['privelornot'] = TRUE;
class UserToCategory{
    public function followCategory($categoryId)
    {
       if ( !$_SESSION || !$_SESSION['userId']) {
            session_start();
        }

        $cateroryuser = new Category_Users($categoryId , $_SESSION['userId']);
         $result = CategoryusersMapper::add($cateroryuser);
        
            if ($result) {
                echo "category followed successfully";
            } else {
                echo "Error follwing Category";
            }
        }
    
    public function unfollowCategory($categoryId)
    {
        if ( !$_SESSION || !$_SESSION['userId']) {
            session_start();
        } 
        $result = CategoryusersMapper::delete($_SESSION['userId'] ,$categoryId);
        if ($result) {
            echo "category unfollowed successfully";
        } else {
            echo "Error unfollwing Category";
        }

    }
    public function reportCategory($categoryId)
    {
      
        $rep =CategoryMapper::selectSpecificAttr($categoryId, 'id', 'numberOfreports');
        $newrep = $rep + 1;
        $arr = array("numberOfreports" => $newrep);
        $result = CategoryMapper::edit($categoryId, $arr, "id");
        if ($result) {
            echo "category reported successfully";
        } else {
            echo "Error reporting Category";
        }
        
    }
    public function recommendCategory($name, $description)
    {
        if ( !$_SESSION || !$_SESSION['privelornot']) {
            session_start();
        }

        if(!$_SESSION['privelornot']){
            echo "sorry you havenot the permissions to recommend";
        }else{
            $totalrecommendation = $name.": ".$description;
            $arrOfKeyValue = array("suggestedCategory" =>$totalrecommendation);
           $edit =UserMapper::edit($_SESSION['userId'], $arrOfKeyValue, "id");
           if ($edit) {
            echo "successfull recommendation";
        } else {
            echo "Error in recommendation";
        }
        }

    }
}