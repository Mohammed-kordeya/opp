<?php
class users
{
    public $id;
    public $name;

    public $email;

    public $password;
    public $conn;
    public function __construct($id, $name, $email, $password, $conn)
    {
        $this->id = $id;
        $this->name = $name;

        $this->email = $email;

        $this->password = $password;
        $this->conn = $conn;
    }
    public function addusers()
    {
        $query = "INSERT INTO users values('$this->id','$this->name','$this->email','$this->password')";
        return mysqli_query($this->conn, $query);
    }
}
