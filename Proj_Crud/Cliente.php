<?php

	class Cliente{

		
		public $idCliente;
		public $nomeCliente;
		private $idadeCliente;

		
		public function getIdCliente()
		{
			return $this->idCliente;
		}
		
		public function setIdCliente($idCliente)
		{
			$this->idCliente = $idCliente;
		}
		
		public function getNomeCliente()
		{
			return $this->nomeCliente;
		}
		
		public function setNomeCliente($nomeCliente)
		{
			$this->nomeCliente = $nomeCliente;
		}
		
		public function getIdadeCliente()
		{
			return $this->idadeCliente;
		}
		
		public function setIdadeCliente($idadeCliente)
		{
			$this->idadeCliente = $idadeCliente;
		}
		
		
		public function pegarCiente()
		{
			$op = new Operacoes(); 
			return $op -> ;
		}
	}

