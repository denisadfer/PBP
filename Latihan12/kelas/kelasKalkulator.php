<?php 

class kalkulator {
  //atribut atau property
  public $nilai1, $nilai2, $hasil, $keterangan;

  //method
  public function tambah()
  {
    $this->hasil = $this->nilai1+$this->nilai2;
    return $this->hasil;
  }

  public function cek_bilangan()
  {
    if ($this->hasil%2==0) {
      $this->keterangan = "Bilangan Genap";
    } else {
      $this->keterangan = "Bilangan Ganjil";
    }
    return $this->keterangan;
  }
}

?>