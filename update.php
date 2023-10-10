<?php

use Bipinregmi\Demo\Models\User;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) {
    $user = new User();
    $user->update($_POST['user_id'], $_POST['name'], $_POST['email'], $_POST['phone']);
}

header("Location: index.php");