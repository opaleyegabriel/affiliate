<?php

class Forgotpassword extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('forgotpassword/js/default.js');

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('forgotpassword/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('forgotpassword/index');
    }
    public function verifyemail(){
      $data=array();
      $data['email']=$_POST['email'];
      //echo "<pre>";
      //print_r($data);
      $this->model->verifyemail($data);
    }
    public function matchemail(){
      $data=array();
      $data['email']=$_POST['email'];
      $data['pin']=$_POST['pin'];
      //echo "<pre>";
      //print_r($data);
      $this->model->matchemail($data);
    }
    public function sendemail(){
      $data=array();
      $data['email']=$_POST['email'];
      $data['pin']=$_POST['pin'];
      //echo "<pre>";
      //print_r($data);
      $this->model->sendemail($data);
    }
    public function verifymobile(){
      $data=array();
      $data['mobile']=$_POST['mobile'];
      //echo "<pre>";
      //print_r($data);
      $this->model->verifymobile($data);
    }
    public function matchmobile(){
      $data=array();
      $data['mobile']=$_POST['mobile'];
      $data['pin']=$_POST['pin'];
      //echo "<pre>";
      //print_r($data);
      $this->model->matchmobile($data);
    }
}
