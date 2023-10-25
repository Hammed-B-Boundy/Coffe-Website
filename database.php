<?php
class DB {
    
    private $host = 'localhost';
    private $database = 'coffe_project';
    private $username = 'root';
    private $password = '';
    private $db;

    public function __construct($host=null, $username=null, $database=null, $password=null)
    {
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try {
            $this->db = new PDO("mysql:host=" . $this->host . "; dbname=" . $this->database, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die("<h1>Impossible de se connecter à la base de donnée</h1>");
        } 
    }

    public function query($sql) {
        $req = $this->db->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function getdb() {
        return $this->db;
    }

}

