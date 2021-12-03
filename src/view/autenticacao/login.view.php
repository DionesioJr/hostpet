<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" id="stylesheetLight"> -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css"> -->

    <!-- JavaScript -->
    <script src="<?php echo BASE_URL; ?>/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Alerta Notificação -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>HOSTPET</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.ico" />

</head>

<body class="sign-up-illustration" cz-shortcut-listen="true">
<?php
  Alert::show();
  ?>
<section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Login</h4>
                <p class="mb-0">Digite seu e-mail e senha para fazer login</p>
              </div>
              <div class="card-body">
              <form action="<?php echo BASE_URL; ?>/autenticacao/autenticateUser" method="POST">
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Lembre de mim</label>
                  </div>
                  <div class="text-center">
                    <input type="submit" value="Entrar" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Não tem conta?
                  <a href="<?php echo BASE_URL; ?>/autenticacao/cadastro" class="text-primary text-gradient font-weight-bold">Criar Conta</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <div class="position-relative">
                  <img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo BASE_URL; ?>/assets/img/illustration/undraw_dog_walking_re_l61p.svg" alt="image">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">Sua jornada começa aqui</h4>
              <p class="text-white">Assim como é necessária uma empresa para sustentar um produto, 
                é necessária você para contribuir com a plataforma.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   
</body>