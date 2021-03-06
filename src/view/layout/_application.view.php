<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" id="stylesheetLight">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css"> -->

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

<body cz-shortcut-listen="true">


  <!-- SIDEBAR
    ================================================== -->
  <?php include_once '_navigationtop.php'; ?>

  <!-- CONTAINER
    ================================================== -->
  <div class="container">
    <?php
    Alert::show();
    new LoadingView($view, $data);
    ?>
    <!-- FOOTER
    ================================================== -->
    <?php include_once '_footer.php'; ?>
  </div>




  <!-- JAVASCRIPT
    ================================================== -->

  <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>