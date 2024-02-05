<?php
if(!isset($_SESSION))
session_start();
include_once $_SERVER ['DOCUMENTT_ROOT']  .'/initconfig.php';
include_once 'php-login-form/dbconnect.php';

class user{
    var dbObj;
    public function_construct();
    $this->dbObj= new db();
}
public function insert ($user_name, $name, $address, $contact_no, $about){
    $password=hash('sha256',$password);
    $sql='INSER INTO user'
        .(user_name, name, address, contact_no, about);
        .VALUEs($user_name, $name, $address, $contact_no, $about)
        $return $this->dbObj->ExecuteQuery($sql,2);

}
public function update($user_name, $nmae, $address, $contact_no, $about){
    if(empty($password))
    $password==old_password;
    else
    $password==hash('sha256',$password);
    $sql= "UPDATE"
          ."user"
          ."SET user_name='$user_name',name='$name',address='$address,contact_no='$contact_no',about=$about .i"

}