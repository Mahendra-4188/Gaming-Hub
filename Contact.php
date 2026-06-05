
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'testing');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $data = $conn->prepare("INSERT INTO contact(name, email, message) VALUES (?, ?, ?)");
    $data->bind_param("sss", $name, $email, $message);
    $data->execute();
    echo "
    <script>alert('Message Sent Successfully'); 
    window.location.href = 'index.php';</script>
    ";    
    $data->close();
    $conn->close();
}
?>