<?php
	
	class DB{
		
		protected $_result,
				$_count,
				$_pdo,
				$_error = false;
		
		public function __construct(){
								
			$host = 'localhost';
			$db   = 'dentclick_db';
			$user = 'root';
			$pass = 'root';
			$charset = 'utf8';

			$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
			$opt = [
					PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
					PDO::ATTR_EMULATE_PREPARES   => false,
				];
			$this->_pdo = new PDO($dsn, $user, $pass, $opt);			
			return $this;
			
		}
		
		public function connect()
		{
			return $this->_pdo;
		}

		public function result(){
			return $this->_result;
		}
		
		public function count(){
			return $this->_count;
		}
		
		public function error(){
			return $this->_error;
		}