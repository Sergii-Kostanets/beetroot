<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
</head>

<body>
    <p><em>Page generated at <?php print $time; ?></em></p>
    <hr>
    <a href="./">Main page</a>
    <br>
    <a href="./users">Users</a>
    <br>
    <a href="./posts">Posts</a>
    <br>
    <a href="./randomnotfoundtest">Random page</a>
    <br>
    <a href="./api/users">ApiUsers</a>
    <br>
    <a href="./todos">ToDo's</a>
    <hr>
    <?php print $content; ?>
</body>

</html>