
<?php
$ROOT_PATH = "http://localhost/Video-Game-Store";

// require($ROOT_PATH ."/authenticate.php");

class Games extends Database
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }
    function getAllGames()
    {

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT * FROM games')) {

            $stmt->execute();

            $result = $stmt->get_result()->fetch_all();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function getSingleGame($gameId)
    {
        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT * FROM games WHERE id = ?')) {
            $stmt->bind_param('i', $gameId);
            $stmt->execute();

            $result = $stmt->get_result()->fetch_assoc();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function getRatings()
    {

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT * FROM ratings')) {

            $stmt->execute();

            $result = $stmt->get_result()->fetch_all();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function getEditors()
    {

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT * FROM editors')) {

            $stmt->execute();

            $result = $stmt->get_result()->fetch_all();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function getSingleEditor($editorId)
    {
        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare('SELECT name FROM editors WHERE id = ?')) {
            $stmt->bind_param('i', $editorId);
            $stmt->execute();

            $result = $stmt->get_result()->fetch_assoc();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function searchGame()
    {
        $title = $_GET['title'];
        $rating = $_GET['rating'];
        $year = $_GET['year'];
        $editor = $_GET['editor'];

        $sql = "SELECT * FROM `games` WHERE 1=1";

        if (!empty($title)) {
            $sql .= " AND title = '$title'";
        }

        if (!empty($rating)) {
            $sql .= " AND rating = '$rating'";
        }

        if (!empty($year)) {
            $sql .= " AND year = '$year'";
        }

        if (!empty($editor)) {
            $sql .= " AND editor = '$editor'";
        }

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare($sql)) {

            $stmt->execute();

            $result = $stmt->get_result()->fetch_all();
            return $result;
            // $stmt->close();
        }
    } // searchGame()
}
?>
