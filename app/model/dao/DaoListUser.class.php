<?php
    class DaoListaUser extends ConexaoDb {

        public function __construct() {
        }

        public function getAllUser($query) {
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
