<?php

require 'vendor/autoload.php';

use Bipinregmi\Demo\Models\User;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $user = new User();
    $user->delete($user_id);
}

header("Location: index.php");