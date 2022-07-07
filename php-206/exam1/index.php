
<?php
// process login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['username'] == 'CookieAdmin' && $_POST['password'] == 'CookiePass') {
    setcookie("logged_in", true, time() + 3600);

    header("Location: index.php");
    exit();
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['logout'])) {
    setcookie("logged_in", false, time() - 3600);
    unset($_COOKIE['logged_in']);
}

if (!isset($_COOKIE['logged_in'])) { ?>
    <form action="index.php" method="POST">
        Username: <input type="text" name="username"><BR>
        Password: <input type="password" name="password"><BR>
        <input type="submit" value="login">
    </form>
<?php } else { ?>
    <a href="index.php?logout=true">Logout</a>
<?php } ?>

