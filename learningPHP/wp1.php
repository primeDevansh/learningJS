<!DOCTYPE html>
<html>
    <head>
        <title>My First PHP</title>
    </head>
    <body>
        <h1>Hi! This is my first PHP page.</h1>
        <?php
        echo "Hello, world!" . "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        ?>
    </body>
</html>