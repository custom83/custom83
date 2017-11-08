<?php
    class DaoInsert extends ConexaoDb {
        private $usuario;
        private $erro;

        public function __construct($usuario) {
            $this->usuario = $usuario;
        }

        public function insertUser() {
            try {
                $query = "INSERT INTO usuario VALUES (default, :usuario, :nome, :email, :senha, :permissao, default, :perfil, :categoria, :plano, :site, :logomarca, :identificador, :assinante, :cep, :estado, :cidade, :bairro, :rua, :numero, default, default)";

                $validar = Parent::getInstanceConexao()->prepare($query);
                $validar->bindValue(":usuario",$this->usuario->getUsuario());
                $validar->bindValue(":nome",$this->usuario->getNome());
                $validar->bindValue(":email",$this->usuario->getEmail());
                $validar->bindValue(":senha",$this->usuario->getPassword());
                $validar->bindValue(":permissao",$this->usuario->getTipoUser());

                $validar->bindValue(":perfil",$this->usuario->getPerfil());
                $validar->bindValue(":categoria",$this->usuario->getCategoria());
                $validar->bindValue(":plano",$this->usuario->getPlano());
                $validar->bindValue(":site",$this->usuario->getSite());
                $validar->bindValue(":logomarca",$this->usuario->getLogoMarca());
                $validar->bindValue(":identificador",$this->usuario->getIdentificador());
                $validar->bindValue(":assinante",$this->usuario->getAssinante());
                $validar->bindValue(":cep",$this->usuario->getCep());
                $validar->bindValue(":estado",$this->usuario->getEstado());
                $validar->bindValue(":cidade",$this->usuario->getCidade());
                $validar->bindValue(":bairro",$this->usuario->getBairro());
                $validar->bindValue(":rua",$this->usuario->getRua());
                $validar->bindValue(":numero",$this->usuario->getNumero());

                if ($validar->execute()) {
                  	return true;
                } else {
                    return false;
                }
            } catch (Exception $ex) {
                die(var_dump($ex->getMessage()));
                return false;
            }
        }
    }
