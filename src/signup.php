<?php
require "db.php";
$db = dbConnect();

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT users (login, email, password) VALUES (:login, :email, :password)";
$query = $db->prepare($sql);
$query->bindParam(':login', $login, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':password', $password, PDO::PARAM_STR);
$query->execute();
// header("Location: index.php");
?>

<p>
    <a href="/index.php">Назад</a>
</p>

<form action="signup.php" method="post">

    <div>
        <p>Login</p>
        <input type="text" name="login" required placeholder="Enter your login">
    </div>

    <div>
        <p>Email</p>
        <input type="email" name="email" required id="email" placeholder="Enter your email">
    </div>

    <div>
        <p>Password</p>
        <input type="password" name="password" required id="password" placeholder="Enter your password">
    </div>

    <div>
        <p>Password confirmation</p>
        <input type="password" name="passwordConfirm" required id="passwordConfirm"
            placeholder="Enter your password one more time">
    </div>

    <div>
        <p>Appruve</p>
        <button type="submit" name="do_signup">Sign Up</button>
    </div>

</form>