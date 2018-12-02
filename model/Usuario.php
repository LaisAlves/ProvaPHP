<?php
class Usuario{
	private $nome;
	private $dataNascimento;
	private $endereco;
	private $foto;
	private $idUsuario;
	
	public function getNome(){
		 return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
		
	}	
	
	
	public function getdataNascimento(){
		 return $this->dataNascimento;
	}
	
	public function setdataNascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
		
	}	
	
	
	public function getEndereco(){
		 return $this->endereco;
	}
	
	public function setEndereco($endereco){
		$this->endereco = $endereco;
		
	}	
	public function getFoto(){
		 return $this->foto;
	}
	
	public function setFoto($foto){
		$this->foto = $foto;
		
	}
	
	
}