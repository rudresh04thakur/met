<?php 
    //For php 7
    //$con = mysqli_connect("localhost","root","","met");
    //For php 5
    // $con = mysql_connect("localhost","root","");
    // $db = mysql_select_db("met");
    
//$data =['name'=>'rudresh']
//"('rudra')"
    class Register{
        function __construct(){
            $this->con = mysqli_connect("localhost","root","","met");
        }
        function up($m_data){
            $str  = "INSERT INTO users";
            $str .= "(fname,lname,email,mobile,password)";
            $str .= "VALUES"; 
            $str .= "('".$m_data['fname']."','".$m_data['lname']."','".$m_data['email']."','".$m_data['mobile']."','".$m_data['password']."')";
            $result = mysqli_query($this->con,$str) or die(mysqli_error($this->con));
            return true;
        }
        function error($e){
            return $e;
        } 

    }
?>