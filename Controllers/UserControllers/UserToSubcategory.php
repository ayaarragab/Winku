<?php
class UserToSubcategory{
    public function addQuestionToSubcategory($content, $categoryId, $subcategoryId)
    {
        // Add logic to add the question to the specified subcategory
    }

    public function deleteQuestionOfSubcategory($questionId, $categoryId, $subcategoryId)
    {
        // Add logic to delete the question from the specified subcategory
    }
    public function joinSubcategory($subcategoryId)
    {
         if ( $_SESSION || !$_SESSION['username']) {
            session_start();
          }

                // Check if the user is already a member of the subcategory
                $isMember = SubCategoryUsersMapper::searchAttribute( $_SESSION['id'],'id','ownerUsername');
        
                if ($isMember) {
                    echo "User is already a member of the subcategory.";
                    return;
                }
        
                // Create a new subcategory membership for the user
                $subCategoryMembership = new stdClass(); /* stdClass is a built-in PHP class that serves as a generic container for holding data. 
                                                            It is a simple way to create an object without explicitly defining a class structure.
                                                            The stdClass objects can be used to store and manipulate data in a structured manner.*/
                $subCategoryMembership->numberOfQuestions = 0;
                $subCategoryMembership->numberOfAnswers = 0;
                $subCategoryMembership->ownerUsername = UserMapper::selectSpecificAttr($_SESSION['id'],'id','ownerUsername');
                $subCategoryMembership->Category_id = $subcategoryId;
        
                // Store the subcategory membership in the Subcategoryusers table
                SubCategoryUsersMapper::add($subCategoryMembership); // $subCategoryMembership is an object
        
                echo "User joined the subcategory successfully.";
            }
    
    public function createSubcategory($categoryId){
        if ( $_SESSION || !$_SESSION['username']) {
            session_start();
        }
            // Create a new subcategory for the user
            $subCategory = new stdClass();
            $subCategory->numberOfQuestions = 0;
            $subCategory->numberOfAnswers = 0;
            $subCategory->ownerUsername = UserMapper::selectSpecificAttr($_SESSION['id'],'id', 'username');
            $subCategory->Category_id = $categoryId;
    
            // Store the subcategory in the Subcategoryusers table
            SubCategoryUsersMapper::add($subCategory);
        }
    
    public function leaveSubcategory($subcategoryId)
    {
       
        if ( $_SESSION || !$_SESSION['username']) {
            session_start();
          }
                // Check if the user is a member of the subcategory
                $isMember = SubCategoryUsersMapper::searchAttribute($_SESSION['id'], 'ownerUsername');
        
                if (!$isMember) {
                    echo "User is not a member of the subcategory.";
                    return;
                }
        
                // Remove the user from the subcategory
                SubCategoryUsersMapper::delete($_SESSION['id'], 'ownerUsername');
        
                echo "User left the subcategory successfully.";
            }
        
    public function reportSubcategory($subcategoryId)
    {
            $rep =SubCategoryMapper::selectSpecificAttr($subcategoryId, 'id', 'numberOfreports');
            $newrep = $rep + 1;
            $arr = array("numberOfreports" => $newrep);
            $result = SubCategoryMapper::edit($subcategoryId, $arr, "id");
            if ($result) {
                echo "subcategory reported successfully";
            } else {
                echo "Error reporting subCategory";
            }
            
        }
    }

