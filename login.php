<?php
if( isset($_POST["uName"]) && isset($_POST["uPassword"]) )
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospitaldb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");

    $query = "select username from admin where username = '".$_POST["uName"]."' and password = '".$_POST["uPassword"]."'";
    $result = $conn->query($query);

    $row = $result->fetch_assoc();

    if($row['username'] == null)
    {
        $message = "Incorrect entry, try again";
    }
    else
    {
        session_start();
        $_SESSION['activeUser'] = $row['username'];

        header("location: admin.php");
    }
}
else
{
    $message = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MHRS LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

</head>

<body>

<div class="container">

    <form class="form-signin" action="<?php $_PHP_SELF ?>" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="uName" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="uPassword" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>

</body>
</html>
