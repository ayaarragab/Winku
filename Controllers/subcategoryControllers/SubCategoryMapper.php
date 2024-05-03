<?php
require_once 'D:\xampp2\htdocs\Winku-aya-s_branch\Controllers\Mapper\mapperHelper.php';
require_once 'D:\xampp2\htdocs\Winku-aya-s_branch\Controllers\Mapper\mapperInterface.php';
require_once 'D:\xampp2\htdocs\Winku-aya-s_branch\Controllers\database\dbConnection.php';
require_once 'D:\xampp2\htdocs\Winku-aya-s_branch\Controllers\CategoryMapper.php';

class SubCategoryMapper implements Mapper{
    public static $tableName = 'SubCategory';
    public static $connection;
    public static $columns = ['name',
                              'Category_id',
                              'ownerUsername',
                              'numberOfQuestions',
                              'numberOfAnswers',
                              'numberOfreports'];

    public static function getDbConnection() {
        if (!isset(self::$connection)) {
            self::$connection = DBConnection::getConnection();
        }
        return self::$connection;
    }
   
    public static function add($object) {
        $conn = SubCategoryMapper::getDBConnection();
        $arrayOfAttributes = MapperHelper::extractData(self::$columns, $object);
        print_r($arrayOfAttributes);
        foreach ($arrayOfAttributes as $key => $value) {
            $columns /*.*/= "$key, ";
            $values /* .*/= "'$value', ";
        }
        $columns = rtrim($columns, ', ');
        $values = rtrim($values, ', ');
        $query = "INSERT INTO " . self::$tableName . " ($columns) VALUES ($values)";
        echo '<br>' . $query . '<br>';
    
        if ($conn->query($query) === TRUE) {
            // Return the last inserted ID
            return $conn->insert_id;
        } else {
            return false;
        }
    }
    public static function edit($uniqueIdentifier, $arrOfKeyValue, $UniqueIdentifierName){
        $conn = self::getDbConnection();
        $set = "";
        foreach ($arrOfKeyValue as $column => $value) {
            $set .= "$column = '$value', ";
        }
        $set = rtrim($set, ", ");
        $query = "UPDATE ".self::$tableName." SET $set WHERE ".$UniqueIdentifierName." = ".$uniqueIdentifier;
        if ($query)
            echo "<br> data changed sucessfully! <br>";
        else {
            echo "<br> can't update it in db <br>";
        }
        return $conn->query($query);
    }

    public static function delete($uniqueIdentifier, $UniqueIdentifierName){
        $connection = self::getDbConnection();
        $sql = "DELETE FROM ".self::$tableName." WHERE ".$UniqueIdentifierName." = ".$uniqueIdentifier;
    
        if ($connection->query($sql) === TRUE) {
            // Decrease numOfSubcategories in Category table
            $categoryId = $uniqueIdentifier;
            $categoryNumOfSubcategories = CategoryMapper::selectSpecificAttr($categoryId, 'id', 'numOfSubcategories');
            if ($categoryNumOfSubcategories !== false) {
                $categoryNumOfSubcategories = $categoryNumOfSubcategories-1;
                CategoryMapper::edit($categoryId, ['numOfSubcategories' => $categoryNumOfSubcategories], 'id');
            }
    
            return true;
        } else {
            echo "Error deleting record: " . $connection->error;
            return false;
        }
    
    }
   
    public static function selectObjectAsArray($UniqueIdentifier, $UniqueIdentifierName){
        $conn = self::getDbConnection();
        $sqlAtatement = "SELECT * FROM ".self::$tableName." WHERE ".$UniqueIdentifierName." = ".$UniqueIdentifierName;
        $result = $conn->query($sqlAtatement);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }
    public static function selectSpecificAttr($uniqueIdentifier, $UniqueIdentifierName, $attrname){
        $objectArr = self::selectObjectAsArray($uniqueIdentifier, $UniqueIdentifierName);
        if ($objectArr !== false) {
            return $objectArr[$attrname];
        }
        else {
            echo "couldn't find the data";
        }
    }
    public static function searchAttribute($attributeValue) {
        $conn = self::getDbConnection();
        $query = "SELECT * FROM " . self::$tableName;
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $users = array();
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            foreach ($users as $user) {
                foreach ($user as $key => $value) {
                    if ($value == $attributeValue) {
                        return true;
                    }
                }
            }
            return false;
        }
    else{
        return false;
    }
}
}