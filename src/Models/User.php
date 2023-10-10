<?php


namespace Bipinregmi\Demo\Models;

use Bipinregmi\Demo\Database\DatabaseConnection;

class User extends DatabaseConnection
{
    public $name;
    public $email;
    public $phone;

    public function all()
    {
        $users = [];
        $sql = "SELECT * FROM users";
        $result = mysqli_query($this->connection(), $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }

        return $users;
    }

    public function save()
    {
        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;

        $sql = "INSERT INTO users(name,email,phone) values ('$name','$email','$phone')";
        $result = mysqli_query($this->connection(), $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function update($id, $name, $email, $phone)
    {
        $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id = '$id'";
        $result = mysqli_query($this->connection(), $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function find($id)
    {
        $sql = "SELECT * FROM users where id = '$id'";
        $result = mysqli_query($this->connection(), $sql);
        if ($result) {
            return mysqli_fetch_assoc($result);
        }
        return null;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($this->connection(), $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
