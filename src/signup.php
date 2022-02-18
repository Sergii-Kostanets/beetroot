<?php
require "./db.php";

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
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->join_date = time();
        R::store($user);
        echo '<div style="color: green;">Successfully registered</div><hr>';
    } else {
        echo '<div style="color: red;">' . array_shift($errors) . '</div><hr>';
    }
}
?>

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

</form>