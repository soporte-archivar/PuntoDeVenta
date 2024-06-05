<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=punto_de_venta",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}