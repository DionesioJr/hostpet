<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <div class="container">
    <h1 href="<?php echo BASE_URL; ?>/home" class="navbar-brand" style="color: #fff; font-weight: bold; font-size:24px;"> Host Pet </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Pets</a>
        </li>

      </ul>
      <ul class="navbar-nav flex-row ml-md-auto  d-md-flex">
        <li class="nav-item dropdown">

          <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php

              if (isset($_SESSION['user']['nome'])) {
                echo $_SESSION['user']['nome'];
              }

              ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
            <!-- <a class="dropdown-item" href="<?php echo BASE_URL; ?>/aluno/edite/?id=<?php echo $_SESSION['user']['id']; ?>">Perfil</a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="<?php echo BASE_URL; ?>/login/logout">Sair</a>
            
          </div>
        </li>

      </ul>
    </div>
  </div>
</div>