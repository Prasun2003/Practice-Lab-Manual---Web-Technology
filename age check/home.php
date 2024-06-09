<?php

if (isset($_POST['username']) && isset($_POST['age'])) {
    $username = $_POST['username'];
    $age = $_POST['age'];
    if ($age < 18) {
        print "Sorry $username, you are not authorized";
    } else{
        print "Hello $age, welcome here!";
    }
}else{
    header('Location: checkage.html');
    exit;
}

?>
