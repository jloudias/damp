
  <!DOCTYPE html>
  <html lang="pt-BR">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="Residencial Maison Dampege">
      <meta name="author" content="Jorge Dias">
      <link rel="icon" href="../../favicon.ico">
  
      <title>Residencial Maison D'Ampége</title>
  
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
  
      <!-- Custom styles for this template -->
      <link href="css/sticky-footer-navbar.css" rel="stylesheet">
      <link rel="stylesheet" href="css/carousel.css">
  
      <!-- My custom styles -->
      <link rel="stylesheet" href="css/datepicker.css">
      <link rel="stylesheet" href="css/custom.css">
  
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
  
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="js/ie-emulation-modes-warning.js"></script>
  
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  
      <!-- jQuery and plugins -->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="js/jquery.maskedinput.js"> </script> <!-- mask field plugin -->
  
    </head>
  
    <body>
        <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top ">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php" title="Início">Maison D'Ampége </a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">Início</a></li>
              <li><a href="ocorrencia.php">Ocorrências</a></li>
              <li><a href="http://goo.gl/forms/47JbIwK2q6" target="_blank">Reservas</a></li>
              <li><a href="blog.php">Notíciais</a></li>
              <li><a href="biblioteca.php">Biblioteca</a></li>
                
              
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="ins_post.php">Postagem</a></li>
                      <li><a href="dsp_ocorrencia.php">Ocorrências</a></li>               
                      <li><a href="historico.php">Histórico</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="condominos.php">Usuários</a></li>
                    </ul>
                  </li>
                           <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user"> </span>
                Jorge<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="senha.php">Trocar senha</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="contato.php">Fale conosco</a></li> 
                  <li><a href="faq.php">Perguntas frequentes</a></li>              
                  <li role="separator" class="divider"></li>
                  <li><a href="cmt_logout.php">Sair</a></li>
                </ul>
              </li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <!-- End header.inc -->
      <!-- Begin page content --> 
      <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="images/zika.jpg"  alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Todos contra a dengue</h1>
                <p>Ajude a prevenir a proliferação da doença no nosso condomínio.</p>
                <p><a class="btn btn-lg btn-primary" href="files/cartaz-dengue.pdf" target="_blank" role="button">Ler Dicas</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="images/slide_ocorrencia.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Livro de Ocorrências</h1>
                <p>Utilize-o para registrar suas reclamações, sugestões e todo tipo de situação no condomínio.</p>
                <p><a class="btn btn-lg btn-primary" href="ocorrencia.php" role="button">Registrar Ocorrência</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="images/assembleia.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Ata da Reunião de Condomínio</h1>
                <p>Confira as decisões tomadas pela Assembleia Geral ORDINÁRIA na reunião do dia 30 de janeiro de 2017.</p>
                <p><a class="btn btn-lg btn-primary" href="biblio/atas/ata-ago-20170130.pdf" role="button" target="_blank">Ler Ata</a></p>
              </div>
            </div>
          </div>
  
          <div class="item">
            <img class="fourth-slide" src="images/slide_senha.jpg" alt="Fourth slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Troque sua senha.</h1>
                <p>Garanta sua privacidade trocando periodicamente a senha de acesso. </p>
                <p><a class="btn btn-lg btn-primary" href="senha.php" role="button">Trocar Senha</a></p>
              </div>
            </div>
          </div>
  
         <div class="item">
            <img class="fifth-slide" src="images/slide1.jpg" alt="Fifth slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Opiniões e Dúvidas</h1>
                <p>Ajude-nos a melhorar o site enviando suas sugestões, críticas ou elogios. Tem alguma dúvida? Fale conosco. É só clicar no botão abaixo. Responderemos na primeira oportunidade.</p>
                <p><a class="btn btn-lg btn-primary" href="contato.php" role="button">Fale Conosco</a></p>
              </div>
            </div>
          </div>
  
  
      
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->
  
     
          <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        <h2>Balanço Geral</h2>
        <hr>
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <span class="fa fa-money" style="font-size: 7em"></span>
            <h3>Finanças</h3>
            <p>Resumo do movimento financeiro do condomínio referente as taxas ordinárias e extras. Os documentos originais encontram-se à disposição dos condôminos na Sala do Síndico, no Mezanino.</p>
            <p><a class="btn btn-default" href="biblio/financas/mes.pdf" target="_blank" role="button">Ver detalhes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 col-md-4">
            <span class="fa fa-check-square-o" style="font-size: 7em"></span>
            <h3>Relatório 2016</h3>
            <p>Relatório das contas e atividades realizadas no ano de 2016, inclusive as não-orçamentárias, eventos sociais, reuniões, ocorrências importantes e recomendações aos condôminos.</p>
            <p><a class="btn btn-default" href="biblio/financas/rel-2016.pdf" role="button">Ver detalhes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4 col-md-4">
            <span class="fa fa-road" style="font-size: 7em"></span>
            <h3>Previsões</h3>
            <p>Obras e atividades previstas para os próximos dias e possíveis implicações para os condôminos. Por favor, informe ao Síndico qualquer fato que determine o adiamento ou suspensão dos eventos previstos. </p>
            <p><a class="btn btn-default" href="agendamanut.php" role="button">Ver detalhes &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- end container marketing -->
      <!-- Quem somos -->
      <div id="quem-somos" class="container marketing">
       <!-- <img src="images/login_logo.png" alt="logo"> -->
        <h2>
          <span class="fa fa-users" style="font-size: 3em"></span><br><br>
          Quem &nbsp;Somos
        </h2>
        <hr>
          <div class="row">
  <div class="col-md-3"><a href='mailto:harlandaraujo@bol.com.br' target='_blank' role="button" class="btn btn-block btn-default">101 - Harland</a></div>
  <div class="col-md-3"><a href='mailto:fatimatelino@yahoo.com.br' target='_blank' role="button" class="btn btn-block btn-default">102 - Maria</a></div>
  <div class="col-md-3"><a href='mailto:zeliagoes@yahoo.com.br' target='_blank' role="button" class="btn btn-block btn-default">302 - Zélia</a></div>
  <div class="col-md-3"><a href='mailto:rilvalopes@hotmail.com' target='_blank' role="button" class="btn btn-block btn-default">401 - Rilva</a></div>
  </div>
  <div class="row">
  <div class="col-md-3"><a href='mailto:furtado2@uol.com.br' target='_blank' role="button" class="btn btn-block btn-default">402 - Fernando</a></div>
  <div class="col-md-3"><a href='mailto:voliachaves@hotmail.com' target='_blank' role="button" class="btn btn-block btn-default">501 - Volia</a></div>
  <div class="col-md-3"><a href='mailto:hildebrandoalbertins@globo.com' target='_blank' role="button" class="btn btn-block btn-default">502 - Hildebrando</a></div>
  <div class="col-md-3"><a href='mailto:eugenio.pacelli@bol.com.br' target='_blank' role="button" class="btn btn-block btn-default">602 - Eugênio</a></div>
  </div>
  <div class="row">
  <div class="col-md-3"><a href='mailto:jloudias@bol.com.br' target='_blank' role="button" class="btn btn-block btn-default">701 - Jorge</a></div>
  <div class="col-md-3"><a href='mailto:loubart@terra.com.br' target='_blank' role="button" class="btn btn-block btn-default">801 - Maria</a></div>
  <div class="col-md-3"><a href='mailto:edmiralmeida@yahoo.com.br' target='_blank' role="button" class="btn btn-block btn-default">802 - Edmir</a></div>
  <div class="col-md-3"><a href='mailto:nouzinhoadv@hotmail.com' target='_blank' role="button" class="btn btn-block btn-default">901 - Manoel</a></div>
  </div>
  <div class="row">
  <div class="col-md-3"><a href='mailto:mgguimaraes01@uol.com.br' target='_blank' role="button" class="btn btn-block btn-default">902 - Yoshico</a></div>
  <div class="col-md-3"><a href='mailto:sineide@terra.com.br' target='_blank' role="button" class="btn btn-block btn-default">1001 - Sineide</a></div>
  <div class="col-md-3"><a href='mailto:harlanomachado@yahoo.com.br' target='_blank' role="button" class="btn btn-block btn-default">1002 - Harlano</a></div>
  <div class="col-md-3"><a href='mailto:fdeplagne5@hotmail.com' target='_blank' role="button" class="btn btn-block btn-default">1101 - François</a></div>
  </div>
  <div class="row">
  <div class="col-md-3"><a href='mailto:fernandalucena123@ig.com.br' target='_blank' role="button" class="btn btn-block btn-default">1102 - Fernanda</a></div>
  <div class="col-md-3"><a href='mailto:lautonio@uol.com.br' target='_blank' role="button" class="btn btn-block btn-default">1301 - Lautonio</a></div>
  <div class="col-md-3"><a href='mailto:kleber@toscanodebrito.com.br' target='_blank' role="button" class="btn btn-block btn-default">1302 - Kleber</a></div>
  </div>
      </div>
  
       <!-- Begin footer.inc -->
      <footer class="footer">
        <div class="container">
        <!-- 
           Temporariamente desabilitado 
        <div class="row">
        
          <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nemo non vero sint voluptas, nulla libero eligendi possimus deleniti quo saepe error, provident nostrum dolorum, id ipsam, quisquam praesentium pariatur.
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.114463832188!2d-34.827858600000035!3d-7.112731899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd23606ca353%3A0xfcba3e76b328c985!2sR.+Isidro+Gomes%2C+435+-+Tamba%C3%BA%2C+Jo%C3%A3o+Pessoa+-+PB%2C+58039-160!5e0!3m2!1spt-BR!2sbr!4v1444134267159" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div> 
  
        -->
          <p class="text-muted text-center">&copy;&nbsp;2015 - &nbsp;<a href="mailto:jloudias@bol.com.br">Jorge Loureiro Dias</a> </p>
         </div>     
      </footer>
  
  
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
  
      <script src="js/bootstrap.js"></script>
      <script src="js/bootstrap-datepicker.js" ></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
      <script src="js/validator.min.js"></script>
  
    </body>
  </html>