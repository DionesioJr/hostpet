<?php

class Users
{
    public function __construct()
    {
    }


    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from users");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function show($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from users where id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }

    static public function store($data)
    {
        global $DB;
        $query = $DB->query("INSERT INTO `hostpet`.`users` (`email`, `password`, `status`, `type`, `name`) 
        VALUES ('{$data['email']}', '{$data['password']}', {$data['status']}, {$data['type']}, '{$data['name']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `users` SET `nome` = '{$data['nome']}', `idade` = '{$data['idade']}', `peso` = '{$data['peso']}', `altura` = '{$data['altura']}', `sexo` = '{$data['sexo']}', `email` = '{$data['email']}', `senha` = '{$data['senha']}', `tipo` = '{$data['tipo']}', `status` = '{$data['status']}' 
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function destroy($id)
    {
        global $DB;

        $treinos = Treinos::showAluno($id);

        if (!empty($treinos)) {
            foreach ($treinos as $key => $treino) {
                $destroy =  Treinos::destroy($treino['id']);
            }
        }


        $query = $DB->query("DELETE from users where id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function login($email, $password)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from users where email = '{$email}' AND password = '{$password}'");

        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }
}
