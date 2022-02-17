<?php
    require "db.php"

    $data = $_POST;
    if(isset($data['do_signup']))
    {
        // регистрируем

        // проверка на пустоту логина
        $errors = array();
        if(trim($data['login']) =='')
        {
            $errors[] = 'Enter your login';
        }
        if(trim($data['email']) == '')
        {
            $errors[] = 'Enter your email'
        }
        if($data['password'] == '')
        {
            $errors[] = 'Enter your password'
        }
        if($data['passwordConfirm'] != $data['password'])
        {
            $errors[] = 'Error with password confirmation'
        }
        if(empty($errors))
        {
            // ошибок нет, можно регать
        }
    }
?>

<form action="/signup.php" method="post">

    <div>
        <p>Login</p>
        <input type="text" name="login" placeholder="Enter your login">
    </div>

    <div>
        <p>Email</p>
        <input type="email" name="email" id="email" placeholder="Enter your email">
    </div>

    <div>
        <p>Password</p>
        <input type="password" name="password" id="password" placeholder="Enter your password">
    </div>

    <div>
        <p>Password confirmation</p>
        <input type="password" name="passwordConfirm" id="passwordConfirm"
            placeholder="Enter your password one more time">
    </div>

    <div>
        <p>Appruve</p>
        <button type="submit" name="do_signup">Sign Up</button>
    </div>

</form>