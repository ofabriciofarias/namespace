<?php

namespace Cliente;

//control barra para mostrar que está pegando da pasta anterior.
class Cadastro extends \Cadastro{

	public function registrarVenda(){
		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}

?>