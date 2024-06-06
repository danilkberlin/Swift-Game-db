<?php

class User{

    $id = 0;
    $email = '';
}


class UserRepository{
    public function  fetchAll () {
        $servername = "databank"; // Use the service name defined in docker-compose.yml
        $username = "user";
        $password = "password";
        $dbname = "mydatabase";

        $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname.'', $username, $password);



        // Prepare and execute the SQL query
        $stmt = $dbh->prepare("SELECT * FROM user");
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function  fetchById () {
        $servername = "databank"; // Use the service name defined in docker-compose.yml
        $username = "user";
        $password = "password";
        $dbname = "mydatabase";

        $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname.'', $username, $password);



        // Prepare and execute the SQL query
        $stmt = $dbh->prepare("SELECT * FROM user");
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} 