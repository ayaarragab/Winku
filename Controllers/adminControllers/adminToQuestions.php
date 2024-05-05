<?php

require_once '../database/dbConnection.php';
class AdminToQuestions{

    protected $conn;

    public function __construct() {
        // Get the database connection
        $this->conn = DBConnection::getConnection();
    }
    public function getAllQuestions()
    {
        try {
            // Prepare SQL statement
            $sql = "SELECT body FROM questions";

            // Prepare and execute the SQL statement
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            // Fetch all results
            $questions = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            print_r($questions);
            return $questions;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
  
    public function deleteQuestion($questionId)
    {
        try {
            $sql = "DELETE FROM questions WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('s', $questionId ); // 's' indicates a string parameter
            $stmt->execute();
    
            // Check if any rows were affected
            if ($stmt->affected_rows > 0) {
                echo "question deleted successfully.";
            } else {
                echo "No question found with the given questionId.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
  
}
?>