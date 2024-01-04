<?php
class Dashboard_Model extends Model {
    function __construct()
    {
        parent::__construct();
    }



    //withdrawals
    public function getaffiliateallwWithdrawal(){
      $sql=$this->db->prepare("SELECT * FROM tbl_withdrawals where mobile=:e AND status=:s");
      $sql->execute(array(
        ':e'=>Session::get('mobile'),
        ':s'=>"Paid"
        ));
    return $sql->fetchAll();
    }
    //get Affiliate Allw
    public function getaffiliateallw(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_allw where mobile=:e");
      $sql->execute(array(
        ':e'=>Session::get('mobile')
        ));
    return $sql->fetchAll();
    }
    //get target
    public function getTarget(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_target where nstatus=:e");
      $sql->execute(array(
        ':e'=>"Active"
        ));
    return $sql->fetch();
    }

    //Balances
    public function getCurrentBalance(){
      $sql=$this->db->prepare("SELECT sum(r7pcent)-sum(credit) as cbal FROM tbl_rewards WHERE mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')
        ));
    return $sql->fetch();
    }
    public function getAgentPcent(){
      $sql=$this->db->prepare("SELECT sum(r7pcent) as APBalance FROM tbl_rewards WHERE mobile=:mobile AND cashout='N'");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')
        ));
    return $sql->fetch();
    }

    //Record Counts
    public function getAgentPcentRecCount(){
      $sql=$this->db->prepare("SELECT count(*) as TargetCount FROM tbl_rewards WHERE mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')
        ));
    return $sql->fetch();
    }

    public function affiliateBonus(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus  WHERE mobile=:mobile");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')
        ));
    return $sql->fetchAll();
    }

    public function affiliatereferrer(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_referrermobile  WHERE referrermobile=:referrermobile");
      $sql->execute(array(
        ':referrermobile'=>Session::get('mobile')
        ));
    return $sql->fetchAll();
    }










    public function getuserinfo(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users INNER JOIN tbl_user_info ON tbl_affiliate_users.mobile=tbl_user_info.mobile WHERE tbl_affiliate_users.mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
    public function getactivities(){
      $sql=$this->db->prepare("SELECT * FROM tbl_activities  WHERE mobile=:mobile  ORDER BY id DESC LIMIT 6");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
}
