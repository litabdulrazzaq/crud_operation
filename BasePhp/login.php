<?php
// print_r($_GET);
$username = $_GET['username'];
$password = $_GET['password'];

if ($username == 'admin' && $password == 'test') {

    header('Location: http://localhost/basephp/dashboard.php?username=' . $username);
    exit;

} else {
    if (!empty($_GET)) {
        echo "Username and Password is wrong";
    }

}

// print($username);
// print($password);
// exit;
?>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
       .container{
        width:30%;
        margin: 20px auto;
        text-align:center;
        border:2px solid gray;
        padding: 60px 0px;
       } 
       input{
        padding:10px;
       }
       .field-group{
        font-size:20px;
       }
    </style>
</head>

<body>


    <div class="container">

        <form action="">
            <div class="field-group">
                <lable>Username:</label>
                    <input type="text" name="username" />
            </div>
            <div class="field-group" style="margin-top:20px">
                <lable>Password:</label>
                    <input type="password" name="password" />
            </div>
            <div class="field-group" style="margin-top:20px">

                <input type="submit" name="" value="Login" />
            </div>
        </form>

    </div>

</body>

</html>