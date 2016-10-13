<?php

require __DIR__ . "/libs/rb.php";

$data = $_POST;
$errors = [];
if(isset($data['do_signup'])) {
    if($data['login'] == '') {
        $errors[] = 'Введите логин';
    }

    if($data['email'] == '') {
        $errors[] = 'Введите email';
    }
    if($data['password'] == '') {
        $errors[] = 'Введите пароль';
    }
    if($data['password_2'] !== $data['password']) {
        $errors[] = 'Повторный пароль введен не верно ';
    }

    if(empty($errors)){
        //все хорошо можно регистрировать

    }
    else{
        echo '<div style="color:red;" >'.array_shift($errors).'</div><hr>';
    }
}
?>


<form action="auth.php" method="POST"></form>
<p>
    <strong>Ваш логин</strong>
    <input type="text" name="login" value="<?php echo @$data ['login'];?>">
</p>

<form action="auth.php" method="POST"></form>
<p>
    <strong>Ваш E-mail</strong>
    <input type="email" name="email" value="<?php echo @$data ['email'];?>">
</p>

<form action="auth.php" method="POST"></form>
<p>
    <strong>Ваш пароль</strong>
    <input type="password" name="password" value="<?php echo @$data ['password'];?>">
</p>
<form action="auth.php" method="POST"></form>
<p>
    <strong>Повторите пароль</strong>
    <input type="password" name="password_2" value="<?php echo @$data ['password_2'];?>">
</p>
<p>
    <button type="sumbit" name="do_signup">Зарегистрироваться</button>
</p>
</form>