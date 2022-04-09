<?php
  $f=new Funcionario();
  $f->setNome("João");
  $f->setCPF("123.456.789-10");
  $f->setData_Nascimento("25/02/2003");
  $f->setSalario("R$4000");

  $g=new Gerente();
  $g->setNome("Napoleão");
  $g->setCPF("374.857.373-34");
  $g->setData_Nascimento("31/12/1900");
  $g->setSalario("R$6000");
  $g->setLogin("napoleao");
  $g->setSenha("bonaparte");

  $s=new Secretaria();
  $s->setNome("Ana");
  $s->setCPF("984.982.662-74");
  $s->setData_Nascimento("07/01/1999");
  $s->setSalario("R$2000");
  $s->setRamal("42");
?>
