<?php

class User extends model{

    public function getUsers(){

        #just an example
        $sql = $this->pdo->query('SELECT * FROM users');
        $users = $sql->fetchAll(PDO::FETCH_ASSOC);

        return false;
    }

}