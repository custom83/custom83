<?php
class Usuario extends Endereco {
  private $nome;
  private $user;
  private $email;
  private $password;
  private $status;
  private $identificador;
  private $categoria;
  private $plano;
  private $perfil;
  private $site;
  private $logo;
  private $tipo_user;
  private $assinante;
  private $dataCriacao;
  private $dataAtualizacao;
  private $INSTANCE_USARIO = null;

  public function __construct(){ }

  public static function getInstanceUsuario() {
    if (empty($INSTANCE_USARIO)) { $INSTANCE_USARIO = new Usuario(); }
    return $INSTANCE_USARIO;
  }

  public function getNome(){ return $this->nome; }
  public function setNome($nome){ $this->nome = $nome; }

  public function getUsuario(){ return $this->user; }
  public function setUsuario($user){ $this->user = $user; }

  public function getPassword() { return $this->password; }
  public function setPassword($password) { $this->password = $password; }

  public function getEmail() { return $this->email; }
  public function setEmail($email) { $this->email = $email; }

  public function getStatus(){ return $this->status; }
  public function setStatus($status){ $this->status = $status; }

  public function getIdentificador(){ return $this->identificador; }
  public function setIdentificador($identificador){ $this->identificador = $identificador; }

  public function getCategoria(){ return $this->categoria; }
  public function setCategoria($categoria){ $this->categoria = $categoria; }

  public function getPlano(){ return $this->plano; }
  public function setPlano($plano){ $this->plano = $plano; }

  public function getPerfil(){ return $this->perfil; }
  public function setPerfil($perfil){ $this->perfil = $perfil; }

  public function getSite(){ return $this->site; }
  public function setSite($site){ $this->site = $site; }

  public function getLogoMarca(){ return $this->logo; }
  public function setLogoMarca($logo){ $this->logo = $logo; }

  public function getAssinante(){ return $this->assinante; }
  public function setAssinante($assinante){ $this->assinante = $assinante; }

  public function getTipoUser(){ return $this->tipo_user; }
  public function setTipoUser($tipo_user){ $this->tipo_user = $tipo_user; }

  public function getDataCriacao(){ return $this->dataCriacao; }
  public function setDataCriacao($dataCriacao){ $this->dataCriacao = $dataCriacao; }

  public function getDataAtualizacao(){ return $this->dataAtualizacao; }
  public function setDataAtualizacao($dataAtualizacao){ $this->dataAtualizacao = $dataAtualizacao; }
}
