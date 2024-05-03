<?php
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\Mapper\mapperInterface.php';
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\database\dbConnection.php';
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\Mapper\mapperHelper.php';
class bookmarkMapper{
    public static $tableName = 'bookmarkedqustions';
    public static $connection;
    public static $columns = ['questionId',
                                'userId'            ];
    public static function getDbConnection() {
        if (!isset(self::$connection)) {
            self::$connection = DBConnection::getConnection();
        }
        return self::$connection;
    }
    public static function add($object){ # When you add a user add its builder
        $conn = QuestionMapper::getDBConnection();
        $arrayOfAttributes = MapperHelper::extractData(self::$columns, $object);
        print_r($arrayOfAttributes);
        $columns='';
        $values='';
        foreach ($arrayOfAttributes as $key => $value) {
            $columns .= "$key, ";
            $values .= "'$value', ";        
        }
        $columns = rtrim($columns, ', ');
        $values = rtrim($values, ', ');
        $query = "INSERT INTO ".self::$tableName." ($columns) VALUES ($values)";
        echo '<br>'.$query.'<br>';
        return $conn->query($query);
    }
    
    public static function deletesAsociationClass($firstUniqueIdentifier, $firstUniqueIdentifierName,$secondUniqueIdentifier, $secondUniqueIdentifierName){
        $connection = self::getDbConnection();

        $sql = "DELETE FROM ".self::$tableName." WHERE ".$firstUniqueIdentifierName." = ".$firstUniqueIdentifier ."AND".$secondUniqueIdentifierName." = ".$secondUniqueIdentifier;

        if ($connection->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error deleting record: " . $connection->error;
            return false;
        }
    }


}