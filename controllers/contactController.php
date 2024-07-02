<?php
$ROOT_PATH = "http://localhost/Video-Game-Store";
// require_once("../authenticate.php");

class Contact extends Database
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->connect();
    }

    function strip_crlf($string)
    {
        return str_replace("\r\n", "", $string);
    }

    function validateAndSendMail()
    {

        if (!empty($_POST["send"])) {
            $name = $_POST["userName"];
            $email = $_POST["userEmail"];
            $subject = $_POST["subject"];
            $content = $_POST["content"];

            // We will concert on what email to use
            $toEmail = "lancinaoua@gmail.com";
            // CRLF Injection attack protection
            $name = $this->strip_crlf($name);
            $email = $this->strip_crlf($email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "The email address is invalid.";
            } else {
                // appending \r\n at the end of mailheaders for end
                $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
                if (mail($toEmail, $subject, $content, $mailHeaders)) {
                    $message = "Your contact information is received successfully.";
                    $type = "success";
                }

                $stmt = $this->conn->prepare("INSERT INTO `contacts` (`user_name`, `user_email`, `subject`, `content`) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $email, $subject, $content);
                $stmt->execute();
                $message = "Your contact information is saved successfully.";
                $type = "success";
                $stmt->close();
            }
        }

        return array($message, $type);
    }
}
