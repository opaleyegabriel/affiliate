<?php
class Withdrawals_Model extends Model {
    function __construct()
    {
        parent::__construct();
    }
    public function getuserinfo(){
      $sql=$this->db->prepare("SELECT * FROM tbl_users INNER JOIN tbl_user_info ON tbl_users.mobile=tbl_user_info.mobile WHERE tbl_users.mobile=:mobile ");
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
      $sql=$this->db->prepare("SELECT * FROM tbl_withdrawals WHERE mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
    public function withdrawlrequest($data){
      $sql=$this->db->prepare("INSERT INTO tbl_withdrawals(mobile,description,amount,status) VALUES (:mobile,:description,:amount,:status)");
      $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':description'=>$data['description'],
        ':amount'=>$data['amount'],
        ':status'=>$data['status']
      ));
      echo '<script type="text/javascript">';
      echo 'alert("Withdrawal Request has been sent successful ");
      window.location.href = "'.URL.'withdrawals";';
      echo "</script>";
    }
}
