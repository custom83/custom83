<?php include_once 'app/partlals/header.php'; ?>
  <body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="register"><img src="app/assets/imgs/logoLow.png"/></a>
    </div>
    <div class="register-box-body"  >
      <form action="assinante" method="post">
        <input type="hidden" name="type" value="pj">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="myTabs">
          <li role="presentation" class="active"><a href="#conta" aria-controls="conta" role="tab" data-toggle="tab" aria-expanded="true">Conta</a></li>
          <li role="presentation"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab" aria-expanded="false">Endereço</a></li>
          <li role="presentation"><a href="#contatos" aria-controls="contatos" role="tab" data-toggle="tab" aria-expanded="false">Redes e Contatos</a></li>
          <li role="presentation"><a href="#categoria" aria-controls="categoria" role="tab" data-toggle="tab" aria-expanded="false">Categoria e Dados</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div role="tabpanel" class="tab-pane active" id="conta">
            <div class="form-group">
                <label for="nameUser">Usuario</label>
                <input class="form-control" id="nameUser" placeholder="Usuário" type="text" name="usuario" required="">
            </div>
            <div class="form-group">
                <label for="formRazaoSocial">Razão Social</label>
                <input class="form-control" id="formRazaoSocial" placeholder="Razão Social" type="text" name="nome" required="">
            </div>
            <div class="form-group">
                <label for="formCnpj">CNPJ</label>
                <input class="form-control" id="formCnpj" placeholder="CNPJ" type="text" name="cnpj" required="">
            </div>
            <div class="form-group has-feedback">
              <label for="formName">Email</label>
              <input type="email" class="form-control" placeholder="Email" id="formName" name="email" required="">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group">
                <label for="formPassword">Senha</label>
                <input class="form-control" id="formPassword" placeholder="Senha" type="password" name="senha" required="">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar senha</label>
                <input class="form-control" id="confirmPassword" placeholder="Confirmar senha" type="password" name="senhaRepet" required="">
            </div>
            <button type="button" class="btn btn-primary" onclick="tabEnd()">Avançar</button>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="endereco">
            <div class="form-group">
                <label for="formCep">Cep</label>
                <input class="form-control" id="formCep" placeholder="Cep" type="text" name="cep">
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select class="form-control" name="estado" required="">
                    <option value="Paraíba">Paraíba</option>
                </select>
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <select class="form-control" name="cidade" required="">
                    <option value="João Pessoa">João Pessoa</option> </select>
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <select class="form-control" name="bairro">
                    <option value="Torre">Torre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formEnd">Endereço</label>
                <input class="form-control" id="formEnd" placeholder="Endereço" type="text" name="rua" required="">
            </div>
            <div class="form-group">
                <label for="formNumero">Número</label>
                <input class="form-control" id="formNumero" placeholder="Número" type="text" name="numero">
            </div>
            <div class="row">
              <button type="button" class="btn btn-default" onclick="tabConta()">Voltar</button>
              <button type="button" class="btn btn-primary pull-right" onclick="tabContatos()">Avançar</button>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="contatos">
            <div class="form-group">
                <label for="formTelFixo">Telefone Fixo</label>
                <input class="form-control" id="formTelFixo" placeholder="Informe o contato telefônico" type="text" name="telefone">
            </div>
            <div class="form-group">
                <label for="formTelCel">Celular</label>
                <input class="form-control" id="formTelCel" placeholder="Informe o número do seu celular" type="text" name="celular">
            </div>
            <div class="form-group">
                <label for="formSite">Site</label>
                <input class="form-control" id="formSite" placeholder="Site" type="text" name="site">
            </div>
            <div class="form-group">
                <label for="formFacebook">Facebook</label>
                <input class="form-control" id="formFacebook" placeholder="Informe o endereço da sua página" type="text" name="facebook">
            </div>
            <div class="form-group">
                <label for="formInstagram">Instragram</label>
                <input class="form-control" id="formInstagram" placeholder="Informe o endereço da sua página" type="text" name="instagram">
            </div>
            <div class="form-group">
                <label for="fomrLogo">Logomarca</label>
                <input id="fomrLogo" type="file" name="logomarca">
            </div>
            <div class="row">
              <button type="button" class="btn btn-default" onclick="tabEnd()">Voltar</button>
              <button type="button" class="btn btn-primary pull-right" onclick="tabCategory()">Avançar</button>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="categoria">
            <div class="form-group">
                <label>Perfil</label>
                  <select class="form-control" name="perfil" required="">
                      <option value="Lojista">Lojista</option>
                      <option value="Mão de Obra">Mão de obra</option>
                </select>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                  <select class="form-control" name="categoria" required="">
                      <option value="Pintor">Pintor</option>
                      <option value="Funileiro">Funileiro</option>
                      <option value="Mecânico">Mecanico</option>
                </select>
            </div>
            <div class="form-group">
                <label>Plano</label>
                  <select class="form-control" name="plano" required="">
                      <option value="Básico">Básico</option>
                      <option value="Intermediario">Intermediario</option>
                      <option value="Completo">Completo</option>
                </select>
            </div>
            <div class="row">
              <button type="button" class="btn btn-default" onclick="tabEnd()">Voltar</button>
              <input class="btn btn-primary pull-right" type="submit" value="Finalizar">
            </div>
          </div>
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

    function tabConta(){
      $('#myTabs a[href="#conta"]').tab('show')
    }

    function tabEnd(){
      $('#myTabs a[href="#endereco"]').tab('show')
    }
    function tabContatos(){
      $('#myTabs a[href="#contatos"]').tab('show')
    }
    function tabCategory(){
      $('#myTabs a[href="#categoria"]').tab('show')
    }
  </script>
  </body>
  </html>
