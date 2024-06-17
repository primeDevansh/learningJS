<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Through POST</title>
    </head>
<body>
    <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
        First Name: <input type = "text" name = "fname">
        <br>
        email: <input type = "text" name = "email">
        <input type = "Submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['fname'];
    $email = $_POST['email'];

    echo "Dear " . $fname . ", your email is: " . $email;
}

?>
</body>
</html>

