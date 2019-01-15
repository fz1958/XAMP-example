 <html>
<body>

Id: <?php echo $_POST["id"]; ?><br>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";
$input1 = $_POST['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	
echo "Connected successfully <br>";

$sql = "DELETE FROM list WHERE id = $input1";

if ($conn->query($sql) === TRUE) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header( 'Location: http://localhost:8080/' ); 
?> 
</body>
</html>
