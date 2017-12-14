<?php
$servername = "localhost";
$username = "***";
$password = "***";
$dbname = "testings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM chart1 where id";
$result = $conn->query($sql);

$jsonArray = array();
		//check if there is any data returned by the SQL Query
		if ($result->num_rows > 0) {
		  //Converting the results into an associative array
		  while($row = $result->fetch_assoc()) {
		    $jsonArrayItem = array();
		    $jsonArrayItem['Time'] = $row['reg_date'];
		    $jsonArrayItem['value'] = $row['value'];
		    //append the above created object into the main array.
		    array_push($jsonArray, $jsonArrayItem);
		  }
		}
$conn->close();
header('Content-type: application/json');
		//output the return value of json encode using the echo function. 
		echo json_encode($jsonArray);
?>
