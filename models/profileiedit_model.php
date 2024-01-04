<?php
  class Profileiedit_Model extends Model{
    function __construct(){
      parent::__construct();
      Session::init();
    }


	public function getuserinfo(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users INNER JOIN tbl_user_info ON tbl_affiliate_users.mobile=tbl_user_info.mobile WHERE tbl_affiliate_users.mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }

}
