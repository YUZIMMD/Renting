<?php
       class SqlTools{
              private $host="localhost";
              private $dbname="rent";
              private $dbuser="root";
              private $dbpwd="root";
              private $conn;
              public function __construct(){
                     $this->conn=mysql_connect($this->host,$this->dbuser,$this->dbpwd);
                     if(!$this->conn){
                            die("连接数据库失败".mysql_error());
                     }
                     mysql_select_db($this->dbname,$this->conn) or die("找不到该数据库".mysql_error());
                     mysql_query("set names utf8");
              }
              public function execute_dml($sql){
                     $bool=mysql_query($sql);
                     if ($bool){
                            if ($bool>0) {
                                   return 1;
                            }else{
                                   return 2;
                            }
                     }else {
                            return 0;
                     }
					 mysql_query("set names utf8");
              }
              public function execute_dql($sql){
                     $res=mysql_query($sql);
					  mysql_query("set names utf8");
                     return $res;
              }
              public function close_conn(){
                     mysql_close($this->conn);
					 mysql_query("set names utf8");
              }
       }
?>