<?php
    class DaoInsert extends ConexaoDb {
        private $usuario;
        private $telefone;
        private $erro;

        public function __construct($usuario, $tel) {
            $this->usuario = $usuario;
            $this->telefone = $tel;
        }

        public function insertUser() {
            try {
                $query = "INSERT INTO usuario VALUES (default, :usuario, :nome, :email, :senha, :permissao, default, :perfil, :categoria, :plano, :site, :logomarca, :identificador, :assinante, :celular, :telefone, :facebook, :instagram, :data_vencimento, :cep, :estado, :cidade, :bairro, :rua, :numero, default, default)";

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

                $validar->bindValue(":celular",$this->telefone->getCelular());
                $validar->bindValue(":telefone",$this->telefone->getTelefone());
                $validar->bindValue(":facebook",$this->usuario->getFacebook());
                $validar->bindValue(":instagram",$this->usuario->getInstagram());
                $validar->bindValue(":data_vencimento",'00');

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

        public function updateUser($id, $status) {
            try {
                $query = "UPDATE usuario SET usuario = :usuario, nome = :nome, email = :email, senha = :senha, perfil = :perfil, categoria = :categoria, plano = :plano, site = :site, logomarca = :logomarca, identificador = :identificador, assinante = :assinante, celular = :celular, telefone = :telefone, facebook = :facebook, instagram = :instagram, data_vencimento = :data_vencimento, cep = :cep, estado = :estado, cidade = :cidade, bairro = :bairro, rua = :rua, numero = :numero WHERE id = :id";

                $validar = Parent::getInstanceConexao()->prepare($query);
                $validar->bindValue(":id",$id);
                $validar->bindValue(":usuario",$this->usuario->getUsuario());
                $validar->bindValue(":nome",$this->usuario->getNome());
                $validar->bindValue(":email",$this->usuario->getEmail());
                $validar->bindValue(":senha",$this->usuario->getPassword());

                $validar->bindValue(":perfil",$this->usuario->getPerfil());
                $validar->bindValue(":categoria",$this->usuario->getCategoria());
                $validar->bindValue(":plano",$this->usuario->getPlano());
                $validar->bindValue(":site",$this->usuario->getSite());
                $validar->bindValue(":logomarca",$this->usuario->getLogoMarca());
                $validar->bindValue(":identificador",$this->usuario->getIdentificador());
                $validar->bindValue(":assinante",$this->usuario->getAssinante());

                $validar->bindValue(":celular",$this->telefone->getCelular());
                $validar->bindValue(":telefone",$this->telefone->getTelefone());
                $validar->bindValue(":facebook",$this->usuario->getFacebook());
                $validar->bindValue(":instagram",$this->usuario->getInstagram());
                $validar->bindValue(":data_vencimento",$this->usuario->getDataVencimento());

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

        public function enableDesabloUser($id, $status){
          try {
              $query = "UPDATE usuario SET status = :status WHERE id = :id";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->bindValue(":status",$status);
              $validar->bindValue(":id",$id);

              if($validar->execute()){
                return "Sucesso";
              } else {
                return "Erro";
              }
          } catch (Exception $ex) {
              return $ex->getMessage();
          }
        }
    }
