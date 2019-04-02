<?php 
    //For php 7
    //$con = mysqli_connect("localhost","root","","met");
    //For php 5
    // $con = mysql_connect("localhost","root","");
    // $db = mysql_select_db("met");
    
//$data =['name'=>'rudresh']
//"('rudra')"
    class Login{
        function __construct(){
            $this->con = mysqli_connect("localhost","root","","met");
        }
        function up($m_data){
            $str  = "SELECT * FROM users";
            $str .= " WHERE ";
            $str .= "email='".$m_data['email']."' AND password='".$m_data['password']."'"; 
            $result = mysqli_query($this->con,$str) or die(mysqli_error($this->con));
            if(mysqli_num_rows($result)>0){
                return true;
            }else{
                return false;
            }
        }
        function error($e){
            return $e;
        } 

    }
?>