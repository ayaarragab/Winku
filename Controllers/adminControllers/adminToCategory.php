<?php
require_once '../Controllers/UserControllers/userMapper.php'; 
require_once '../Models/Category.php';
class AdminToCategory{
    public function addCategory($category){
        if ( $_SESSION || !$_SESSION['username']) {
            session_start();
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['category_name'];
            $describtion = $_POST['category_description'];  // Get data
                
        
            $result = CategoryMapper::add($category);
        
            if ($result) {
                echo "Category added successfully";
            } else {
                echo "Error adding Category";
            }
        }
    }
}