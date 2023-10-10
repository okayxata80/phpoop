<?php

require 'vendor/autoload.php';

use Bipinregmi\Demo\Models\User;


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST)) {

    $user = new User();
    $user->name = isset($_POST['name']) ? $_POST['name'] : '';
    $user->email = isset($_POST['email']) ? $_POST['email'] : '';
    $user->phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $user->save();
    header("Location: index.php");
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <section id="table">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Create User
                        </div>
                        <div class="card-body">
                            <form action="create.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                                </div>

                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>