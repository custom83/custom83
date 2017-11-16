<?php
    class DaoListaUser extends ConexaoDb {

        public function __construct() {
        }

        public function getAllUser($query = null) {
          try {
              $query = "SELECT COUNT(*) AS assinantes FROM usuario WHERE assinante = 1 UNION (SELECT COUNT(*) AS nao_assinantes FROM usuario WHERE assinante = 0)";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getAllUserPf($query = null) {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE permissao = 'cpf'";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  // $_SESSION['cont-user-pf'] = $validar->rowCount();
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getAllUserPj($query = null) {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE permissao = 'cnpj'";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  // $_SESSION['cont-user-pj'] = $validar->rowCount();
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getAllUserSimple($query = null) {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE permissao = 'simples'";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getAllUserDesabilite($query = null) {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE status = 0 AND assinante = 1";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getDadosUser($query) {
          try {
              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getUser($query) {
          try {
              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() === 1) {
                  return $validar->fetch(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }
    }
