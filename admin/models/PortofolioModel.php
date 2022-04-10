<?php

class portofolioModel
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->db_name;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getProfile()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM users');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAbout()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM project');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getContact($pesan)
    {
        $email = $pesan["email"];
        $users = $pesan["users"];
        $psn = $pesan["pesan"];
        $query = "INSERT INTO contact VALUES(
            '','$email','$users','$psn'
        )";
        $this->stmt = $this->dbh->prepare($query);
        $this->stmt->execute();
        return $this->stmt->rowCount();
    }
}
