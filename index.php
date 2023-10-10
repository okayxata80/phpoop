<?php

require 'vendor/autoload.php';

use Bipinregmi\Demo\Models\User;

$user = new User();
$users = $user->all();


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
                <div class="col-md-12 my-2">
                    <a href="create.php" class="btn btn-success">Add New</a>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user['id'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['phone'] ?></td>
                            <td class="d-flex">
                                <a href="edit.php?user_id=<?php echo $user['id'] ?>" class="btn btn-info">Edit</a>
                                &nbsp;
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>