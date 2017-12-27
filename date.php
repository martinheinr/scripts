<!DOCTYPE html>
<html>
<body>



<form name="form" action="" method="post">
  <input type="date" name="expdate" id="date">
  <input type="submit" value="Update">
</form>
<?php
$servername = "***";
$username = "***";
$password = "***";
$dbname= "***";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully..." . "<br>" . "<br>";


if(isset($_POST['expdate'])){	
		$expdate = $_POST['expdate'];
		
//restrict the user to use the past date
		if($expdate < date("Y-m-d") ) {
				echo "The date you have used is in the past, please choose another date";}

else {
				$sql = "UPDATE sodatest SET expdate ='$expdate' WHERE id='1'";
					
				if ($conn->query($sql) === TRUE) {
						$updateboxname = "Expiry date has been updated successfully";
    					echo $updateboxname . "<br>";
    					
					} else {
    							echo "Error, Please insert the valid format  " . "<br>"; // . $conn->error;
								}
}
}


/*$sql = "SELECT expdate FROM sodatest where id = '1'";
$result = $conn->query($sql);

if ($result > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	  $ultimadate = $row["expdate"];
        echo $ultimadate. '<br>';
    }
} else {
    echo "0 results";
}
*/

/*
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
*/
?>
<div>
<?php
//Expiration date notification **(possibly change with the while loop)**
echo $expdate . "<br>";
echo date("Y-m-d") . "<br>";
echo $expdate - date . "<br>";
echo "Hell yeah it works " . date("$expdate"), "\n";
if(date("$expdate") == date("Y-m-d", strtotime('+5 days')))  {
	echo "expiry date notification works";
}elseif(date("$expdate") == date("Y-m-d", strtotime('+4 days'))) {
	echo "expiry date notification works";
}elseif(date("$expdate") == date("Y-m-d", strtotime('+3 day'))) {
	echo "expiry date notification works";
}elseif(date("$expdate") == date("Y-m-d", strtotime('+2 day'))) {
	echo "expiry date notification works";
}elseif(date("$expdate") == date("Y-m-d", strtotime('+1 day'))) {
	echo "expiry date notification works";
}
/*
if($ultimadate == date("Y-m-d") ) {
echo "Fuck, it works!!!";}

else {echo "No luck!!!";
}
*/
?>
</div>
</body>
</html>
