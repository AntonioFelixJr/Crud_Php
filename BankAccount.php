<?php

	class BankAccount{
		
		public function __construct(){
			$this->setStatus(false);
			$this->setBalance(0);
		}
		
		public $numAccount;
		protected $type;
		private $proprietor;
		private $balance;
		private $status;
		
		public function getNumAccount()
		{
			return $this->numAccount;
		}
		
		public function setNumAccount($numAccount)
		{
			$this->numAccount = $numAccount;
		}
		
		public function getType()
		{
			return $this->type;
		}
		
		public function setType($type)
		{
			$this->type = $type;
		}
		
		public function getProprietor()
		{
			return $this->proprietor;
		}
		
		public function setProprietor($proprietor)
		{
			$this->proprietor = $proprietor;
		}
		public function getBalance()
		{
			return $this->balance;
		}
		
		public function setBalance($balance)
		{
			$this->balance = $balance;
		}
		
		public function getStatus()
		{
			return $this->status;
		}
		
		public function setStatus($status)
		{
			$this->status = $status;
		}
		
		public function openAccount()
		{
			$v = 0;
			if ($this->getType() == "cc"){
					$v = 50.0;
					echo "<p>Esta é uma conta corrente.</p>";
			}				
			if ($this->getType() == "cp"){
					$v = 150.0;
					echo "<p>Esta é uma conta poupança.</p>";
			}
			$this->setBalance($this->getBalance()+ $v);
			$this->setStatus(true);
			return "<br> Bem-vindo Sr(a)".$this->getProprietor().", R$".$v." foram adicionados á sua conta. <br> Total: R$".$this->getBalance()."</p>";
		
			//type da conta CC= conta corrente e CP= conta poupança
			
		
		}
		public function closeAccount()
		{
			if ($this->getBalance() == 0 && $this->getStatus() == true){
				$this->setStatus(false);
				return "Conta fechada com sucesso. ";
			}
		}
		
		public function deposit($deposit)
		{
			if ($this->getStatus() == true){
				$this->setBalance($this->getBalance() + $deposit);
				return "<p>Deposito de R$".$deposit." efetuado com sucesso. <br><h4><font color='green'>saldo atual: R$".$this->getBalance()."</font></h4></p>";
			}
			
		}
		
		public function draw($loot)
		{
			if ($this->getBalance() >= $loot && $this->getStatus() == true){
				$this->setBalance($this->getBalance() - $loot);
				return "<p>Saque de R$".$loot." efetuado com sucesso. <br><h4><font color='green'>saldo atual: R$".$this->getBalance()."</font></h4></p>";
			}else
				return "<p>saldo insuficiente.<br><h4><font color='green'>saldo atual R$".$this->getBalance()."</font></h4> </p>";
		}
		
		public function payMonthly()
		{
			switch ($this->getType()){
				
				case "cc":
					$this->setBalance($this->getBalance() - 12.0);
					return "<p><h4> Mensalidade bancaria <br> <font color='red'>Total pago R$12,00</font><font color='green'> <br> Total de saldo: R$".$this->getBalance()."</h4></font></p>";
					break;
					
				case "cp":
					$this->setBalance($this->getBalance() - 20.0);
					return "<p><h4> Mensalidade bancaria <br> <font color='red'>Total pago R$20,00</font><font color='green'> <br> Total de saldo: R$".$this->getBalance()."</h4></font></p>";
					break;
			}
		}
	}

