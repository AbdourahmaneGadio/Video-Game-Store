<?php
$ROOT_PATH = "http://localhost/Video-Game-Store";

// require($ROOT_PATH ."/authenticate.php");

class Cart extends Database
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }

    function addGameToCart()
    {
        $gameId = $_POST['gameId'];
        $price = $_POST['price'];
        $userId = $_SESSION['id'];

        $sql = "INSERT INTO `shoppingCart`(`gameId`, `price`, `userId`) VALUES ('$gameId','$price', '$userId')";
        if (! $this->conn->query($sql) === TRUE) {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    } // checkLogin()

    function getShoppingList()
    {

        $userId = $_SESSION['id'];

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        if ($stmt = $this->conn->prepare("SELECT * FROM shoppingCart WHERE `userId` = '$userId'")) {

            $stmt->execute();

            $result = $stmt->get_result()->fetch_all();
            return $result;
            // $stmt->close();
        }
    } // checkLogin()

    function gameAlreadyCart($gameId){
        if ($stmt = $this->conn->prepare('SELECT gameId, userId FROM shoppingCart WHERE gameId = ? AND userId = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
            $stmt->bind_param('si', $gameId, $_SESSION['id']);
            $stmt->execute();
            // Store the result so we can check if the account exists in the database.
            $stmt->store_result();
      
      
            // $stmt->close();
          }

          return $stmt->num_rows > 0;
    }

    function removeGameFromCart($cartId){
        if ($stmt = $this->conn->prepare("DELETE FROM shoppingCart  WHERE id = ?")) {
            $stmt->bind_param('i', $cartId);

            $stmt->execute();
            $stmt->close();
        }
    }
}
