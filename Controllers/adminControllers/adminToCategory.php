<?php
require_once '../Controllers/UserControllers/userMapper.php'; 
require_once '../Controllers/SubCategoryMapper.php';
require_once '../Controllers/CategoryMapper.php';
require_once '../Models/Category.php';

class adminToCategory{


    public function addCategory($category){
        if ( $_SESSION || !$_SESSION['username']) {
            session_start();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['category_name'];
            $describtion = $_POST['category_description'];  // Get data
                
            $result = CategoryMapper::add($category);
            $resultt = CategoryMapper::selectSpecificAttr( $name,'name', 'name');

            if ($result) {

                echo "Category added successfully";
                foreach ( $resultt as $name){
                    
                    echo $resultt ;
              
            }} else {
                echo "Error adding Category";
            }
        }

    }
    
    public function deleteCategory($categoryId){
            // delete sub first
            /*
         $subcategories = SubCategoryMapper::selectObjectAsArray($categoryId, 'Category_id');
         if ($subcategories !== false) {
             foreach ($subcategories as $subcategory) {
                $subcategoryId = $subcategory['id'];
                SubCategoryMapper::delete($subcategoryId, 'id');
                }
            }*/
            
            // delete category
            $result = CategoryMapper::delete($categoryId, 'id');
        
            if ($result) {
                echo "Category deleted successfully";
            } else {
                echo "Error deleting Category";
            }
        }

    }