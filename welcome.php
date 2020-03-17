<?php include 'auth.php' ?>

<?php 

echo $_SERVER['REQUEST_METHOD'];


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    gotoLogin();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['firstName']; ?>!</h1>

    <form method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>