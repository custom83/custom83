<?php

class Telefone {
  private $telefone = "";
  private $INSTANCE_TELEFONE = null;
  private $celular = "";

  public function __construct(){}

  public static function getInstanceTelefone() {
    if (empty($INSTANCE_TELEFONE)) { $INSTANCE_TELEFONE = new Telefone(); }
    return $INSTANCE_TELEFONE;
  }

  public function getTelefone(){ return $this->telefone; }
  public function setTelefone($telefone){ $this->telefone = $telefone; }

  public function getCelular(){ return $this->celular; }
  public function setCelular($celular){ $this->celular = $celular; }
}
