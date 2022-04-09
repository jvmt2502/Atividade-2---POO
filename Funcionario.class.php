<?php
/*João Victor de Melo Tavares - SI - 3° Semestre*/
  class Funcionario{
    private $nome;
    private $CPF;
    private $data_nascimento;
    private $salario;

  public function setNome($nome){
    $this->$nome=$nome;
  }
  public function setCPF($CPF){
    $this->$CPF=$CPF;
  }
  public function setData_Nascimento($data_nascimento){
    $this->$data_nascimento=$data_nascimento;
  }
  public function setSalario($salario){
    $this->$salario=$salario;
  }
  public function getNome($nome){
    return $this->nome;
  }
  public function getCPF($CPF){
    return $this->CPF;
  }
  public function getDta_Nascimento($data_nascimento){
    return $this->data_nascimento;
  }
  public function getSalario($salario){
    return $this->salario;
  }
  public function bonificacao(){
    return $this->salario * 0.10;
  }

}
?>
