<?php 

class Driver {
  public $host = "127.0.0.1";
  public $dbname = "dbojek";
  public $username = "root";
  public $password = "";
  public $db;
  public $dataojek = [];

  public function __construct()
  {
    $this->db = new PDO("mysql:
    host={$this->host};
    dbname={$this->dbname}", $this->username, $this->password);
  }

  public function getAllDriver()
  {
    $query = $this->db->prepare("SELECT * FROM tbojek");
    $query->execute();
    $data = $query->fetchAll();
    $this->dataojek = $data;
    return $this->dataojek;
  }

  public function editData($id, $vote, $star)
  {
    $rate = (int)$vote + (int)$star;
    $query = $this->db->prepare("UPDATE tbojek SET vote = :vt  WHERE id={$id}");
    $query->bindParam(":vt",$rate);
    
    return $query->execute() ? true : false;
  }
}

?>