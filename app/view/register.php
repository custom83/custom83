<?php include_once 'app/partlals/header.php'; ?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><img src="app/assets/imgs/logoLow.png"/></a>
  </div>
  <div class="register-box-body">
    <div class="box-header with-border">
      <a href="registropessoafisica"><button type="button" class="btn btn-block btn-danger btn-flat">ASSINE JÁ - PESSOA FÍSICA</button></a><br>
      <a href="registropessoajuridica"><button type="button" class="btn btn-block btn-danger btn-flat">ASSINE JÁ - PESSOA JURÍDICA</button></a>
    </div>
    <p class="login-box-msg">Registre-se</p>
    <?php if(isset($_SESSION['senha-user-s']) || isset($_SESSION['insert-user-s'])){?>
            <div class="alert alert-danger alert-dismissible">
              <h4><i class="icon fa fa-ban"></i>Alerta!</h4><?php if(isset($_SESSION['senha-user-s'])) echo $_SESSION['senha-user-s']; else echo $_SESSION['insert-user-s']; ?>
            </div>
    <?php } ?>
    <form action="register-user" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nome Completo" id="formName" name="nome">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" id="formName" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="senha">
        <span class="glyphicon glyphicon-lock form-control-feedback" id="formSenha"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Redigite a senha" name="senhaRepet">
        <span class="glyphicon glyphicon-log-in form-control-feedback" id="formSenha"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <a href="login">Já sou registrado.</a>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registre-se</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="app/libs/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="app/libs/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="app/libs/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
