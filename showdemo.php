<?php
$servername = "localhost";
$username = "it64309010010";
$password = "it12345678";
$dbname = "it64309010010";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM demo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["nam"]. "address " . $row["addess"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>