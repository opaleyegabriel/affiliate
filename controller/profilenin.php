<?php

class Profilenin extends Controller{
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
        $this->view->getallbanks=$this->model->getallbanks();
        $this->view->render('profilenin/index');
        // $msg='I want this display as a test to the app';
    }
}