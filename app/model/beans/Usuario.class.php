<?php
class Usuario extends Endereco {
  private $nome;
  private $email;
  private $password;
  private $status;
  private $dateCriacao;
  private $dateAtualizacao;
  private $INSTANCE_USARIO = null;

  public function __construct(){ }

  public static function getInstanceUsuario() {
    if (empty($INSTANCE_USARIO)) { $INSTANCE_USARIO = new Usuario(); }
    return $INSTANCE_USARIO;
  }

  public function getNome(){ return $this->nome; }
  public function setNome($nome){ $this->nome = $nome; }

  public function getPassword() { return $this->password; }
  public function setPassword($password) { $this->password = $password; }

  public function getEmail() { return $this->email; }
  public function setEmail($email) { $this->email = $email; }

  public function getStatus(){ return $this->status; }
  public function setStatus($status){ $this->status = $status; }

  public function getDataCriacao(){ return $this->dateCriacao; }
  public function setDataCriacao($dateCriacao){ $this->dateCriacao = $dateCriacao; }

  public function getDataAtualizacao(){ return $this->dateAtualizacao; }
  public function setDataAtualizacao($dateAtualizacao){ $this->dateAtualizacao = $dateAtualizacao; }
}
