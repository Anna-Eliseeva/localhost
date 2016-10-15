<?php
session_start();
if(isset($_POST["send"])) {
    $from = htmlspecialchars($_POST["from"]);
    $to = htmlspecialchars($_POST['to']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_fro = '';
    $error_to = '';
    $error = true;
    $error_subject = '';
    $error_message = '';
    $error = false;
//if($from == '' || !preg_match("/@/", $from)) {
//    $error_from = "Введите корректный email";
//    $error = true;
}
if($to == '' || !preg_match("/@/", $to)) {
    $error_to = "Введите тему письма";
    $error = true;
}
if($subject == '' || !preg_match("@", $subject)) {
    $error_subject = "Введите корректный email";
    $error = true;
}

if($message == 0) {
    $message = "Введите текст сообщения";
    $error = true;
}
if(strlen($subject) == 0) {
    $subject = "Введите тему сообщения";
    $error = true;
}
if(!$error) {
    $subject = "=utf-8&" . base64_encode($subject) . "?=";
    $headers
        = "From:$from\r\nReply-to : $from\r\nContent-type:text/plain;charset = utf-8\r\n
    ";
    mail($to, $subject, $message, $headers);
    header("Location :success.php");
    exit;
}
?>

<!DOCTYPE html>


<head>
    <title>Обратная связь</title>
</head>
<body>
<h2>Форма обратной связи</h2>
<form name="feedback" action="#" method="post">
    <label>От кого:</label><br>
    <input type="text" name="from" value="<?= $_SESSION["from"] ?>" /><br>
    <span style="color: red"><?= $error_fro ?></span>

    <label>Кому:</label><br>
    <span style="color: red"><?= $error_fro ?></span>
    <input type="text" name="to" value="<?= $_SESSION["to"] ?>" /><br>
    <span style="color: red"><?= $error_to ?></span>

    <label>Тема:</label><br>
    <input type="text" name="subject" value="<?= $_SESSION["subject"] ?>" /><br>
    <span style="color: red"><?= $error_subject ?></span>

    <label>Сообщение:</label><br>
    <textarea name="message" cols="20" rows="20"><?= $_SESSION["message"] ?></textarea> </form><br>
    <input type="submit" name="send" value="Отправить" />
<span style="color: red"><?= $error_message ?></span>

</body>


</html>