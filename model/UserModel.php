<?php

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function saveUsername($username) {

        $_SESSION['username'] = $username;
        echo '<p>Saved Pseudo: ' . $_SESSION['username'] . '</p>'; //testing

    }
}
?>
