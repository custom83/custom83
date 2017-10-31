<?php include_once 'app/view/partlals/header.php'; ?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><img src="app/assets/imgs/logoLow.png"/></a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Acesse o sistema</p>
    <?php if(isset($_SESSION['erro-email'])){?><div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
              <h4><i class="icon fa fa-ban"></i>Alerta!</h4>Email ou senha inválida</div>
    <?php } ?>
    <div id="nome-erro"><?php if(isset($_SESSION['erro-email'])) echo $_SESSION['erro-email'];?></div>
    <form action="autenticar" method="post" id="formLog">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" id="email" name="email" autofocus maxlength="100" required="" value="<?php  if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" width="48" height="48">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" id="senha"  name="senha" maxlength="60" required="" value="<?php  if(isset($_POST['senha'])) echo htmlspecialchars($_POST['senha']); ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback" id="formSenha" name="senha"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
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
