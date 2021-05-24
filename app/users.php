<?php

include_once "db.php";

class user extends db
{
    protected $tbl = 'user_tbl';

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $this->setTbl($this->tbl);
        $user_data = $this->searchData('email', $email);
        if ($password == $user_data->password) {
            session_start();
            $_SESSION['name'] = $user_data->name;
            header("location:dashbord.php");
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?logout=ok");
    }
}