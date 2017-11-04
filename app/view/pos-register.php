<?php include_once 'app/partlals/header.php'; ?>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="login"><img src="app/assets/imgs/logoLow.png"/></a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg"><?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; else echo "Regitro realizado com sucesso"; ?></p>
  </div>
</div>
</body>
</html>
