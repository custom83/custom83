<?php
    class DaoListaUser extends ConexaoDb {

        public function __construct() {
        }

        public function getAllUser() {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE type = 'cnpj' OR type = 'cpf'";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  $_SESSION['cont-user'] = $validar->rowCount();
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getAllUserPf() {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE type = 'cpf'";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  $_SESSION['cont-user'] = $validar->rowCount();
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

        public function getAllUserPj() {
          try {
              $query = "SELECT id, nome, email, data_register, status FROM usuario WHERE type = 'cnpj'";

              $validar = Parent::getInstanceConexao()->prepare($query);
              $validar->execute();

              if ($validar->rowCount() >= 1) {
                  $_SESSION['cont-user'] = $validar->rowCount();
                  return $validar->fetchAll(PDO::FETCH_ASSOC);
              } else {
                  return false;
              }
          } catch (Exception $ex) {
              return false;
          }
        }

    }
