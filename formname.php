<!DOCTYPE html>  
<html>  
  
<head>  
    <style>  
        y {  
            font-size: 25px;  
            color: black;  
        }  
  
        form {  
            border: 3px solid #f1f1f1;  
        }  
  
        input[type=text],  
        input[type=password] {  
            \ background-color: white;  
            border: 20px;  
            width: 50%;  
            height: 100%;  
            padding: 12px 20px;  
            margin: 8px 0;  
            display: inline-block;  
            border: 1px solid #ccc;  
            box-sizing: border-box;  
            position: center;  
        }  
  
        button {  
            text-decoration: none;  
            background-color: #72a7ff;  
            border: none;  
            color: black;  
            padding: 15px 20px;  
            width: 100%;  
            font-family: :'Didact Gothic';  
            font-size: 25px;  
            text-align: middle;  
            display: inline-block;  
            margin: 4px 2px;  
            -webkit-transition-duration: 0.2s;  
            transition-duration: 0.4s;  
            cursor: pointer;  
        }  
  
        .button:hover {  
            background-color: #555;  
            color: white;  
        }  
  
        .container {  
            padding: 16px;  
        }  
  
        span.psw {  
            float: right;  
            padding-top: 16px;  
        }  
  
        span.psw {  
            display: block;  
            float: none;  
        }  
    </style>  
</head>  
  
<body>  
    <form name="form1" action="" method="post" enctype="multipart/form-data">  
        <div class="container">  
            <y>  
                <p>  
                    <center> <label for="uname"><b>Username</b></label> <input type="text" placeholder="Enter a unique Username or email id" name="uname" required></p>  
                </center>  
                <p>  
                    <center> <label for="fname"><b>First name</b></label> <input type="text" placeholder="Enter your first name" name="fname" required></p>  
                </center>  
                <p>  
                    <center> <label for="lname"><b>Last name </b></label> <input type="text" placeholder="Enter your last name" name="lname" required></p>  
                </center>


                <p>  
                    <center> <label for="constituency"><b>Constituency</b></label> <input type="text" placeholder="constituency that you belong to" name="constituency" required></p>  
                </center>  


                <p>  
                    <center> <label for="adress"><b>Address</b></label> <input type="text" placeholder="Enter your address" name="address" required></p>  
                </center>  
                <p>  
                    <center> <label for="cno"><b>Contact Number</b></label> <input type="text" placeholder="Enter your contact number" name="cno" required></p>  
                </center>  
                <p> <button type="save" name="submit" value="add">Sign up</button><br>
                <li> <a href="dropdown.html"> rate your representative</a></li></p> <label>  
  
</label> </y>  
        </div>  
    </form>  
</body>  
  
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
</html>  