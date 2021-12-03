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
<body class="rental" cz-shortcut-listen="true">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <h2 style="color: #fff;">
      HOSTPET
      </h2>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">
         
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="<?php echo BASE_URL; ?>/autenticacao/login" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1">Login</a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="<?php echo BASE_URL; ?>/autenticacao/cadastro" class="btn btn-sm  bg-gradient-warning  btn-round mb-0 me-1">Registre-se</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- End Navbar -->
  <!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
  <header>
    <div class="page-header min-vh-50" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;); background-position-y: 50%;">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-white text-center">
            <h2 class="text-white">Host Pet: Loucos por Pets</h2>
            <p class="lead">Facilitamos a rotina de quem tem pet através dos nossos serviços</p>
          </div>
        </div>
      </div>
    </div>
    <div class="position-relative overflow-hidden" style="height:36px;margin-top:-33px;">
      <div class="w-full absolute bottom-0 start-0 end-0" style="transform: scale(2);transform-origin: top center;color: #fff;">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
      </div>
    </div>
    <div class="container">
      <div class="row bg-white shadow-lg mt-n6 border-radius-md pb-4 p-3 mx-sm-0 mx-1 position-relative">
        <div class="col-lg-3 mt-lg-n2 mt-2">
          <label class="">Cidade</label>
          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-button" id="choices-button" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1">Brazil</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">Brazil</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--choices-button-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Brazil</div><div id="choices--choices-button-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Bucharest</div><div id="choices--choices-button-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">London</div><div id="choices--choices-button-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">USA</div></div></div></div>
        </div>
        <div class="col-lg-3 mt-lg-n2 mt-2">
          <label class="">Tamanho do Pet</label>
          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" name="choices-remove-button" id="choices-remove-button" hidden="" tabindex="-1" data-choice="active"><option value="Choice 1">Grande</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="null" aria-selected="true">Grande</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--choices-remove-button-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Denmark</div><div id="choices--choices-remove-button-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choice 1" data-select-text="Press to select" data-choice-selectable="">Italy</div><div id="choices--choices-remove-button-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 4" data-select-text="Press to select" data-choice-selectable="">Poland</div><div id="choices--choices-remove-button-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="">Spain</div></div></div></div>
        </div>
        <div class="col-lg-3 mt-lg-n2 mt-2">
          <label class="">Quando</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-calendar" aria-hidden="true"></i></span>
            <input class="form-control datepicker flatpickr-input" placeholder="Please select date" type="text" readonly="readonly">
          </div>
        </div>
        <div class="col-lg-3 mt-lg-n2 mt-2">
          <label class="">&nbsp;</label>
          <button type="button" class="btn bg-gradient-dark w-100 mb-0">Pesquisar</button>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <section class="pt-7 pb-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <img src="<?php echo BASE_URL; ?>/assets/img/baner.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
            <div class="colored-shadow" style="background-image: url(&quot;<?php echo BASE_URL; ?>/assets/img/baner.webp&quot;);"></div></div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-dark mb-2 text-sm">São Paulo > Santana</p>
              <a href="javascript:;">
                <h5>
                2345 avaliações
                </h5>
              </a>
              <p>
                É uma pessoa muito compromissada, sempre que posso deixo meus cachorros com ela.
              </p>
              <button type="button" class="btn btn-outline-primary btn-sm">Disponivel para natal</button>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>


</body>