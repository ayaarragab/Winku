<?php
require_once '../Controllers/UserControllers/userMapper.php'; 
require_once '../Models/Subcategory.php';
require_once '../Controllers/SubCategoryMapper.php';
require_once '../Controllers/CategoryMapper.php';

class adminToSubcategory {
    public function addSubCategory($Subcategory) { //2 asks
        if ( $_SESSION || !$_SESSION['username']) {
            session_start();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = $_POST['sub_category_name']; // LOOK AT FRONT 'sub_category_name'
         $Category_id = $_POST['category_id']; // LOOK AT FRONT 'category_id'
    
        $result = SubCategoryMapper::add($Subcategory);}

        if ($result) {
            // increase numOfSubcategories in Category table
            $categoryId = $Category_id;
            $NumOfSubcategories = CategoryMapper::selectSpecificAttr($categoryId, 'id', 'numOfSubcategories');
            if ($NumOfSubcategories !== false) {
                CategoryControllersHelper::incrementDataDB($Category_id ,'id', 'NumOfSubcategories' ); 
            }
         echo "Sub_Category added successfully";
     } else {
         echo "Error adding Sub_Category";
        }
    }  
     public function deleteSubCategory($Subcategory){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST['sub_category_name']; // LOOK AT FRONT 'sub_category_name'
        $Category_id = $_POST['category_id']; // LOOK AT FRONT 'category_id'
        
        // Delete the subcategory
        $result = SubCategoryMapper::delete($name, 'name');

        if ($result) {
            // Decrease numOfSubcategories in Category table
            $NumOfSubcategories = CategoryMapper::selectSpecificAttr($Category_id, 'id', 'numOfSubcategories');
            if ($NumOfSubcategories !== false) {
               
                CategoryControllersHelper::decreaseDataDB($Category_id ,'id','NumOfSubcategories');
             }
        echo "Sub_Category deleted successfully";

        } else {
            echo "Error deleting Sub_Category";
        }
    }
}
}
?>