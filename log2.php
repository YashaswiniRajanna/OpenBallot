<!DOCTYPE html>  
<html>  
  
<head>
             <title  style="align-content: center">LOGIN</title>
            <link rel="stylesheet" href="log.css">

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
                    <center> <label for="uname"><b>First name</b></label> <input type="text" placeholder="Enter a unique Firstname or email id" name="fname" required></p>  
                </center>  
                <p>  
                    <center> <label for="fname"><b>Uname </b></label> <input type="text" placeholder="Enter your unique name given to you while signing up" name="unmae" required></p>  
                </center>  
                <p> <button type="save" name="submit" value="add">Log In</button></p> <label>  
               
  
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
            $dbname     = "log";  
            // Create connection  
            $conn       = new mysqli($servername, $username, $password, $dbname)  or die ("unable to connect");
            // Check connection  
            if ($conn) {  
                echo "logged in successfully";
            }  
            $sql = "INSERT INTO `log` (fname,uname)  
          
        VALUES ('$uname','$fname')";  
            if ($conn->query($sql) === TRUE) {  
                header('signed up successfully');
            } else {  
                echo "Error: " . $sql . "<br>" . $conn->error;  
            }  

            $conn->close();  
        }  
        ?> 


</html>  