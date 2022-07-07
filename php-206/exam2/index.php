<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['username'] == 'SessionAdmin' && $_POST['password'] == 'SessionPass') {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $_POST['username'];

    header("Location: index.php");
    exit();
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['logout'])) {
        unset($_SESSION['logged_in']);
        unset($_SESSION['username']);
    }
    if (!empty($_GET['destroy'])) {
        unset($_SESSION['page_load_count']);
    }   
}

?>

<?php if (!isset($_SESSION['logged_in'])) { ?>
    <form action="index.php" method="POST">
        Username: <input type="text" name="username"><BR>
        Password: <input type="password" name="password"><BR>
        <input type="submit" value="login">
    </form>
<?php } else { ?>
    <?php
    if (!isset($_SESSION['page_load_count'])) {
        $_SESSION['page_load_count'] = 0;
    }

    $_SESSION['page_load_count'] += 1;
    echo "USERNAME:" . $_SESSION['username'] . "<BR>";
    echo "Number of visit:" . $_SESSION['page_load_count'] . "<BR>"; 
    ?>
    <BR>
    <a href="index.php?logout=true&destroy=true">Destroy Session</a><BR>
    <a href="index.php?logout=true">Logout</a>
<?php } ?>