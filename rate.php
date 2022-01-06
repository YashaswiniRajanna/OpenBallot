
         <?php  
if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost";  
    $username   = "root";  
    $password   = "";  
    $constituency ="";
    $dbname     = "sign_log";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname)  or die ("unable to connect");
    // Check connection  
    if ($conn) {  
        echo "Signed up successfully";
    }  
    $sql = "INSERT INTO `sign_log` (uname,fname,lname,constituency,address,cno)  
  
VALUES ('$uname','$fname','$lname','$constituency','$adress','$cno')";  
    if ($conn->query($sql) === TRUE) {  
        header('signed up successfully');
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  

    $conn->close();  
}  
?>  