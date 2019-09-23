<?php

class User
{
    private $_Username;
    private $_Id;

    public function __construct($name, $id)
    {
        $this->_Username = $name;
        $this->_Id = $id;
    }

    public function getUsername()
    {
        return $this->_Username;
    }

    public function getId()
    {
        return $this->_Id;
    }
}