<?php

class PagesController {
    private static $PagesController;
    private static $validate;

    function __construct(){
    }

    public static function getPagesController() {
        if (empty(self::$PagesController)) {
            self::$PagesController = new PagesController();
        }
        return self::$PagesController;
    }

    public function login() {
        require_once ('app/view/autenticacao.php');
        if(isset($_SESSION['erro-email'])) $this->unsetSessionError('erro-email');
    }

    public function register() {
        require_once ('app/view/register.php');
    }

    public function admin() {
        $list_user = new DaoListaUser();
        $list = $list_user->getAllUser();

        require_once ('app/admin/view/dashboard.php');
    }

    public function pessoaFisica() {
        $list_user = new DaoListaUser();
        $users = $list_user->getAllUserPf();

        require_once ('app/admin/view/pessoafisica.php');
    }

    public function pessoaJuridica() {
        $list_user = new DaoListaUser();
        $users = $list_user->getAllUserPj();

        // if(isset($_GET['usuario'])){
        //
        // }
        require_once ('app/admin/view/pessoajuridica.php');
    }

    public function listagemUsuarios() {
        // require_once ('app/admin/view/listagem-usuarios.php');
    }

    public function desabilitados() {
        require_once ('app/admin/view/desabilitados.php');
    }

    public function posRegister(){
        require_once ('app/view/pos-register.php');
    }

    public function logoutUser(){
        session_destroy();
        self::unsetSessionError('logado');

        header('Location: /login');
        die;
    }

    public function autenticarUser() {
        self::$validate = new DataValidator();

        self::$validate->set('email', $_POST['email'])->is_required()->is_email();
        self::$validate->set('senha', $_POST['senha'])->is_required();

        if (self::$validate->validate()){
            $login  = Login::getInstanceLogin();

            $login->setEmail($_POST['email']);
            $login->setPassword($_POST['senha']);

            $d_logar = new DaoLogin($login);

            if($d_logar->loginDb()){
                if(isset($_SESSION['erro-email'])) $this->unsetSessionError('erro-email');

                if(isset($_SESSION['type_user']) && $_SESSION['type_user'] == "admin") {
                  if(isset($_SESSION['msg'])) $this->unsetSessionError('msg');
                  header('Location: /dashboard-admin');
                  die;
                } else {
                  $_SESSION['msg'] = "Estamos trabalhando na sua sessão!";
                  header('Location: /pos-register');
                  die;
                }

            } else {
                //ELSE PARA EMAIL OU SENHA INVALIDA
                self::$validate->set($_POST['email'], '')->no_found();
                $this->getErro();
                header('Location: /login');
                die;
            }
        } else {
            //ELSE PARA CAMPO INPUT INVALIDO
            $this->getErro();
            header('Location: /login');
            die;
        }
    }

    public function registrarUser(){
      $nome       = $_POST['nome'];
      $email      = $_POST['email'];
      $senha      = $_POST['senha'];
      $senhaRepet = $_POST['senhaRepet'];

      self::$validate = new DataValidator();

      self::$validate->set('email', $_POST['email'])->is_required()->is_email();
      self::$validate->set('senha', $_POST['senha'])->is_required();
      self::$validate->set('nome', $_POST['nome'])->is_required();
      self::$validate->set('senhaRepet', $_POST['senhaRepet'])->is_required();

      if (self::$validate->validate()){
        if($senha == $senhaRepet){
            if(isset($_SESSION['senha'])) $this->unsetSessionError('senha');
            $pwd = Bcrypt::hash($senha);
            $usuario = Usuario::getInstanceUsuario();

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setPassword($pwd);

            $insert = new DaoInsert($usuario);

            if($insert->insertUser()){
              if(isset($_SESSION['insert'])) $this->unsetSessionError('insert');
              header('Location: /pos-register');
              die;
            } else {
              $_SESSION['insert'] = "Erro ao inserir Usuario, email pode já existi!";
              header('Location: /register');
              die;
            }
        } else {
          $_SESSION['senha'] = "Senhas diferentes!";
          header('Location: /register');
          die;
        }
      } else {
        //ELSE PARA CAMPO INPUT INVALIDO
        $this->getErro();
        header('Location: /register');
        die;
      }

    }

    protected function unsetSessionError($campo) {
        unset($_SESSION[$campo]);
    }

    protected function getErro(){
        $array = self::$validate->get_errors();

        foreach ($array as $key => $value) { }

        $_SESSION['erro-email'] = $key;
    }
}
