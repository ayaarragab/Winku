<?php
require_once '../models/User.php';

# You have to complete it $classes = array('User' => User::class, 'Category' => Category::class, ...);
$classes = array('User' => 'userQuestions');

class DBMapper{
    public static function add($table_name, $object)
    {
        if (DBbSQLOperations::insert($table_name, $object)) {
            return DBbSQLOperations::$connection->insert_id;
        }
        else {
            echo "<br>can't add it to db<br>";
        }
    }
    public static function edit($table_name, $objectId, $arrOfKeyValue)
    {
        $queryObj = DBbSQLOperations::update($table_name, $arrOfKeyValue, 'id = "'.$objectId.'"');
        if ($queryObj)
            echo "<br> data changed sucessfully! <br>";
        else {
            echo "<br> can't update it in db <br>";
        }
    }
    public static function delete($table, $objectId) {
        $queryObj = DBbSQLOperations::delete($table, 'id = "'.$objectId.'"');
        if ($queryObj) {
            echo "<br>Account deleted<br>";
        } else {
            echo "<br>Can't delete it from db<br>";
        }
    }
    public static function retrieve($table, $arrayOfAttrs) {
        $conditions = [];
        print_r($arrayOfAttrs);
        foreach ($arrayOfAttrs as $attr => $value) {
            // Escape the attribute and value to prevent SQL injection
            $escapedAttr = DBbSQLOperations::$connection->real_escape_string($attr);
            $escapedValue = DBbSQLOperations::$connection->real_escape_string($value);
            // Construct the condition for each attribute
            $conditions[] = "$escapedAttr = '$escapedValue'";
        }
        // Join the conditions with AND and construct the SQL query
        $conditionString = implode(' AND ', $conditions);
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $conditionString;
        
        // Execute the query
        $data = DBbSQLOperations::fetch($sql);
        return $data;
    }
    public static function retrieveSpecificAttr($table, $id, $attrname) {
        $conditions = [];
        // Join the conditions with AND and construct the SQL query
        $conditionString = implode(' AND ', $conditions);
        $sql = 'SELECT '.$attrname.' FROM ' . $table . ' WHERE id = ' . $id;
        
        // Execute the query
        $data = DBbSQLOperations::fetch($sql);
        return $data;
    }
}
class DBConnection{
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '';
    private static $database = 'test';
    private static $port_number = 3306;
    private static $conn;
    private function __construct() {
    }
    public static function getConnection() {
        if (!isset(self::$conn)) {
            self::$conn = new mysqli(self::$host, self::$user, self::$password, self::$database, self::$port_number);
        }
        return self::$conn;
    }
}
class DBbSQLOperations{
    public static $connection;

    public static function getConnection() {
        if (!isset(self::$connection)) {
            self::$connection = DBConnection::getConnection();
        }
        return self::$connection;
    }
    public static function fetch($query) {
        $conn = DBbSQLOperations::$connection;
        $result = $conn->query($query);
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
    public static function insert($table, $object) {
        $conn = DBbSQLOperations::getConnection();
        $attrs = array();
        $columns = '';
        $values = '';
        foreach ($object as $attribute => $value) {
            $attrs[$attribute] = $value;
        }
        foreach ($attrs as $key => $value) {
            if ($key == 'id')
                continue;
            $columns .= "$key, ";
            $values .= "'$value', ";        
        }
        $columns = rtrim($columns, ', ');
        $values = rtrim($values, ', ');
        # "INSERT INTO users (username, id) VALUES (aya, 10)";
        $query = "INSERT INTO $table ($columns) VALUES ($values)";
        return $conn->query($query);
    }

    public static function update($table, $data, $condition) {
        $conn = DBbSQLOperations::$connection;
        $set = "";
        foreach ($data as $column => $value) {
            $set .= "$column = '$value', ";
        }
        $set = rtrim($set, ", ");
        $query = "UPDATE $table SET $set WHERE $condition";
        return $conn->query($query);
    }
    public static function closeConnection()
    {
        DBbSQLOperations::$connection->close();
    }
    public static function delete($table, $condition) {
        $connection = DBbSQLOperations::$connection;

        $sql = "DELETE FROM $table WHERE $condition";

        if ($connection->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error deleting record: " . $connection->error;
            return false;
        }
    }
}