<?php
class Arma {
	private $id;
	private $nome;
	private $weapon;
	private $categoria;
	private $calibre;
	private $pais;
	
	public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
		return $this;
	}
}?>