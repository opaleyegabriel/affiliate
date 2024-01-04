<?php
  class Changepassword_Model extends Model{
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
    public function checkpassword($data){
    $sql=$this->db->prepare("SELECT password FROM tbl_affiliate_users WHERE mobile=:mobile AND password=:password ");
    $sql->execute(array(
      ':mobile'=>$data['mobile'],
      ':password'=>$data['password']

    ));
    $result=$sql->fetch();
    //echo ($result);
    //exit();

 $rows=$sql->rowCount();
    if($rows > 0){
      $message="password successfully found";
      $found_status="Yes";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    //  header('location: '. URL . 'dashboard');
    }


    else{
      $message="password not found";
      $found_status="No";
      $dat=array('message'=>$message,'found_status'=>$found_status);
      echo json_encode($dat);
    }
  }
  public function changepassword($data){
  /*echo "i'm a model, see your records below";
   echo "<pre>";
   print_r($data);}*/
   $sql=$this->db->prepare("UPDATE tbl_affiliate_users SET password='$data[newpassword]' WHERE mobile=:mobile ;");
   $sql->execute(array(
     ':mobile'=>$data['mobile'],
   ));
   $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
   $sql->execute(array(
     ':mobile'=>$data['mobile'],
     ':activities'=>"Changed Password"
     ));
    Session::destroy();
    header('location: '. URL . 'index');
  }
  public function matchmobile($data){
    $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users WHERE mobile=:mobile AND pin=:pin AND status='Open' ");
    $sql->execute(array(
      ':mobile'=>$data['mobile'],
      ':pin'=>$data['pin'],
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
  }
