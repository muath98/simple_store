<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile_store";


$conn = new mysqli($servername , $username , $password , $dbname);

// check conncection

if ($conn -> connect_error){
    die("connection failed: " . $conn -> connect_error);
}

// echo "Successful Conn!";

// get data from the form ;)

$username = $_POST['username'];
$pass = $_POST['pass'];


// perform input validate 

if (empty($username) || empty($pass)) {
    echo ("يرجى ملئ الحقول");
} else {
    // check if the username already exists in the database 

    $checkQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn -> query ($checkQuery);

    if ($result -> num_rows > 0) {
        echo "انت موجود بالفعل في قاعدة البيانات";
    } else {


    
    $hashedPassword = password_hash($pass , PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO `users` (`username`, `pass`) VALUES ('$username', '$pass')";
    if ($conn -> query($sql) == true ) {
        echo "تم التسجيل بنجاح";
    } else {
        echo "خطأ" . $conn -> error;
    }
}
}
// close connection with database 
$conn -> close();
?>