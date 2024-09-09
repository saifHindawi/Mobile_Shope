<?php

class DBController{
    //database connection properties
    protected $host = "server";
    protected $user = "root";
    protected $password = "";
    protected $database = "shope";

    //connrction property
    public $con = null;
    

    //call conetracter
    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo"Fail".$this->con->connect_error;
        }
    }
    
    public function __destruct(){
        $this->closeConnection();
    }
    
    //for mysqli closing connection
    protected function closeConnection(){
        if($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
      }
    }
?>