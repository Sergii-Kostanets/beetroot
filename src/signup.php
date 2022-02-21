<form action="/signup.php" method="post">

    <div>
        <p>Login</p>
        <input type="text" name="login" placeholder="Enter your login" value="<?php echo $data['login'] ?>">
    </div>

    <div>
        <p>Email</p>
        <input type="email" name="email" id="email" placeholder="Enter your email"
            value="<?php echo @$data['email'] ?>">
    </div>

    <div>
        <p>Password</p>
        <input type="password" name="password" id="password" placeholder="Enter your password"
            value="<?php echo @$data['password'] ?>">
    </div>

    <div>
        <p>Password confirmation</p>
        <input type="password" name="passwordConfirm" id="passwordConfirm"
            placeholder="Enter your password one more time" value="<?php echo @$data['passwordConfirm'] ?>">
    </div>

    <div>
        <p>Appruve</p>
        <button type="submit" name="do_signup">Sign Up</button>
    </div>

    <div>
        <hr>
        <a href="./index.php">Back to main page</a>
    </div>

    <?php
    require "./db.php";
    $db = dbConnect();

    $data = $_POST;
    if (isset($data['do_signup'])) {
        // регистрируем

        // проверка на пустоту логина
        $errors = array();
        if (trim($data['login']) == '') {
            $errors[] = 'Enter your login';
        }
        if (trim($data['email']) == '') {
            $errors[] = 'Enter your email';
        }
        if ($data['password'] == '') {
            $errors[] = 'Enter your password';
        }
        if ($data['passwordConfirm'] != $data['password']) {
            $errors[] = 'Error with password confirmation';
        }
        if (empty($errors)) {
            // ошибок нет, можно регать
            $sql = "INSERT users (login, email, password) VALUES (:login, :email, :password)";
            $query = $db->prepare($sql);
            $query->bindParam(':login', $login, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->execute();
            echo '<hr><div style="color: green;">Successfully registered</div><hr>';
        } else {
            echo '<hr><div style="color: red;">' . array_shift($errors) . '</div><hr>';
        }
    }
    ?>

</form>