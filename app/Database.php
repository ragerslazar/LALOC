<?php
namespace App;
use PDO;
use Dotenv\Dotenv;

class Database {
    private $dotenv;
    private $dsn;
    private $login;
    private $password;

    private $pdo;

    public function __construct(){
        $this->dotenv = Dotenv::createImmutable(dirname("../"))->load();
        $this->dsn = $_ENV["DSN"];
        $this->login = $_ENV["DB_LOGIN"];
        $this->password = $_ENV["DB_PASSWORD"];

        $this->pdo = new PDO($this->dsn,$this->login,$this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }

    public function query($query,$params=[]) {

        if($params) {
            $req=$this->pdo->prepare($query);
            $req->execute($params);
        } else {
            $req=$this->pdo->query($query);
        }

        return $req;
    }

}