<?php
    function getDb() {
        $user = 'dbuser';
        $pass = 'dbpass';
        $db = new PDO('mysql:dbname=contactform;host=localhost;charset=utf8', $user, $pass);
        return $db;
    }
