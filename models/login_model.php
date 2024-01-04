<?php
class Login_Model extends Model
{

    function __construct()
    {
        parent::__construct();



    }
   public function run()
   {

      $sth= $this->db->prepare("SELECT id,role FROM users WHERE login= :login AND password = MD5(:password)");
       $sth->execute(array(
           ':login'=> $_POST['login'],
           ':password'=> $_POST['password']
       ));
       $data = $sth->fetch();

       //$data=$sth->fetchAll();
       //print_r($data);
       $count=$sth->rowCount();
       if($count > 0)
       {
           //login
           Session::init();
           Session::set('role',$data['role']);
           Session::set('loggedIn',true);
           header('location: ../dashboard');
       }
       else
       {
           //show error
           header('location: ../login');
       }
       function logout()
       {
           Session::destroy();
           header('location: ../login');
           exit;
       }
   }
}