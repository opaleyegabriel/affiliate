<?php

class Index extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('index/js/default.js');

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('index/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('index/index');
    }
    public function verify(){
      $data=array();
      $data['mobile']=$_POST['mobile'];
      //echo "<pre>";
      //print_r($data);
      $this->model->verify($data);
    }

    public function login(){
      $data=array();
      $data['mobile']=$_POST['mobile'];
      $data['password']=$_POST['password'];
      // echo "<pre>";
      // print_r($data);
      $this->model->login($data);
    }
}
