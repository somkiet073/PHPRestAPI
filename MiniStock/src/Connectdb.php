<?php
    // src/Connectdb.php
    namespace Statics;
    use PDO;
    
    // mysql_connect(); Not support (x)
    // mysqli_connect(); support (/)
    // PDO(); support (/) ย่อมาจาก PHP DataBase Object
    class Connectdb {
        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_pass = '';
        private $db_name = 'simplerestdb';
        private $connection;

        public function getConnect(){
            
            $this->connection = null;
            try {
                $this->connection = new PDO(
                    "mysql:host=".$this->db_host.";dbname=".
                    $this->db_name, $this->db_user, $this->db_pass
                );
                echo 'Connect Success';

            } catch (PDOException $exception) {
                echo 'Connection failed: '.
                $exception->getMessage();
            }

            return $this->connection;
        }
    }