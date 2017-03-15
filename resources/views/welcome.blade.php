<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/LogoS.png" />
    <title>SIMBit</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- barra de navegacion -->
    <nav class="navbar navbar-inverse bg-faded navbar-fixed-top">
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navSIMBit">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a href="#" class="pull-left"><img src="img/LogoS.png" style="max-width:50px;"></a>
                <!--h4>Conectando tus ideas y tus sueños</h4-->
            </div>
            <div class="collapse navbar-collapse" id="navSIMBit">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#nosotros">Nosotros</a>
                    </li>
                    <li>
                        <a href="#method">Metodologia</a>
                    </li>
                     <li>
                        <a href="#services">Servicios</a>
                    </li>
                    <li>
                        <a href="#contact">Contactenos</a>
                    </li>

                    @if (Route::has('login'))
                        <li>
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <!--a href="{{ url('/register') }}">Register</a-->
                    @endif
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <a href="#"><img src="img/LogoSimbitSin.png" style="max-width:260px;"></a>
                        <!--h1>SIMBit</h1-->
                        <h3>Soluciones Informaticas a la Medida</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/Dytong" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://facebook.com/dayton.garcia" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    <!-- /.Nosotros-->
    <a  name="nosotros"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1>Quienes Somos?</h1>
                    <p>Soluciones Informaticas a la Medida Bit (SIMBit) es un empresa guatemalteca, que busca enforcarse en pequeñas y medianas empresas e introducirlas al mundo tecnologico. Desde el 2016 ha estado creando soluciones innovadoras, promueve el desempeño, el compañerismo, la solidaridad y la productividad tanto nacional como internacional.  </p>
                </div>
            <div class="row">
                <div class="col-md-4">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Vision</h2>
                    <p class="lead">Ser reconocidos como la institución líder y modelo en la efectividad de soluciones, satisfacer a cada cliente con nuestros servicios y productos, buscar constantemente la excelencia.</p>
                </div><!--/.col-xs-6.col-lg-4-->
                <div class="col-md-4">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Mision</h2>
                    <p class="lead ">Brindar soluciones eficaces y eficientes a medianas y pequeñas empresas para contribuir a la competitividad y al desarrollo de las mismas. </p>
                </div><!--/.col-xs-6.col-lg-4-->
                <div class="col-md-4">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Politica de Calidad</h2>
                    <p class="lead">Crecer dia a dia para mejorar las satisfacciones de los clientes durante cada proceso, capacitar a nuestro equipo con tecnologias nuevas y de bajo costo para aportar soluciones que cumplan los requerimientos. </p>
                </div><!--/.col-xs-6.col-lg-4-->
            </div>
        </div>
        <!-- /.container- Nosotros -->

    </div>
    <!-- Page Content -->
<div class="content-section-a" style="background-color: rgba(90, 88, 88, .5);  height: 70px;">
        
    </div>
    <a  name="method"></a>
    <div class="jumbotron" align="Center">
        <h2>Metodologia</h2>
    </div>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Planificacion</h2>
                    <p class="lead">Iniciamos cada proyecto, analizando sus necesidades, observando diversos puntos de vista para mejorar la interaccion con todos los interesados.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Diseño</h2> 
                    <p class="lead">Buscamos la facilidad, la elegancia y la estetica personalizada trabajando conjunto al cliente para el cumpliendo con estandares de calidad, requeridos por cada uno.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Desarrollo</h2>
                    <p class="lead">Contamos con gente capaz de realizar aplicaciones de alta calidad, dispuesta a innovar en cada proyecto, asegurando un cuidadoso control de calidad en cada entrega, dando soporte post entrega, e instalacion directa en el lugar.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/desarrollo.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <!-- inicio de servicios -->
        <a name="services"></a>
        <div class="jumbotron" align="Center">
                    <h2>Nuestros Servicios</h2>
        </div>
        <div class="container">
            <div class="row ">                
                <div class="col-md-4">
                    <div class="boder-Badges">
                        <div class="badges-Border">
                            <i class="fa fa-code fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="section-heading" align="center">Desarrollo de Aplicaciones</h2>
                        <p class="lead">
                            Ponemos a su disposicion diversas soluciones informaticas que le permiten a su empresa, negocio o cualquier de la industria en donde usted se desenvuelva, facilitar y automatizar el proceso ajustando cada solucion a sus necesidades.
                        </p>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                <div class="col-md-4">
                    <div class="boder-Badges">
                        <div class="badges-Border">
                            <i class="fa fa-android fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="section-heading" align="center">Desarrollo de Aplicaciones Moviles</h2>
                        <p class="lead">
                            La necesidad de estar en contacto desde cualquier punto y en cualquier momento hace de nosotros pensemos en soluciones moviles posibilitando la relacion directa del consumidor de sus productos hasta la palma de su mano y creando asi mas posibilidades de consumo en el mercado.                            
                        </p>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                <div class="col-md-4">
                    <div class="boder-Badges">
                        <div class="badges-Border">
                            <i class="fa fa-tasks fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="section-heading" align="center">Outsourcing de desarrollo</h2>
                        <p class="lead">
                             Un servicio enfocado a cubrir especificamente el departamento de IT (Tecnología Informática) servicios como tales como: Backup, Aseosrias, Soporte Help Desk,Servicios Web, Auditorias, Mantenimiento Informatico, Consultorias entre otros.
                        </p>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
            </div>
            <br>
            <br>
            
            <div class="row ">
                <div class="col-md-4">
                    <div class="boder-Badges">
                        <div class="badges-Border">
                            <i class="fa fa-share-alt fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="section-heading" align="center">Consultoria/Tutorias Redes de Computadoras</h2>
                        <p class="lead">
                            Ofrecemos servicios de Consultoria/Tutorias en redes, ademas servicios de configuracion CISCO tales como VTP, Switchin/Routing, Access-List, ASA/PIX, ademas de configuraciones para IP Tables en sistemas LINUX.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boder-Badges">
                        <div class="badges-Border">
                            <i class="fa fa-picture-o fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="section-heading" align="center">Diseño de Paginas Web</h2>
                        <p class="lead">
                            Creamos diseños profesionales, ya que contamos con gente capacitada que se encarga de personamente de investigar a fondo que es lo que usted desea proyectar.
                        </p>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                <!--/.col-xs-6.col-lg-4-->
                <div class="col-md-4">
                    <div class="boder-Badges">
                        <div class="badges-Border">
                            <i class="fa fa-cloud fa-4x"></i>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="section-heading" align="center">Servicios en la Nube</h2>
                        <p class="lead">
                            Ofrecemos servicios completamente en la nube capaces de ser accedidas las 24 horas del dia los 365 dias del año, asi como tambien el gestionamiento total de su informacion que conlleva el alojamiento de sus datos.
                        </p>
                    </div>
                </div>
                <!--/.col-xs-6.col-lg-4-->
                
            </div>
            <!-- /.container- Nosotros -->

        </div>
        <br></br>

        <!-- fin de servicios -->

    <a  name="contact"></a>
    <div class="banner">
        
        <!-- EXTRACT FORM HERE =======> -->
    <div class="container">
      <div id="contact_form" class="row">
        <div class="col-md-12">
          <h2>Contáctenos</h2>
          <form role="form" id="feedbackForm">
            <div class="form-group">
              <label class="control-label" for="name">Nombres *</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca su nombre" />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, escriba su nombre.</span>
            </div>
            
            <div class="form-group">
              <label class="control-label" for="email">Motivo de Contacto*</label>
              <select name="reason" class="form-control">
                <option value="Consulta General">Consulta General</option>
                <option value="Realizar Pedido">Realizar Pedido</option>
                <option value="Informe un problema">Informe un problema</option>
              </select>
              <span class="help-block" style="display: none;">Por favor, introduce una dirección de correo electrónico válida.</span>
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Dirección de Correo Electrónico *</label>
              <div class="input-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Introduzca su correo electrónico" />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, introduzca una dirección de correo electrónico válida.</span>
            </div>
            <div class="form-group">
              <label class="control-label" for="message">Mensaje *</label>
              <div class="input-group">
                <textarea rows="5" cols="30" class="form-control" id="message" name="message" placeholder="Introduzca su mensaje" ></textarea>
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor, introduzca un mensaje.</span>
            </div>
            <img id="captcha" src="library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <a href="#" onclick="document.getElementById('captcha').src = 'library/vender/securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-info btn-sm">Mostrar una imagen diferente</a><br/>
            <div class="form-group" style="margin-top: 10px;">
              <label class="control-label" for="captcha_code">Texto dentro de la Imagen *</label>
              <div class="input-group">
                <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="Por razones de seguridad, por favor ingrese el código que aparece en el cuadro." />
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Por favor introduce el código que aparece en la imagen.</span>
            </div>
            <span class="help-block" style="display: none;">Por favor ingrese el código de la seguridad.</span>
            <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg" data-loading-text="Enviando..." style="display: block; margin-top: 10px;">Enviar comentarios</button>
          </form>
        </div><!--/span-->
      </div><!--/row-->
      <hr>
    </div>

        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">Nosotros</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#method">Metodologia</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contactenos</a>
                        </li>

                    @if (Route::has('login'))
                        <li>
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <!--a href="{{ url('/register') }}">Register</a-->
                    @endif
                        </li>
                    @endif

                    </ul>
                    <div align="center">
                    <p class="copyright text-muted small">Copyright &copy; SIMBit2016. todos los derechos reservados</p>
                    </div>
                 </div>    
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    
</body>
</html>
