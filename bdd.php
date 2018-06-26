<?php

class Connexion {
	private static $link = null;
	static public function getLink() {
	    if (self :: $link) {
	        return self :: $link;
	    } else {
		    $servername = 'localhost';
		    $username = 'root';
		    $password = 'root';
		    $dbname = 'Voiture_exo';
		    $charset = 'utf8';
		    $collate = 'utf8_unicode_ci';
		    //$conn = new mysqli($servername, $username, $password, $dbname);
		    $dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";

		    self :: $link = new PDO($dsn, $username, $password);
		    return self :: $link;
		}
	}   

	public static function __callStatic($name, $args) {
	    $callback = array(self :: getLink(), $name);
	    return call_user_func_array($callback, $args);
	}
}

?>