<?php
class db{
    public $host="localhost";//hostname
    public $user="root";//database username
    public $password="";//database password
    public $database="database_name";//database name
    public $con;
    public function connect(){
        $this->con =mysqli_connect($this->host, $this->user, $this->password, $this->database);
        
    }
    if(mysqli_errorno(this->con)){
        echo 'error' .mysqli_connect_error();
        exit();
    }
}
public function disconnect(){
    mysqli_close(this_con);
}
/**
     * ExecuteQuery function
     * @param string $sql Proivde your sql statements here.
     * @param int $type 1:Select, 2:Insert, 3:Update
     * @return boolean
 **/
public function Execute($sql, $type=1);
$returnData;
try{
    $sql=str_replace("''",null,$sql);
    $this->Connect();
}
if($type1==1){
    $returnData=$data;
}
if($type==2){
    $returnData=$mysqli_insert_id($this->con);
}
if($type==3){
    $returnData=$mysqli_affected_row($this->con);
}
$this->Disconnect();
catch (Exception $exe){
    $returnData->FALSE;
}
return$returnData
