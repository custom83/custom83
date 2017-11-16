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

    public function register() {
        require_once ('app/view/register.php');
    }

    public function registerPf(){
        require_once ('app/view/registropessoafisica.php');
    }

    public function registerPj(){
        require_once ('app/view/registropessoajuridica.php');
    }

    public function login() {
        require_once ('app/view/autenticacao.php');
        if(isset($_SESSION['erro-email'])) $this->unsetSessionError('erro-email');
    }

    public function admin() {
        // self::listUser("getAllUserSimple");getAllUserPerfil
        $assinantes = self::listUser("getAllUser", "");
        $perfil_s     = self::listUser("getDadosUser", "SELECT COUNT(*) AS perfil_s FROM usuario WHERE perfil = 'Mao de Obra'");
        $perfil_l     = self::listUser("getDadosUser", "SELECT COUNT(*) AS perfil_l FROM usuario WHERE perfil = 'Lojista'");

        require_once ('app/admin/view/dashboard.php');
    }

    public function pessoaFisica() {
        $user_pf = self::listUser("getAllUserPf","");//$list_user->getAllUserPf();
        require_once ('app/admin/view/pessoafisica.php');
    }

    public function pessoaJuridica() {
        $user_pj = self::listUser("getAllUserPj", "");//$list_user->getAllUserPj();
        require_once ('app/admin/view/pessoajuridica.php');
    }

    public function listUserSimple() {
        $user_simple = self::listUser("getAllUserSimple","");
        require_once ('app/admin/view/consultausuario.php');
    }

    public function desabilitados() {
        $user_desable = self::listUser("getAllUserDesabilite","");
        require_once ('app/admin/view/desabilitados.php');
    }

    public function editPessoaFisica($id = null) {
        if (!empty($_GET['usuario'])){
          $id = $_GET['usuario'];
        }
        $user = self::listUser("getUser", "SELECT * FROM usuario WHERE id = {$id}");
        require_once ('app/admin/view/edit-pessoa-fisica.php');
    }

    public function editPessoaJuridica($id = null) {
        if (!empty($_GET['usuario'])){
          $id = $_GET['usuario'];
        }
        $user = self::listUser("getUser", "SELECT * FROM usuario WHERE id = {$id}");

        require_once ('app/admin/view/edit-pessoa-juridica.php');
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
            $usuario->setTipoUser("simples");
            $usuario->setAssinante(0);

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

    public function assinarUser(){
      $user    = $_POST['usuario'];
      $nome       = $_POST['nome'];
      $email      = $_POST['email'];
      $senha      = $_POST['senha'];
      $senhaRepet = $_POST['senhaRepet'];
      $type       = $_POST['type'];
      $celular    = $_POST['celular'];
      $tele_fixo  = $_POST['telefone'];
      $facebook   = $_POST['facebook'];
      $instagram  = $_POST['instagram'];

      //endereco
      $cep       = $_POST['cep'];
      $estado    = $_POST['estado'];
      $cidade    = $_POST['cidade'];
      $bairro    = $_POST['bairro'];
      $endereco  = $_POST['rua'];
      $numero    = $_POST['numero'];

      //dados e categorias
      $categoria = $_POST['categoria'];
      $site      = $_POST['site'];
      $logomarca = "";//$_POST['logomarca'];

      self::$validate = new DataValidator();
      $usuario = Usuario::getInstanceUsuario();

      if($type == 'pf') {
          self::$validate->set('cpf', $_POST['cpf'])->is_required();

          $usuario->setIdentificador($_POST['cpf']);
          $usuario->setTipoUser("cpf");
      } else {
          self::$validate->set('cnpj', $_POST['cnpj'])->is_required();
          self::$validate->set('perfil', $_POST['perfil'])->is_required();
          self::$validate->set('plano', $_POST['plano'])->is_required();

          $usuario->setIdentificador($_POST['cnpj']);
          $usuario->setPerfil($_POST['perfil']);
          $usuario->setPlano($_POST['plano']);
          $usuario->setTipoUser("cnpj");
      }

      self::$validate->set('email', $_POST['email'])->is_required()->is_email();
      self::$validate->set('senha', $_POST['senha'])->is_required();
      self::$validate->set('usuario', $_POST['usuario'])->is_required();
      self::$validate->set('nome', $_POST['nome'])->is_required();
      self::$validate->set('type', $_POST['type'])->is_required();
      self::$validate->set('estado', $_POST['estado'])->is_required();
      self::$validate->set('cidade', $_POST['cidade'])->is_required();
      self::$validate->set('bairro', $_POST['bairro'])->is_required();
      self::$validate->set('rua', $_POST['rua'])->is_required();
      self::$validate->set('categoria', $_POST['categoria'])->is_required();

      if (self::$validate->validate()){
        if($senha == $senhaRepet){
            if(isset($_SESSION['senha'])) $this->unsetSessionError('senha');
            $pwd = Bcrypt::hash($senha);

            $usuario->setNome($nome);
            $usuario->setUsuario($user);
            $usuario->setEmail($email);
            $usuario->setPassword($pwd);
            $usuario->setCategoria($categoria);
            $usuario->setSite($site);
            $usuario->setLogoMarca($logomarca);
            $usuario->setFacebook($facebook);
            $usuario->setInstagram($instagram);

            $tel = Telefone::getInstanceTelefone();
            $tel->setTelefone($tele_fixo);
            $tel->setCelular($celular);

            $usuario->setEstado($estado);
            $usuario->setCidade($cidade);
            $usuario->setBairro($bairro);
            $usuario->setRua($endereco);
            $usuario->setCep($cep);
            $usuario->setNumero($numero);
            $usuario->setAssinante(1);

            $insert = new DaoInsert($usuario, $tel);

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

    public function update(){
      $id         = $_POST['id'];
      $user       = $_POST['usuario'];
      $nome       = $_POST['nome'];
      $email      = $_POST['email'];
      $senha      = $_POST['senha'];
      $type       = $_POST['type'];
      $celular    = $_POST['celular'];
      $telefone   = $_POST['telefone'];
      $facebook   = $_POST['facebook'];
      $instagram  = $_POST['instagram'];
      $data       = $_POST['data_vencimento'];

      //endereco
      $cep       = $_POST['cep'];
      $estado    = $_POST['estado'];
      $cidade    = $_POST['cidade'];
      $bairro    = $_POST['bairro'];
      $endereco  = $_POST['rua'];
      $numero    = $_POST['numero'];

      //dados e categorias
      $categoria = $_POST['categoria'];
      $site      = $_POST['site'];
      $logomarca = "";//$_POST['logomarca'];

      self::$validate = new DataValidator();
      $usuario = Usuario::getInstanceUsuario();

      if($type == 'pf') {
          self::$validate->set('cpf', $_POST['cpf'])->is_required();

          $usuario->setIdentificador($_POST['cpf']);
          $usuario->setTipoUser("cpf");

          $local = "editPessoaFisica";
      } else {
          self::$validate->set('cnpj', $_POST['cnpj'])->is_required();
          self::$validate->set('perfil', $_POST['perfil'])->is_required();
          self::$validate->set('plano', $_POST['plano'])->is_required();

          $usuario->setIdentificador($_POST['cnpj']);
          $usuario->setPerfil($_POST['perfil']);
          $usuario->setPlano($_POST['plano']);
          $usuario->setTipoUser("cnpj");

          $local = "editPessoaJuridica";
      }

      self::$validate->set('email', $_POST['email'])->is_required()->is_email();
      self::$validate->set('senha', $_POST['senha'])->is_required();
      self::$validate->set('usuario', $_POST['usuario'])->is_required();
      self::$validate->set('nome', $_POST['nome'])->is_required();
      self::$validate->set('type', $_POST['type'])->is_required();
      self::$validate->set('estado', $_POST['estado'])->is_required();
      self::$validate->set('cidade', $_POST['cidade'])->is_required();
      self::$validate->set('bairro', $_POST['bairro'])->is_required();
      self::$validate->set('rua', $_POST['rua'])->is_required();
      self::$validate->set('categoria', $_POST['categoria'])->is_required();

      if (self::$validate->validate()){
        if($senha == $senha){
            if(isset($_SESSION['senha'])) $this->unsetSessionError('senha');
            $pwd = Bcrypt::hash($senha);

            $usuario->setNome($nome);
            $usuario->setUsuario($user);
            $usuario->setEmail($email);
            $usuario->setPassword($pwd);
            $usuario->setCategoria($categoria);
            $usuario->setSite($site);
            $usuario->setLogoMarca($logomarca);
            $usuario->setFacebook($facebook);
            $usuario->setInstagram($instagram);
            $usuario->setDataVencimento($data);

            $tel = Telefone::getInstanceTelefone();
            $tel->setTelefone($telefone);
            $tel->setCelular($celular);

            $usuario->setEstado($estado);
            $usuario->setCidade($cidade);
            $usuario->setBairro($bairro);
            $usuario->setRua($endereco);
            $usuario->setCep($cep);
            $usuario->setNumero($numero);
            $usuario->setAssinante(1);

            $insert = new DaoInsert($usuario, $tel);

            if($insert->updateUser($id)){
              if(isset($_SESSION['msg'])) $this->unsetSessionError('msg');
              $_SESSION['msg'] = "Usuario atualizado com sucesso!";
              $this->redirecioneUpdate($local, $id);
              die;
            } else {
              $_SESSION['msg'] = "Erro ao atualizar usuario!";
              $this->redirecioneUpdate($local, $id);
            }
        } else {
          $_SESSION['msg'] = "Senha diferentes!";
          $this->redirecioneUpdate($local, $id);
        }
      } else {
        //ELSE PARA CAMPO INPUT INVALIDO
        $this->getErro();
        $this->redirecioneUpdate($local, $id);
      }
    }

    public function desbloqueioUser(){
        $id = $_POST['id'];
        $stat = ($_POST['status'] == 1)? 0: 1;


        $updateStatus = new DaoInsert(null, null);
        echo $updateStatus->enableDesabloUser($id, $stat);
    }

    protected function listUser($function, $query){
      $list_user = new DaoListaUser();
      return $list_user->$function($query);
    }

    protected function redirecioneUpdate($local, $id){
      self::$local($id);
      die;
    }

    protected function unsetSessionError($campo) {
        unset($_SESSION[$campo]);
    }

    protected function getErro(){
        $array = self::$validate->get_errors();

        foreach ($array as $key => $value) { }

        $_SESSION['senha'] = $key;
    }
}
