
<?php
$ROOT_PATH = "http://localhost/Video-Game-Store";

// require($ROOT_PATH ."/authenticate.php");

class User extends Database
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }
    function getAllUsers()
    {

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT * FROM users')) {

            $stmt->execute();

            $result = $stmt->get_result()->fetch_all();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function getSingleUser($userId)
    {
        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT * FROM users WHERE id = ?')) {
            $stmt->bind_param('i', $userId);
            $stmt->execute();

            $result = $stmt->get_result()->fetch_assoc();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    
}
?>
