<?php
class Connection
{
    public $host;
    public $username;
    public $password;
    public $db_name;
    public function __construct($host, $username, $password, $db_name)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }

    public function getCnnection()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
    }
}

$c1 = new Connection('localhost', 'root', '', 'complaint');

$c1->getCnnection();
