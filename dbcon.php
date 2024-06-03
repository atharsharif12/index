<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login to user</title>
    <script>
        function loginValidate(){
            const name1 = document.forms["loginforms"]["name1"].value;
            const password1 = document.forms["loginforms"]["password1"].value;
            if(name1 === "" || password1 === ""){
                alert("all fields require bro");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<h1 style="color:green;">Welcom: Thanks For Register </h1>
<h2 style = "color:red;">Login to enjoy Interactive Service:</h2>
<form name = "loginforms" action="login.php" onsubmit = "return loginValidate()" method="POST">
Enter Your Username:<input type="text" name = "name1"><br>
Enter Your Password: <input type="password" name= "password1"><br>
<input type="submit" value = "Login">

</form>






<?php

$server = "localhost";
$username = "root";
$passwordd = "";
$dbname = "userinfo";

$con = mysqli_connect($server,$username,$passwordd,$dbname);

$name = $_POST["name"];
$password = $_POST["password"];
$stmt = $con->prepare("INSERT INTO userdata (name, password) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $password);

if ($stmt->execute()) {
    echo "";
} else {
    echo "Some error occurred: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$con->close();

?>   
</body>
</html>