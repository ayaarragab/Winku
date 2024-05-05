<?php
require_once '../Controllers/UserControllers/userMapper.php'; 
require_once '../Models/Subcategory.php';
require_once '../Controllers/SubCategoryMapper.php';
require_once '../Controllers/CategoryMapper.php';

class adminToSubcategory {

    public function addSubCategory( $Subcategoryname,$Categoryname) { 
        if ( $_SESSION || !$_SESSION['username']) {
            session_start();
        }
        
        $Category_id = CategoryMapper::selectSpecificAttr($Categoryname, 'name', 'id');
        $Subcategory =new Subcategory($Subcategoryname,$_SESSION['username'],$Category_id);
        
        $result = SubCategoryMapper::add($Subcategory);

        if ($result) {
            // increase numOfSubcategories in Category table
            CategoryControllerHelper::incrementDataDB($Category_id ,'id', 'NumOfSubcategories' ); 
            echo "Sub_Category added successfully";
         
     } else {
         echo "Error adding Sub_Category";
        }
    }

     public function deleteSubCategory($SubCategoryname,$Categoryname){
    
        $SubCategory_id = SubCategoryMapper::selectSpecificAttr($SubCategoryname, 'name', 'id');
        // Delete the subcategory
        $result = SubCategoryMapper::delete($SubCategory_id, 'id');

        if ($result) {
            // Decrease numOfSubcategories in Category table
            CategoryControllerHelper::decreaseDataDB($Categoryname ,'name','NumOfSubcategories');
           echo "Sub_Category deleted successfully";

        } else {
            echo "Error deleting Sub_Category";
        }
    }
}

?>