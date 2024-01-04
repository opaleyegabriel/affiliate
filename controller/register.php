<?php

class Register extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('register/js/default.js');


    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('register/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('register/index');
    }
    public function saveuser(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['name']=$_POST['name'];
      $data['email']=$_POST['email'];
      $data['mobile']=$_POST['mobile'];
      $data['password']=$_POST['password'];
      $data['status']="Open";
      $data['pin']=$_POST['pin'];
      $data['referrermobile']=$_POST['referrermobile'];
      //print_r($data);
      $this->model->saveuser($data);

    }
    public function email(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['email']=$_POST['email'];
      $this->model->email($data);
    }
    public function mobile(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['mobile']=$_POST['mobile'];
      $this->model->mobile($data);
    }
}
