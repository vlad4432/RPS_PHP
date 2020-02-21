<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author User
 */
class db {
    //put your code here
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;
    
    
    function __construct($params = array()) {
        $this->conn = false;
        $this->host = 'localhost';//hostname
        $this->user = 'root';//username
        $this->password = '';//password
        $this->baseName = 'rps';//baseName
        $this->debug = true;
        $this->connect();//Метод соединения с БЗ
    }
    
    function __destruct() {
        $this->disconnect();
    }
    
    function connect(){
        if(!$this->conn){
            try{
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->baseName.'',
                        $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
            }
            catch(Exception $e){
                die('Connection failed: ' .$e->getMessage());
            }
        }
        return $this->conn;
    }
    
    function disconnect(){
        if($this->conn){
            $this->conn = null;
        }
    }
    
 function getOne($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetch();
        return $response;
    }

    function getAll($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetchAll();
        return $response;
    }

	
	
    
  function executeRun($query) {
        $response = $this->conn->exec($query);
        return $response;
    }
}
