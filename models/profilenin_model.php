<?php
  class Profilenin_Model extends Model{
    function __construct(){
      parent::__construct();
      Session::init();
    }




 public function getallbanks(){
      $sql=$this->db->prepare("SELECT * FROM `tbl_banks` ORDER BY bank ASC;");
      $sql->execute(array(
        ));
    return $sql->fetchAll();
    }
}