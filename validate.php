 <html>
<body>

Title: <?php echo $_POST["title"]; ?><br>
	
Description: <?php echo $_POST["description"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
$input1 = $_POST['title'];
$input2 = $_POST['description'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	
echo "Connected successfully <br>";

$sql = "INSERT INTO list (title, description) VALUES ( '$input1' , '$input2' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 header( 'Location: http://localhost:8080/' ); 
?> 
</body>
</html>
