<?php
require_once('database.php');
class User extends Database {
    /* Properties */
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /* List all users */
    public function getUser() {
        $db = new Database;
        $data = $db->conn->prepare("SELECT username, password FROM users WHERE id = :id");
        $data->execute(['id' => $this->id]);
        return $row = $data->fetch();
    }

    private function getName() {
        $user = $this->getUser();

        return $user['username'];
    }

    public function __toString() {
        return self::getName();
    }
}