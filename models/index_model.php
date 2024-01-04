<?php
class Index_Model extends Model
{

    function __construct()
    {
        parent::__construct();
        Session::init();
    }

    public function verify($data){
      $sql=$this->db->prepare("SELECT mobile FROM tbl_affiliate_users WHERE mobile=:mobile AND nstatus='Open' ");
      $sql->execute(array(
        ':mobile'=>$data['mobile'],
      ));
      $result=$sql->fetch();
      $rows=$sql->rowCount();
      if($rows > 0){
        //  Session::set('cooperative',$_POST['cooperative']);
        $message="User successfully found";
        $found_status="Yes";
        $dat=array('message'=>$message,'found_status'=>$found_status);
        echo json_encode($dat);
      }
      else{
        $message="User not found";
        $found_status="No";
        $dat=array('message'=>$message,'found_status'=>$found_status);
        echo json_encode($dat);
      }
    }

    public function login($data){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users  WHERE mobile=:mobile AND password=:password AND nstatus='Open' ");
      $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':password'=>$data['password'],
      ));
      $result=$sql->fetch();
      $rows=$sql->rowCount();
      if($rows > 0){
      Session::set('loggedIn',true);
      Session::set('mobile',$data['mobile']);
      Session::set('currentfullname',$result['cname']);
      Session::set('currentemail',$result['email']);
      //  Session::set('cooperative',$_POST['cooperative']);
      $message="User successfully found";
      $found_status="Yes";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
      //  header('location: '. URL . 'dashboard');
    }
    else{
      $message="User not found";
      $found_status="No";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
    // $sth=$this->db->prepare("SELECT * FROM tbl_profile  WHERE phone=:phone");
    // $sth->execute(array(
    //   ':phone'=>$data['phone']
    // ));
    // $result=$sth->fetch();
    // $frows=$sth->rowCount();
    // if($frows > 0){
    //   Session::set('firstname',$result['firstname']);
    //   Session::set('lastname',$result['lastname']);
    //   Session::set('email',$result['email']);
    // }
  }

}
