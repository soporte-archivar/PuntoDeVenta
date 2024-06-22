<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=monorail.proxy.rlwy.net:11451;dbname=railway",
			            "root",
			            "YkUKmMeNiuiIjKiyvzlNMCmCIYxKudST");

		$link->exec("set names utf8");

		return $link;

	}

}