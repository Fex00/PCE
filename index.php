<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>ITChatbot</title>

    <!-- Favicon  -->
    <link rel="icon" href="images/logoITChatbot.png">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <style>
        .image-container img {
            max-width: 100%;
            height: auto;
        }
        @media (min-width: 992px) {
            .image-container img {
                max-width: 50%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .custom-margin {
                margin-right: 300px;
            }
        }
        .card {
            border-width: 10px;
            border-color: black;
        }
    </style>
</head>
<body>
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation" style="background-color:black;">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/chatbot.png" alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Elma</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" style="background-color:black; margin-top:20px">
 
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#header">Início</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#qrCode">ID4Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#parceria">Parceria</a>
                    </li>
                </ul>
        
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="h1-large">Nova Forma de Comunicar<br></h1>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="button-container">
                        <br><br><br>
                        <a class="btn-solid-lg page-scroll" href="#roboTwilio">Descobrir</a>
                        <a class="btn-outline-lg page-scroll" href="#contact">Contacto</a>
                    </div> <!-- end of button-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div id="roboTwilio" ></div>
    </header> <!-- end of header -->
    <!-- end of header -->
 

    <div id="projects" class="text-lg-center" style=" padding-bottom: 7%; padding-top: 5%; background-color: rgb(243, 243, 243) ">
        <div class="container"> 
            <img class="img-fluid" src="images/goals.png" alt="alternative" style="width:50rem;">
        </div>
    </div>



     <!-- Process -->
     <div class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">A Forma como nós Trabalhamos</h2>
                    <hr class="hr-heading">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-container">
                        <div class="step">WhatsApp</div>
                        <i class="fas fa-chevron-right"></i>
                        <div class="step">Twilio</div>
                        <i class="fas fa-chevron-right"></i>
                        <div class="step">ID4Service</div>
                    </div> <!-- end of step-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div id="qrCode" ></div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of process -->


    <!-- Project 3 -->
    <div class="basic-4 " style="background-color:#f7f9fd">
        <div class="container custom-margin">
            <div class="row">
                <div class="col-lg-7 col-xl-5">
                    <div class="text-container d-flex flex-column justify-content-center align-items-center">
                        <br><br><br><br><br>
                        <h5 class="mb-4">Fácil de Usar - Fácil de Explorar</h5>            
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <div class="flex-grow-1" >
                                    <br>
                                    <p><strong>1º Passo - </strong> Fazer Scan / Clicar</p>
                                    <span><strong>2º Passo - </strong> Mande a Mensagem </span><br>
                                    <p>&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;( join later-could ) </p>
                                    <p><strong>3º Passo - </strong> Mande a sua Mensagem </p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7 col-md-6" >
                    <div class="image-container" >
                    <a href="http://wa.me/+14155238886?text=join%20later-could">
                        <img class="img-fluid" src="images/QRCode.png" alt="alternative" style="background-color:white">
                    </a>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of project 3 -->

    <!-- About -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Dados Estatisticos</h2>
                    <hr class="hr-heading">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
        
                <div class="">
                
                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="7568" data-purecounter-duration="5" class="purecounter">1</div>
                            <div class="counter-info">Utilizadores</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="985" data-purecounter-duration="3" class="purecounter">1</div>
                            <div class="counter-info">Problemas Resolvidos</div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="519" data-purecounter-duration="2" class="purecounter">1</div>
                            <div class="counter-info">Boas avaliações
                            </div>
                        </div> <!-- end of counter-cell -->
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="103" data-purecounter-duration="1" class="purecounter">1</div>
                            <div class="counter-info">Casos de Estudo</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->




   


    <!-- Services -->
    <div id="services" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Vantagens da adesão</h2>
                    <p class="p-heading">O portal do Chatbot é uma ferramenta de base tecnológica com uma área publica que permite o acesso a diversas funcionalidades</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card first">
                        <div class="card-icon">
                            <span class="fas fa-rocket green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Maior eficiência no Atendimento</h4>
                            <div class="card-text">Podemos responder a um grande número de consultas dos clientes de maneira rápida e eficiente. Isso libera a equipe de atendimento ao cliente para lidar com tarefas mais complexas, melhorando a experiência geral do cliente.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card second">
                        <div class="card-icon">
                            <span class="far fa-clock green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Disponibilidade 24/7</h4>
                            <div class="card-text">Estaremos disponíveis 24 horas por dia, 7 dias por semana para atender às necessidades dos clientes. Isso permite que sua empresa atenda às necessidades dos clientes em qualquer horário, sem comprometer a qualidade do atendimento.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card third">
                        <div class="card-icon">
                            <span class="far"><i class="fa-regular fa-user"></i></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Melhora da satisfação do cliente</h4>
                            <div class="card-text">Os clientes podem receber respostas imediatas às suas perguntas, sem ter que esperar em filas de atendimento. Isso pode melhorar significativamente a satisfação do cliente e aumentar a lealdade à marca.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    
                    <div class="card first">
                        <div class="card-icon">
                            <span class="fas"><i class="fa-solid fa-money-bill-wave"></i></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Redução de custos</h4>
                            <div class="card-text">Reduziremos os custos associados ao atendimento ao cliente. Chatbots podem lidar com consultas comuns, eliminando a necessidade de contratar pessoal adicional para lidar com essas tarefas.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card second">
                        <div class="card-icon">
                            <span class="fas fa-comments green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Chat personalizados</h4>
                            <div class="card-text">Chats personalizados para atender às necessidades específicas da sua empresa. Eles podem ser programados para responder a perguntas comuns e fornecer informações relevantes com base nas necessidades do cliente.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card third">
                        <div class="card-icon">
                            <span class="far fa-chart-bar green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Análise de dados</h4>
                            <div class="card-text">Poderemos armazenar os seus dados, permitindo que a empresa obtenha insights valiosos sobre o comportamento do cliente. Esses insights podem ser usados para melhorar a experiência geral do cliente.</div>
                            <div id="contact" ></div>
                        </div>
                    </div>
                    <!-- end of card -->
                </div> <!-- end of col -->
            
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    <!-- Contact -->
    <div class="form-1">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Deixa aqui as suas Dúvidas</h2>   
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> Av. dos Descobrimentos, 333 4400-103 Santa Marinha V. N. Gaia</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">+351 91 301 96 34</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@site.com">geral@itchatbot.pt</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->

    <!-- Projeto -->
    <div id="parceria" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Envolvimento no Projeto</h2>
                    <p class="p-heading">Parceria entre ISPGAYA e ITGest</div>
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Card -->
                        <div class="card first rounded border border-dark">
                            <img src="images/user.jpg" alt="Orientador Externo" class="card-img-top">
                            <br><br><br>
                            <div class="card-body">
                                <h4 class="card-title text-center">Orientador Interno</h4>
                                <div class="card-text text-center"><strong>Jorge Simões</strong></div>
                                <div class="card-text text-center">Ispgaya</div>
                            </div>
                        </div>

                        <!-- end of card -->
                        <!-- Card -->
                        <div class="card second rounded border border-dark">
                            <img src="images/user.jpg" alt="Orientador Externo" class="card-img-top">
                            <br><br><br>
                            <div class="card-body">
                                <h4 class="card-title text-center">Estagiário</h4>
                                <div class="card-text text-center"><strong>Filipe Sousa</strong></div>
                                <br>

                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card third rounded border border-dark">
                            <img src="images/user.jpg" alt="Orientador Externo" class="card-img-top">
                            <br><br><br>
                            <div class="card-body">
                                <h4 class="card-title text-center">Orientador Externo</h4>
                            <div class="card-text text-center"><strong>Nelson Matos</strong></div>
                            <div class="card-text text-center">ITGest</div>
                        </div>
                    </div> 
                    <!-- end of card -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    <!-- Footer -->
    <div class="footer" style="background-color:black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>Sobre ITChatbot</h6>
                        <p class="p-small">Somos Uma Empresa Pronta a Trabalhar pra si</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6></h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small"><a href="mailto:contact@site.com"><strong>geral@itchatbot.pt</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>