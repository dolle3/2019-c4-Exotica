<?php

class Login
{
    private $_Password;
    private $_Username;
    private $_Id;

    public function __construct($id, $password, $username)
    {
        $this->_Id = $id;
        $this->_Password = $password;
        $this->_Username = $username;
    }

    public function getId()
    {
        return $this->_Id;
    }

    public function getPassword()
    {
        return $this->_Password;
    }

}