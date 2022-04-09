<?php
  class Secretaria extends Funcionario{
    private $ramal;

  public function setRamal($numero){
    $this->ramal=$numero;
  }
  public function getRamal(){
    return $ramal;
  }
  public function bonificacao(){
    return $this->salario * 0.15;
  }
}
?>
