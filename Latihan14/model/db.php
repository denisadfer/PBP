<?php 

class Mydb {
  //atribut
  public $host = "127.0.0.1";
  public $dbname = "dbsiswa";
  public $username = "root";
  public $password = "";
  public $db;
  public $datasiswa = [];

  //method
  public function __construct()
  {
    $this->db = new PDO("mysql:
    host={$this->host};
    dbname={$this->dbname}", $this->username, $this->password);
  }

  public function tampilkan_tabel()
  {
    $query = $this->db->prepare("SELECT * FROM tbsiswa");
    $query->execute();
    $data = $query->fetchAll();
    $this->datasiswa = $data;
    return $this->datasiswa;
  }

  public function insert_data($nis, $nama)
  {
    $query = $this->db->prepare("INSERT INTO tbsiswa(nis,nama) VALUES(:ns,:nm)");
    $query->bindParam(":ns",$nis);
    $query->bindParam(":nm",$nama);
    
    return $query->execute() ? true : false;
  }
  
  public function tampilkan_detail($no)
  {
    $query = $this->db->prepare("SELECT * FROM tbsiswa WHERE no = {$no}");
    $query->execute();
    $data = $query->fetchAll();
    $this->datasiswa = $data;
    return $this->datasiswa;
  }

  public function edit_data($no, $nis, $nama)
  {
    $query = $this->db->prepare("UPDATE tbsiswa SET nis = :ns, nama = :nm  WHERE no={$no}");
    $query->bindParam(":ns",$nis);
    $query->bindParam(":nm",$nama);
    
    return $query->execute() ? true : false;
  }

  public function hapus_data($no)
  {
    $query = $this->db->prepare("DELETE FROM tbsiswa WHERE no={$no}");
    return $query->execute() ? true : false;
  }
}

?>