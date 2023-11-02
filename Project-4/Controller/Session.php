<?php

class Session
{
    private $database;
    private $username;
    private $pass;
    private $user;

    //Magic Methods
    public function __construct()
    {
        if (@session_start()) {
        }
    }

    //Setters
    public function setUserName($username)
    {
        $this->username = $username;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    //Setters Session
    public function setUserNameSession()
    {
        $_SESSION['usnombre'] = $this->getUserName();
    }

    public function setPassSession()
    {
        $_SESSION['pass'] = $this->getPass();
    }

    public function setOnSession($on)
    {
        $_SESSION['on'] = $on;
    }



    //Getters
    public function getUserName()
    {
        $this->username;
    }

    public function getPass()
    {
        $this->pass;
    }

    //Getters Session
    public function getUserNameSession()
    {
        return $_SESSION['usnombre'];
    }

    public function getPassSession()
    {
        return $_SESSION['pass'];
    }

    public function getOnSession()
    {
        return isset($_SESSION['on']);
    }

    public function getRol()
    {
        return $_SESSION['rol'];
    }

    public function getUser()
    {
        $usuario = new AbmUsuario();
        $data = ['usnombre' => $this->getUserName(), ['uspass'] => $this->getPass()];
        $list = $usuario->Search($data);
        return $list;
    }


    //Magic Methods
    public function Start($user, $pass)
    {
        $success = FALSE;
        if ($user != NULL && $pass != NULL) {
            $this->setUserName($user);
            $this->setPass($pass);
            $success = TRUE;
        }
        return $success;
    }

    public function Verify()
    {
        $success = FALSE;
        if ($this->user != NULL && $this->pass != NULL) {
            if (!isset($_SESSION['usnombre']) && !isset($_SESSION['uspass'])) {
                $query = "SELECT COUNT(*) FROM usuario WHERE usnombre = '{$this->user}' AND uspass = '{$this->pass}' AND usdeshabilitado = 0";
                $this->database = new Database();
                $res = $this->database->query($query);
                $row = $res->fetch(PDO::FETCH_ASSOC);
                if ($row['COUNT(*)'] != 0) {
                    $success = TRUE;
                    $this->setUserNameSession();
                    $this->setPassSession();
                    $this->setOnSession(TRUE);
                }
            }
        }
        return $success;
    }

    public function onSesion()
    {
        @session_start();
        return isset($_SESSION['usnombre']) && isset($_SESSION['pass']);
    }

    public function close()
    {
        session_unset();
        session_destroy();
    }
}
