<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login successfully</title>
</head>
<body>
<h1 style="color:blue;">haahahhaahahahaha kaisa laga mera majakkkk.. </h1>
<h1>Dekha Apne Laparwahi ka nateja...</h1>
<h1>Kaise kaise log Hote hai.</h1>
<h1>app sab ek comment karo.. main apko bataunga ki apne kya comment kiya hai..</h1>
<input type="textarea" name = "comment" width="300px" height="80px">
<input type="submit" value ="Comment">
 <?php

$server = "localhost";
$username = "root";
$passwordd = "";
$dbname = "userinfo";

$con = mysqli_connect($server,$username,$passwordd,$dbname);

$name = $_POST["name1"];
$password = $_POST["password1"];
$stmt = $con->prepare("SELECT * FROM userdata where name = ? and password = ?");
$stmt->bind_param("ss", $name, $password);
// execute the query

$stmt->execute();

    // Get the result -->
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful!";
        // Fetch the result row
        $row = $result->fetch_assoc();
        // Process the result (e.g., display user data)
        echo "Welcome, " . $row['name'] . "!";
    } else {
        echo "Invalid credentials!";
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();

?>     
</body>
</html>