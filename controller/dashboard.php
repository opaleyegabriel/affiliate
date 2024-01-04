<?php

class Dashboard extends Controller{
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
        $this->view->js=array('dashboard/js/default.js');
    }
    function index(){
      $this->view->affiliateBonus=$this->model->affiliateBonus();
      $this->view->affiliatereferrer=$this->model->affiliatereferrer();
      
      $this->view->getactivities=$this->model->getactivities();

      $this->view->getaffiliateallw=$this->model->getaffiliateallw();
      $this->view->getaffiliateallwWithdrawal=$this->model->getaffiliateallwWithdrawal();

      $this->view->getuserinfo=$this->model->getuserinfo();
      $this->view->getCurrentBalance=$this->model->getCurrentBalance();
      $this->view->getAgentPcent=$this->model->getAgentPcent();   
      $this->view->getTarget=$this->model->getTarget();
      $this->view->getAgentPcentRecCount=$this->model->getAgentPcentRecCount();
      
      $this->view->render('dashboard/index');
    }
    function logout()
    {
        Session::destroy();
        header('location: '. URL . 'index');
        exit;
    }

}
