<?php
  class Gerente extends Funcionario{
    private $login;
    private $senha;

  public function setLogin($login){
    $this->login=$login;
  }
  public function setSenha($login){
    $this->senha=$senha;
  }
  public function bonificacao(){
    return $this->salario * 0.25;
  }
}
?>
