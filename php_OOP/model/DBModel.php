<?php
class DBModel
{
    private $username;
    private $host;
    private $password;
    private $db;

    public function __construct()
    {
        $this->username = 'root';
        $this->password = '';
        $this->host = 'localhost';
        $this->db = 'phptestdb';
    }
    public function get_names($name)
    {
        $Conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        $stmt = mysqli_stmt_init($Conn);

        $sql = "SELECT * FROM LAWYER where LawyerName LIKE ?";
        if (mysqli_stmt_prepare($stmt, $sql)) 
        {
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            return $result;
        }
    }
}
