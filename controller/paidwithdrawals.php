<?php

class Paidwithdrawals extends Controller{
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
        $this->view->js=array('paidwithdrawals/js/default.js');
    }
    function index(){
      $this->view->allwithdrawals=$this->model->allwithdrawals();
      $this->view->getuserinfo=$this->model->getuserinfo();
      $this->view->getpaidbalance=$this->model->getpaidbalance();
        $this->view->render('paidwithdrawals/index');
    }


}
