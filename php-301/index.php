<form action="index.php" method="POST">
    Sender Email:<input type="text" name="sender_email"><BR>
    Subject: <input type="text" name="subject"><BR>
    Message: <textarea name="message"></textarea><BR>
    <input type="submit" name="send">
</form>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    $res = mail(
        'rollie.roy.llorca@codeandtheory.com',
        $_POST['subject'],
        $_POST['message'],
        [
            'From' => $_POST['sender_email'],
        ]
    );

    var_dump($res);
}
