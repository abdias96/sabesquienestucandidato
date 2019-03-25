<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>¿Sabés quién es tu candidato?</title>
    <link rel="shortcut icon" href="img/logo.jpg">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">¿Sabés quién es tu candidato?</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#acerca">Acerda de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Partidos políticos</a>
                </li>
                <!--li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                </li-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <!--div class="intro-lead-in">Bienvenido a nuestra web</div-->
            <div class="intro-heading text-uppercase">Informate sobre los candidatos</div>
            <!--a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a-->
        </div>
    </div>
</header>

<!-- Services -->
<!--section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">E-Commerce</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Responsive Design</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Web Security</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </div>
</section-->

<!-- Services -->
<section id="acerca">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Acerca de este sitio</h2>
                <!--h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3-->
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 comment">
                <!--h4 class="service-heading">E-Commerce</h4-->
                <p class="text-muted" style="text-align: justify;">Como guatemalteco me siento orgulloso de haber nacido en un país tan rico en todo sentido de la palabra.</p>
                <p class="text-muted" style="text-align: justify;">Bienvenido al sitio web en el cual trataré de exponer la información de cada uno de los candidatos postulados a cargos públicos de nuestro país.
                    Otro sitio informativo, ¡que pereza leerlo, blah, blah, blah!</p>
                <p class="text-muted" style="text-align: justify;">Pero el principal motivo por el cual nació este sitio, es porque yo también soy un ciudadano común y corriente como cualquier otro, ciudadano que, como muchos estamos desinformados por cualquier tipo de manipulación de medios. Que directa o indirectamente estamos siendo afectados por la mala administración de nuestros impuestos.
                    A pesar de estar muy orgulloso de ser guatemalteco, no podemos ser indiferentes ante el gran poder que tenemos como ciudadanos para elegir a personas que de verdad quieran que Guatemala sea un país próspero.
                    Es doloroso, porque siendo un país con riquezas naturales únicas, culturas ancestrales muy importantes, suelos fértiles, personas que día a día trabajan y muy duro, tengamos que conformarnos con el capricho y privilegios de algunos y eso nos cuesta a 17 millones de guatemaltecos.
                    Es aún más doloroso saber que Guatemala tiene un aproximado de 59% de pobreza, gran porcentaje de estas personas viven de trabajos informales, la mayoría sin ningún vínculo de protección laboral por parte del estado, tenemos uno de los índices más altos en cuanto impunidad nos referimos. Es doloroso que nuestros niños estén siendo explotados en lugar de estar estudiando, dando lugar a que nuestro nivel de analfabetismo crezca de forma exponencial.
                    Se privatizan ganancias, se socializa la deuda, los corruptos comprando casas con un precio equivalente a 3,000 años de salario mínimo. La corrupción es enorme, hay desvío de gastos públicos de manera ilícita equivalente a miles de millones de quetzales y tristemente va más allá del gobierno: Se suman empresas, instituciones y poderes autónomos.
                    Argumentar que para cambiar al país hace falta ser un buen ciudadano, es como decir que para que la situación de una esposa que es violentada por su marido, tiene que ser buena esposa para que la situación mejore.
                    Quizá la frase: "El cambio está en uno mismo" está mal formulada, porque si eres un buen ciudadano, no eres parte de ningún cambio, pero si no lo eres, eres parte del problema.
                    Te sientes como víctima, aunque te saltas filas, el semáforo, te estacionas donde no debes, te importa un carajo la cultura vial, das soborno a los policías, regateas trabajos manuales, debes al banco y a tus amigos y no quieres pagar, compras cosas robadas porque son mas baratas, ves correcto el concepto de robarle a empresas transnacionales, le das trabajo a tu amigo por puro nepotismo, eres clasista, machista, etc. Tiras basura, maltratas animales, piensas que el que no tranza no avanza. Aún así ¿crees que el cambio no está en uno mismo? digamos que, no tirar basura, no saltarse el semáforo, ser responsable; no nos hará un mejor país, todo esto sirve para TENER un país. Es lo mínimo aceptable y estamos por debajo.
                    Debes dejar de hacer análisis un tanto mediocres he informarte, ver memes en redes sociales no es información. Votar no es lo único que se puede hacer por Guatemala, de hecho es lo mínimo, tu trabajo como ciudadano no termina cuando acaban las elecciones, no estar de acuerdo con reformas que aprueban y alegar por internet con hashtags NO es participar en la democracia.
                    ¿Sabes quién es el diputado de tu distrito y cómo contactarlo? No puedes esperar a que un gobierno represente tus necesidades, si no sabes como comunicárselas. No digo que el gobierno sea una belleza, pero claramente es el espejo de lo que nosotros hemos dejado que pase.
                    ¿Cuántas veces hemos evitado hablar de política, porque creemos que no nos corresponde?</p>
                <p class="text-muted" style="text-align: justify;">El precio de las tortillas nos compete tanto como los marcadores del fútbol nacional. No te quejes de las manifestaciones, si no sabes ni qué se está pidiendo. Y no, no estoy diciendo que tienes que ir a marchar o aceptar que personas manchen el centro histórico, hay que entender que manifestar, no es sinónimo de desorden público. Tienes que aprender a ser un ciudadano de tiempo completo, no solo en estas "fiebres electorales".
                    No se trata de cambiar de dueño, se trata de dejar de ser los perros. Hay que tener disciplina, porque las cosas no se cambian de la noche a la mañana, educarnos para hacer preguntas en lugar de aceptar respuestas.
                    Si, da impotencia que tengamos que hacer de más sólo porque históricamente nos han desangrado unos pocos; pero si no quieres aceptar, que para salir del lodo tienes que ensuciarte y empujar, solo eres un persona que se queja en la comodidad de su conformismo. ¿El cambio está en uno? Solo si quieres dejar de hacer lo mínimo; solo si quieres dejar de abrazar el papel de victima. Espero que sí.
                    Es fácil estar detrás de una computadora describiendo el sentimiento doloroso y triste de cómo está la situación, a comparación de otros que arriesgan hasta su vida por un mejor país. Pero que quede claro que estoy haciendo esto porque como informático, dedicarle tiempo a un sitio sin ánimos de lucro es como yo considero que puedo ayudar.
                    Muchos quieren que estemos desinformados, pero hoy en día con toda la tecnología, es muy fácil acceder a cualquier tipo de información, pero como sabrán: No toda la información es objetiva ni verídica.
                    Por eso amigos míos en los próximos comicios, no vendamos nuestro voto por láminas (sólo es un ejemplo),  que luego harán que nuestro pueblo quede en la miseria.
                    Estamos ante una de las oportunidades más grandes de poder crecer como país, de poder cambiar el futuro de nuestro pueblo, no seamos indiferentes, debemos pensar como pueblo, no nos dividamos en bandos, aprendamos a debatir ideas sin ofender, en internet es muy fácil ofender cuando no hay consecuencias, pero todos somos un pueblo que lucha por uno mismo y por los nuestros.
                    Es muy importante saber que, solo un presidente no puede hacer el cambio, tenemos que aprender a conocer a los candidatos del congreso, cuáles han sido sus intereses desde que iniciaron en la política, tenemos que aprender que todo este cambio tiene que ser orquestado por nosotros mismos, aprender a ser mejores personas, como guatemaltecos nos gusta evadir reglas,  y eso ha creado una cultura que ya no cree en ninguna autoridad, no seamos anarquistas individuales.
                    Si llegaste hasta acá leyendo todo esto ¡gracias!</p>
                <p class="text-muted" style="text-align: justify;">Espero que esta información te ayude a crear un criterio válido conforme a tus creencias de quien sí merezca ejercer un puesto de funcionario en el futuro.
                    Lamento que mi redacción no sea tan sofisticada, pero he de aclarar que todo esto lo estoy escribiendo de la forma más práctica, porque es así como nacen mis ideas.
                    No estoy ligado a ningún partido político, entendamos que no se trata de ser de izquierda o derecha, se trata de nuestro futuro como país.
                    Si mi introducción generó algún tipo molestia, recuerda que todos estamos en el derecho de opinar y pido disculpas si en algún momento generalicé a todos, en ningún momento mi intención es juzgar, solo puse ejemplos para que tomemos conciencia de como nos hemos portado como ciudadanos.

                    PD. Puedes invitar a un café si quieres. :)</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Partidos políticos</h2>
                <!--h3 class="section-subheading text-muted">Clickea encima para ver la información.</h3-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/avanza.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/avanza.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Avanza</h4>
                    <!--p class="text-muted">Avanza</p-->
                </div>
            </div>
            <!--div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/bienestar.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Bienestar Nacional</h4>
                </div>
            </div-->
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/convergencia.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/convergencia.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Convergencia</h4>
                    <!--p class="text-muted">Identity</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/creo.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/creo.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Creo</h4>
                    <!--p class="text-muted">Branding</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/encuentro.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/encuentro.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Encuentro</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/fcn.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/fcn.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>FCN</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/fuerza.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/fuerza.PNG" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Fuerza</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/humanista.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/humanista.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Humanista</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/libre.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/libre.PNG" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Libre</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/mlp.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/mlp.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>MLP</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <!--div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/podemos.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Podemos</h4>
                </div>
            </div-->
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/pan.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/pan.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>PAN</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <!--div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/plg.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>PLG</h4>
                </div>
            </div-->
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/ppt.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/ppt.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>PPT</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/prosperidad.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/prosperidad.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Prosperidad</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/semilla.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/semilla.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Semilla</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/todos.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/todos.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Todos</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/ucn.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/ucn.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>UCN</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/une.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/une.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>UNE</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/unidos.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/unidos.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Unidos</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/unionista.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/unionista.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Unionista</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/urng.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/urng.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>URNG</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/valor.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/valor.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Valor</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/vamos.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/vamos.PNG" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Vamos</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/victoria.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/victoria.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Victoria</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/viva.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/viva.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Viva</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
            <div class="col-md-3 col-sm-4 portfolio-item">
                <a class="portfolio-link text-center" href="partidos/winaq.php">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="img/partidos/winaq.png" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Winaq</h4>
                    <!--p class="text-muted">Website Design</p-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<!--section-- class="bg-light" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Threads</h4>
          <p class="text-muted">Illustration</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Explore</h4>
          <p class="text-muted">Graphic Design</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Finish</h4>
          <p class="text-muted">Identity</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Lines</h4>
          <p class="text-muted">Branding</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Southwest</h4>
          <p class="text-muted">Website Design</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h4>Window</h4>
          <p class="text-muted">Photography</p>
        </div>
      </div>
    </div>
  </div>
</section-->

<!-- About -->
<!--section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">An Agency is Born</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2012</h4>
                <h4 class="subheading">Transition to Full Service</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>July 2014</h4>
                <h4 class="subheading">Phase Two Expansion</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section-->

<!-- Team -->
<!--section class="bg-light" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
          <h4>Kay Garland</h4>
          <p class="text-muted">Lead Designer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
          <h4>Larry Parker</h4>
          <p class="text-muted">Lead Marketer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
          <h4>Diana Pertersen</h4>
          <p class="text-muted">Lead Developer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>
  </div>
</section-->

<!-- Clients -->
<!--section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
        </a>
      </div>
    </div>
  </div>
</section-->

<!-- Contact -->
<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contactame</h2>
                <h3 class="section-subheading text-muted">Cualquier crítica, comentario o ayuda es bienvenida.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nombre completo *" required="required" data-validation-required-message="Por favor ingrese su nombre.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Correo electrónico *" required="required" data-validation-required-message="Por favor ingrese su correo electrónico.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Número telefónico *" required="required" data-validation-required-message="Por favor ingrese su número telefónico.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Por favor ingrese su mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Derechos reservados &copy; Abdias 2019</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/ab_dias7" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/abdias.munoz.1" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/in/abdias-magdiel-mu%C3%B1oz-v%C3%A1squez-65791963/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <!--ul class="list-inline quicklinks">
                  <li class="list-inline-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">Terms of Use</a>
                  </li>
                </ul-->
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->

<!-- Modal 1 -->
<!--div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Threads</li>
                                <li>Category: Illustration</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Explore</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Finish</li>
                                <li>Category: Identity</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Lines</li>
                                <li>Category: Branding</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Southwest</li>
                                <li>Category: Website Design</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Window</li>
                                <li>Category: Photography</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div-->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>

</body>

<script language="javascript">
    $(document).ready(function() {
        $(".comment").shorten();
    });

    $.fn.shorten = function(settings) {
        "use strict";

        var config = {
            showChars: 2000,
            minHideChars: 10,
            ellipsesText: "...",
            moreText: "Leer más...",
            lessText: "Ver menos",
            onLess: function() {},
            onMore: function() {},
            errMsg: null,
            force: false
        };

        if (settings) {
            $.extend(config, settings);
        }

        if ($(this).data('jquery.shorten') && !config.force) {
            return false;
        }
        $(this).data('jquery.shorten', true);

        $(document).off("click", '.morelink');

        $(document).on({
            click: function() {

                var $this = $(this);
                if ($this.hasClass('less')) {
                    $this.removeClass('less');
                    $this.html(config.moreText);
                    $this.parent().prev().animate({'height':'0'+'%'}, function () { $this.parent().prev().prev().show(); }).hide('fast', function() {
                        config.onLess();
                    });

                } else {
                    $this.addClass('less');
                    $this.html(config.lessText);
                    $this.parent().prev().animate({'height':'100'+'%'}, function () { $this.parent().prev().prev().hide(); }).show('fast', function() {
                        config.onMore();
                    });
                }
                return false;
            }
        }, '.morelink');

        return this.each(function() {
            var $this = $(this);

            var content = $this.html();
            var contentlen = $this.text().length;
            if (contentlen > config.showChars + config.minHideChars) {
                var c = content.substr(0, config.showChars);
                if (c.indexOf('<') >= 0) // If there's HTML don't want to cut it
                {
                    var inTag = false; // I'm in a tag?
                    var bag = ''; // Put the characters to be shown here
                    var countChars = 0; // Current bag size
                    var openTags = []; // Stack for opened tags, so I can close them later
                    var tagName = null;

                    for (var i = 0, r = 0; r <= config.showChars; i++) {
                        if (content[i] == '<' && !inTag) {
                            inTag = true;

                            // This could be "tag" or "/tag"
                            tagName = content.substring(i + 1, content.indexOf('>', i));

                            // If its a closing tag
                            if (tagName[0] == '/') {


                                if (tagName != '/' + openTags[0]) {
                                    config.errMsg = 'ERROR en HTML: the top of the stack should be the tag that closes';
                                } else {
                                    openTags.shift(); // Pops the last tag from the open tag stack (the tag is closed in the retult HTML!)
                                }

                            } else {
                                // There are some nasty tags that don't have a close tag like <br/>
                                if (tagName.toLowerCase() != 'br') {
                                    openTags.unshift(tagName); // Add to start the name of the tag that opens
                                }
                            }
                        }
                        if (inTag && content[i] == '>') {
                            inTag = false;
                        }

                        if (inTag) { bag += content.charAt(i); } // Add tag name chars to the result
                        else {
                            r++;
                            if (countChars <= config.showChars) {
                                bag += content.charAt(i); // Fix to ie 7 not allowing you to reference string characters using the []
                                countChars++;
                            } else // Now I have the characters needed
                            {
                                if (openTags.length > 0) // I have unclosed tags
                                {
                                    //console.log('They were open tags');
                                    //console.log(openTags);
                                    for (j = 0; j < openTags.length; j++) {
                                        //console.log('Cierro tag ' + openTags[j]);
                                        bag += '</' + openTags[j] + '>'; // Close all tags that were opened

                                        // You could shift the tag from the stack to check if you end with an empty stack, that means you have closed all open tags
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    c = $('<div/>').html(bag + '<span class="ellip">' + config.ellipsesText + '</span>').html();
                }else{
                    c+=config.ellipsesText;
                }

                var html = '<div class="shortcontent">' + c +
                    '</div><div class="allcontent">' + content +
                    '</div><span><a href="javascript://nop/" class="morelink">' + config.moreText + '</a></span>';

                $this.html(html);
                $this.find(".allcontent").hide(); // Hide all text
                $('.shortcontent p:last', $this).css('margin-bottom', 0); //Remove bottom margin on last paragraph as it's likely shortened
            }
        });

    };
</script>
</html>
