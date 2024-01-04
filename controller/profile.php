<?php

class Profile extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $logged=Session::get('loggedIn');
       if ($logged==false)
       {
           Session::destroy();
           header('location: '. URL . 'index');
           exit;
       }
       $this->view->js=array('profile/js/default.js');

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->getuserbankinfo=$this->model->getuserbankinfo();
        $this->view->getuserinfo=$this->model->getuserinfo();
        $this->view->getallbanks=$this->model->getallbanks();
        $this->view->render('profile/index');
        // $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('profile/index');
    }
    public function savepassport(){
      // $data['brand_id']="brnd"."".$data['rand'];
      $data['mobile']=$_POST['mobile'];
      $data['fullname']=Session::get('currentfullname');
      // $data['passport']=$_POST['passport'];
      $data['path']="public/passports/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      // for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
      //     $randomNumber .= mt_rand(0, 10);
      // }
      // $data['rand']=$randomNumber;
      function getMyExtension($str)
      {
        $i = strrpos($str, ".");
        if (!$i) {
          return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
      }
      $filename = stripslashes($_FILES['passport']['name']);
      $extension = getMyExtension($filename);
      $extension = strtolower($extension);
      $string0=$data['mobile']."".$data['fullname'];
      // .(addslashes($_FILES['passport']['name']));
      $data['passporturl'] = str_replace(' ','',$string0).".".$extension;
      $data['passport']=$data['path'].$data['passporturl'];
      $userpassport=$data['passport'];
      move_uploaded_file($_FILES ["passport"]["tmp_name"], $userpassport);
      // echo "<pre>";
      // print_r($data);
      $this->model->savepassport($data);
    }
    public function saveiddetails(){
      // $data['brand_id']="brnd"."".$data['rand'];
      $data['mobile']=$_POST['mobile'];
      $data['idcardno']=$_POST['idcardno'];
      // $data['passport']=$_POST['passport'];
      $data['path']="public/idcards/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      // for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
      //     $randomNumber .= mt_rand(0, 10);
      // }
      // $data['rand']=$randomNumber;
      function getMyExtension($str)
      {
        $i = strrpos($str, ".");
        if (!$i) {
          return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
      }
      $filename = stripslashes($_FILES['idcardimg']['name']);
      $extension = getMyExtension($filename);
      $extension = strtolower($extension);
      $string0=$data['mobile'];
      // .(addslashes($_FILES['idcardimg']['name']));
      $data['idcardimgurl'] = str_replace(' ','',$string0).".".$extension;
      $data['idcardimg']=$data['path'].$data['idcardimgurl'];
      $useridcardimg=$data['idcardimg'];
      move_uploaded_file($_FILES ["idcardimg"]["tmp_name"], $useridcardimg);
      // echo "<pre>";
      // print_r($data);
      $this->model->saveiddetails($data);
    }
  public function updateprofile(){
    $data['name']=$_POST['name'];
    $data['email']=$_POST['email'];
    $data['address']=$_POST['address'];
    $data['mobile']=$_POST['mobile'];
    // echo "<pre>";
    // print_r($data);
    $this->model->updateprofile($data);
  }
  public function savebankdetails(){
    $data['account_number']=$_POST['account_number'];
    $data['bank_name']=$_POST['bank_name'];
    $data['mobile']=$_POST['mobile'];
    // echo "<pre>";
    // print_r($data);
    $this->model->savebankdetails($data);
  }
  public function saverequest(){
    $data['reason']=$_POST['reason'];
    $data['account_number']=$_POST['account_number'];
    $data['bank_name']=$_POST['bank_name'];
    $data['mobile']=$_POST['mobile'];
    // echo "<pre>";
    // print_r($data);
    $this->model->saverequest($data);
  }

}
