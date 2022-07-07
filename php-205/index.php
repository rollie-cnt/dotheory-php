<form action="index.php" method="POST">
    First name: <input type="text" name="first_name" value="<?=isset($_POST['first_name'])? $_POST['first_name'] : '' ?>"><BR>
    Last name: <input type="text" name="last_name" value="<?=isset($_POST['last_name'])? $_POST['last_name'] : '' ?>"><BR>
    Age: <input type="text" name="age" value="<?=isset($_POST['age'])? $_POST['age'] : '' ?>"><BR>
    <input type="submit" value="Submit">
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
        $age = $_POST['age'];

        echo "First name: " . $_POST['first_name'] . "<BR>";
        echo "Last name: " . $_POST['last_name'] . "<BR>";
        echo "Age: " . $age . "<BR>";

        if ($age > 0 && $age < 20) {
            echo "STUDENT";
        } elseif ($age < 26) {
            echo "EMPLOYEE";
        } elseif ($age < 31) {
            echo "Have a FAMILY";
        } else {
            echo "The person is AGELESS";
        }
    }