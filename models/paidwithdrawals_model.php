<?php
class Paidwithdrawals_Model extends Model {
    function __construct()
    {
        parent::__construct();
    }
    public function getuserinfo(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users INNER JOIN tbl_user_info ON tbl_affiliate_users.mobile=tbl_user_info.mobile WHERE tbl_affiliate_users.mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
    // total withdrawals approved
    public function getpaidbalance(){
      $sql=$this->db->prepare("SELECT SUM(amount) AS balance FROM tbl_withdrawals WHERE mobile=:mobile AND status='Paid' ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
    // get all withdrawals
    public function allwithdrawals(){
      $sql=$this->db->prepare("SELECT * FROM tbl_withdrawals WHERE mobile=:mobile AND Status='Paid' ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
}
