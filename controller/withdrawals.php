<?php

class Withdrawals extends Controller{
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
        //print_r($_SESSION);
        $this->view->js=array('withdrawals/js/default.js');
    }
    function index(){
      $this->view->allwithdrawals=$this->model->allwithdrawals();
      $this->view->getuserinfo=$this->model->getuserinfo();
      $this->view->getpaidbalance=$this->model->getpaidbalance();
        $this->view->render('withdrawals/index');
    }
    public function withdrawlrequest(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['mobile']=$_POST['mobile'];
      $data['description']=$_POST['description'];
      $data['amount']=$_POST['amount'];
      $data['status']="Pending";

      $this->model->withdrawlrequest($data);

    }


}
