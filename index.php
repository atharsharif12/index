<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <script>
    function getData(){
        const name = document.forms["registerform"]["name"].value;
        const password = document.forms["registerform"]["password"].value;

        if(name === "" || password === ""){
            alert("all field is required");
            return false;
        }
        return true;
        
    }
    </script>
</head>
<body>

<!-- first we will create one register form... inserted to data, login to user  -->
    <form name="registerform" onsubmit = " return getData()" action="dbcon.php"  method = "POST">

        Entre Your Name:<input type="text" name="name"><br>
        Enter Your Password:<input type="password" name="password">
        <br>

       <input type="submit" value="submit">

    </form>
</body>
</html>
