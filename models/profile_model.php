<?php
  class Profile_Model extends Model{
    function __construct(){
      parent::__construct();
      Session::init();
    }
    public function savepassport($data){
          $sql=$this->db->prepare("UPDATE tbl_user_info SET passport=:passport WHERE mobile=:mobile");
          $sql->execute(array(
            ':passport'=>$data['passport'],
            ':mobile'=>$data['mobile']
            ));
          //activities
          $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
          $sql->execute(array(
            ':mobile'=>$data['mobile'],
            ':activities'=>"Saved Passport"
            ));          
           
           //mark status
          $sqlF=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus WHERE mobile=:mobile");
          $sqlF->execute(array(
            ':mobile'=>$data['mobile']
            ));
          $result=$sqlF->fetchAll();
          if($result){
            //UPDATE
            $sql=$this->db->prepare("UPDATE tbl_affiliate_regstatus SET pimage=:pimage WHERE mobile=:mobile");
             $sql->execute(array(
            ':mobile'=>$data['mobile'],
            ':pimage'=>'Y'
            ));
          }else{
            //INSERT NEW
            $sql=$this->db->prepare("INSERT INTO tbl_affiliate_regstatus(mobile,acct) VALUES (:mobile,:pimage)");
             $sql->execute(array(
            ':mobile'=>$data['mobile'],
            ':pimage'=>'Y'
            ));
          }
           //further check if the status is completed
          $sqlC=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus WHERE mobile=:mobile AND nin=:nin AND acct=:acct AND pimage=:pimage");
          $sqlC->execute(array(
            ':nin'=>'Y',
            ':acct'=>'Y',
            ':pimage'=>'Y'
            ));
          $result=$sqlC->fetchAll();
          if($result > 0){
            $sql=$this->db->prepare("UPDATE tbl_affiliate_regstatus SET amount=:amount WHERE mobile=:mobile");
            $sql->execute(array(
                ':mobile'=>$data['mobile'],
                ':amount'=>50000
            ));
            //select refferer
            $sqlSelect=$this->db->prepare("SELECT * FROM tbl_affiliate_users WHERE mobile=:mobile");
            $sqlSelect->execute(array(
              ':mobile'=>$data['mobile']
              ));

            $rr=$sqlSelect->fetchAll();
            foreach ($rr as $key => $value) {
              $referrermobile=$value['referrermobile'];
            }

            $sql=$this->db->prepare("INSERT INTO tbl_affiliate_referrermobile(mobile,referrermobile,amount) VALUES (:mobile,:referrermobile,:amount)");
             $sql->execute(array(
            ':mobile'=>$data['mobile'],
            ':referrermobile'=>$referrermobile,
            ':amount'=>2000
            ));

             $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
              $sql->execute(array(
                ':mobile'=>$data['mobile'],
                ':activities'=>"Referrer Bonus received"
                ));


          }         
          
          echo '<script type="text/javascript">';
          echo 'alert("Passport Uploaded");
          window.location.href = "'.URL.'profile";';
          echo "</script>";
    }
    public function saveiddetails($data){
      $sql=$this->db->prepare("UPDATE tbl_user_info SET idcardno=:idcardno, idcardimg=:idcardimg  WHERE mobile=:mobile");
      $sql->execute(array(
        ':idcardno'=>$data['idcardno'],
        ':idcardimg'=>$data['idcardimg'],
        ':mobile'=>$data['mobile']
        ));

      $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
      $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':activities'=>"Uploded Id Card Details"
        ));



      
       //mark status
      $sqlF=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus WHERE mobile=:mobile");
      $sqlF->execute(array(
        ':mobile'=>$data['mobile']
        ));
      $result=$sqlF->fetchAll();
      if($result > 0){
        //UPDATE
        $sql=$this->db->prepare("UPDATE tbl_affiliate_regstatus SET nin=:nin WHERE mobile=:mobile");
         $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':nin'=>'Y'
        ));
      }else{
        //INSERT NEW
        $sql=$this->db->prepare("INSERT INTO tbl_affiliate_regstatus(mobile,acct) VALUES (:mobile,:nin)");
         $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':nin'=>'Y'
        ));
      }
       //further check if the status is completed
      $sqlC=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus WHERE mobile=:mobile AND nin=:nin AND acct=:acct AND pimage=:pimage");
      $sqlC->execute(array(
        ':nin'=>'Y',
        ':acct'=>'Y',
        ':pimage'=>'Y'
        ));
      $result=$sqlC->fetchAll();
      if($result > 0){
        $sql=$this->db->prepare("UPDATE tbl_affiliate_regstatus SET amount=:amount WHERE mobile=:mobile");
         $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':amount'=>50000
        ));

         //select refferer
            $sqlSelect=$this->db->prepare("SELECT * FROM tbl_affiliate_users WHERE mobile=:mobile");
            $sqlSelect->execute(array(
              ':mobile'=>$data['mobile']
              ));

            $rr=$sqlSelect->fetchAll();
            foreach ($rr as $key => $value) {
              $referrermobile=$value['referrermobile'];
            }

            $sql=$this->db->prepare("INSERT INTO tbl_affiliate_referrermobile(mobile,referrermobile,amount) VALUES (:mobile,:referrermobile,:amount)");
             $sql->execute(array(
            ':mobile'=>$data['mobile'],
            ':referrermobile'=>$referrermobile,
            ':amount'=>2000
            ));

              $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
              $sql->execute(array(
                ':mobile'=>$data['mobile'],
                ':activities'=>"Affiliate Referrer received"
                ));
      }    
      
      echo '<script type="text/javascript">';
      echo 'alert("Id Card Details Uploaded");
      window.location.href = "'.URL.'profile";';
      echo "</script>";
      
    }
    public function updateprofile($data){
      $sql=$this->db->prepare("UPDATE tbl_affiliate_users SET cname=:name, email=:email    WHERE mobile=:mobile");
      $sql->execute(array(
        ':name'=>$data['name'],
        ':email'=>$data['email'],
        ':mobile'=>$data['mobile']
        ));
      $sql=$this->db->prepare("UPDATE tbl_user_info SET  address=:address    WHERE mobile=:mobile");
      $sql->execute(array(
        ':address'=>$data['address'],
        ':mobile'=>$data['mobile']
        ));
        $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
        $sql->execute(array(
          ':mobile'=>$data['mobile'],
          ':activities'=>"Updated Profile Details"
          ));
        // Session::set('loggedIn',true);
        Session::set('mobile',$data['mobile']);
        Session::set('currentfullname',$data['name']);
        Session::set('currentemail',$data['email']);
      echo '<script type="text/javascript">';
      echo 'alert("Profile Updated");
      window.location.href = "'.URL.'profile";';
      echo "</script>";
    }
    public function savebankdetails($data){
      $sql=$this->db->prepare("UPDATE tbl_bank_info SET account_number=:account_number, bank_name=:bank_name WHERE mobile=:mobile");
      $sql->execute(array(
        ':account_number'=>$data['account_number'],
        ':bank_name'=>$data['bank_name'],
        ':mobile'=>$data['mobile']
        ));
      

        $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
        $sql->execute(array(
          ':mobile'=>$data['mobile'],
          ':activities'=>"Saved Bank Details"
          ));

        
         
      //mark status
      $sqlF=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus WHERE mobile=:mobile");
      $sqlF->execute(array(
        ':mobile'=>$data['mobile']
        ));
      $result=$sqlF->fetchAll();
      if($result > 0){
        //UPDATE
        $sql=$this->db->prepare("UPDATE tbl_affiliate_regstatus SET acct=:acct WHERE mobile=:mobile");
         $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':acct'=>'Y'
        ));
      }else{
        //INSERT NEW
        $sql=$this->db->prepare("INSERT INTO tbl_affiliate_regstatus(mobile,acct) VALUES (:mobile,:acct)");
         $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':acct'=>'Y'
        ));
      }
      //further check if the status is completed
      $sqlC=$this->db->prepare("SELECT * FROM tbl_affiliate_regstatus WHERE mobile=:mobile AND nin=:nin AND acct=:acct AND pimage=:pimage");
      $sqlC->execute(array(
        ':nin'=>'Y',
        ':acct'=>'Y',
        ':pimage'=>'Y'
        ));
      $result=$sqlC->fetchAll();
      if($result > 0){
        $sql=$this->db->prepare("UPDATE tbl_affiliate_regstatus SET amount=:amount WHERE mobile=:mobile");
         $sql->execute(array(
        ':mobile'=>$data['mobile'],
        ':amount'=>50000
        ));

         $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
              $sql->execute(array(
                ':mobile'=>$data['mobile'],
                ':activities'=>"Registration Bonus received"
                ));

         //select refferer
            $sqlSelect=$this->db->prepare("SELECT * FROM tbl_affiliate_users WHERE mobile=:mobile");
            $sqlSelect->execute(array(
              ':mobile'=>$data['mobile']
              ));

            $rr=$sqlSelect->fetchAll();
            foreach ($rr as $key => $value) {
              $referrermobile=$value['referrermobile'];
            }

            $sql=$this->db->prepare("INSERT INTO tbl_affiliate_referrermobile(mobile,referrermobile,amount) VALUES (:mobile,:referrermobile,:amount)");
             $sql->execute(array(
            ':mobile'=>$data['mobile'],
            ':referrermobile'=>$referrermobile,
            ':amount'=>2000
            ));
      }
        
        
      echo '<script type="text/javascript">';
      echo 'alert("Bank details Updated");
      window.location.href = "'.URL.'profile";';
      echo "</script>";
    }
    public function saverequest($data){
      $sql=$this->db->prepare("INSERT INTO tbl_bank_edit_request (reason, account_number, bank_name, mobile) VALUES (:reason, :account_number, :bank_name, :mobile)");
      $sql->execute(array(
        ':reason'=>$data['reason'],
        ':account_number'=>$data['account_number'],
        ':bank_name'=>$data['bank_name'],
        ':mobile'=>$data['mobile']
        ));
        $sql=$this->db->prepare("INSERT INTO tbl_activities(mobile, activities) VALUES (:mobile, :activities)");
        $sql->execute(array(
          ':mobile'=>$data['mobile'],
          ':activities'=>"Sent Bank Edit Request"
          ));
      echo '<script type="text/javascript">';
      echo 'alert("Request Sent!");
      window.location.href = "'.URL.'profile";';
      echo "</script>";
    }
    public function getuserinfo(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users INNER JOIN tbl_user_info ON tbl_affiliate_users.mobile=tbl_user_info.mobile WHERE tbl_affiliate_users.mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
    public function getuserbankinfo(){
      $sql=$this->db->prepare("SELECT * FROM tbl_affiliate_users INNER JOIN tbl_bank_info ON tbl_affiliate_users.mobile=tbl_bank_info.mobile WHERE tbl_affiliate_users.mobile=:mobile ");
      $sql->execute(array(
        ':mobile'=>Session::get('mobile')

        ));
    return $sql->fetchAll();
    }
    public function getallbanks(){
      $sql=$this->db->prepare("SELECT * FROM `tbl_banks` ORDER BY bank ASC;");
      $sql->execute(array(
        ));
    return $sql->fetchAll();
    }
  }
