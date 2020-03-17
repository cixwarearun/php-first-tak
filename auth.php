<?php

session_start();

//include 'user.php';

function gotoLogin() {
    header('Location: index.php');
    session_destroy();
}
// echo isset($_SESSION['email']) ? 'true' : 'false';

// if(!isset($_SESSION['user']) || $user['user'] === $_SESSION['user']) {
//     gotoLogin();
// }
?>
