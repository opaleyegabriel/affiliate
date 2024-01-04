<?php

class Changepassword extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('changepassword/js/default.js');

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->getuserinfo=$this->model->getuserinfo();
        $this->view->render('changepassword/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('changepassword/index');
    }
    public function checkpassword()
    {
      $data=array();
      $data['mobile']=$_POST['mobile'];
      $data['password']=$_POST['password'];
      //echo "<pre>";
      //print_r($data);
      $this->model->checkpassword($data);
    }
    public function changepassword(){
      $data=array();
      $data['mobile']=$_POST['mobile'];
      $data['newpassword']=$_POST['newpassword'];

      //echo "<pre>";
      //print_r($data);
      $this->model->changepassword($data);
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
