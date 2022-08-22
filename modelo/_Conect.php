<?php
	Class Conection {

		public function __construct(){
			$host   = "localhost";
			$user   = "root";
			$pass   = "";
			$opc = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				);

				$BD1	= "rfwsmqex_gvsl";
      		$BD2	= "rfwsmqex_gvsl_sys_almacen";

			try {
				$this->mysql1 = new PDO('mysql:host='.$host.';dbname='.$BD1,$user,$pass,$opc);
				$this->mysql1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->mysql2 = new PDO('mysql:host='.$host.';dbname='.$BD2,$user,$pass,$opc);
				$this->mysql2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
				echo "ERROR! ". $e->getMessage();
			}
		}
	}
?>
