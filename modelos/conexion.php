<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=monorail.proxy.rlwy.net;dbname=railway",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}