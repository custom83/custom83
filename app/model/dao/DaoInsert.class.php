<?php
    class DaoInsert extends ConexaoDb {
        private $usuario;
        private $erro;

        public function __construct($usuario) {
            $this->usuario = $usuario;
        }

        public function insertUser() {
            try {
                $query = "INSERT INTO usuario VALUES (default, :nome, :email, :senha, default, default, default, default)";

                $validar = Parent::getInstanceConexao()->prepare($query);
                $validar->bindValue(":nome",$this->usuario->getNome());
                $validar->bindValue(":email",$this->usuario->getEmail());
                $validar->bindValue(":senha",$this->usuario->getPassword());

                if ($validar->execute()) {
                  	return true;
                } else {
                    return false;
                }
            } catch (Exception $ex) {
                return false;
            }
        }
    }
