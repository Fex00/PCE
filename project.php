
<!DOCTYPE html>
<html lang="en">
<?php 
if($_POST['username']=="chatbot" && $_POST['password']=="chatbot"){ ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Fex">

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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/i18n/Portuguese-Brasil.json"></script>
    <script>
       $(document).ready(function() {
      $('#example').DataTable( {
        "searching":    true,
        "paging":       true,
        "info":         true,
        "lengthChange": true,
        scrollY:        '60vh',
        scrollCollapse: true,
        pageLength:     25,
        language:
        {
            url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
        },
      });
    });
    $(document).ready(function() {
      $('#atas').DataTable( {
        "searching":    true,
        "paging":       true,
        "info":         true,
        "lengthChange": true,
        scrollY:        '60vh',
        scrollCollapse: true,
        pageLength:     25,
        language:
        {
            url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
        },
      });
    });
    </script>

    <style>
      td a {
        text-decoration: none;
      }
    </style>

</head>
<body>
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation" style="background-color:black">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/chatbot.png" alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Elma</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" style="background-color:black">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" style="background-color:black; margin-top:20px">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
     
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Documentação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#atas_div">Atas</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Terminar Sessão</a>
                    </li>
                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      


    <!-- About -->
    <div id="services" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Documentação</h2>
                    <p class="p-heading">Aqui poderá seguir o meu percurso ao longo da Unidade Curricular</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <br> 
            <div class="row">
                <div class="col-lg-12">

                </div> <!-- end of col -->
                <table id="example" class="display" style="width:50%">
                <thead>
                    <tr>
          
                    <th>Nome do Ficheiro</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                        <td><a target="_blank" href="Files/Relatório de Desempenho I.pdf">.pdf | Relatório de Desempenho I</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/Relatório de Desempenho II.pdf">.pdf | Relatório de Desempenho II</a></td>
                        </tr>
                        <tr>     
                        <td><a target="_blank" href="Files/Relatório de Desempenho III.pdf">.pdf | Relatório de Desempenho III</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/GANTT Sofsolutions.pdf">.pdf | GANTT Sofsolutions</a></td>
                        </tr>
                        <tr>  
                        <td><a target="_blank" href="Files/WBS Sofsolutions.pdf">.pdf | WBS Sofsolutions</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/Relatorio_Especificacao_Requisitos.pdf">.pdf | Relatorio_Especificacao_Requisitos</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/Relatório de Testes de Aceitação.pdf">.pdf | Relatório de Testes de Aceitação</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/CR_CheckList I.pdf">.pdf | CR_CheckList I</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/CR_CheckList II.pdf">.pdf | CR_CheckList II</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/Manual de Instalação (Easy to Use).pdf">.pdf | Manual de Instalação</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/SoftSolutions MSDGM.zip">.zip | Instalação da Aplicação</a></td>
                        </tr>
                        <tr> 
                        <td><a target="_blank" href="Files/Artigo Científico.pdf">.pdf | Artigo Científico</a></td>
                        </tr>
                        <tr> 
                        <td><a target="_blank" href="Files/Manual de Utilização.pdf">.pdf | Manual de Utilização</a></td>
                        </tr>
                        <tr>
                        <td><a target="_blank" href="Files/Relatório Final SoftSolutions.pdf">.pdf | Relatório Final</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- end of row -->
        </div>
    </div>
    <div id="atas_div" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Atas</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <br> 
            <div class="row">
                <div class="col-lg-12">

                </div> <!-- end of col -->
                <table id="atas" class="display" style="width:50%">
                <thead>
                    <tr>
          
                    <th>Nome do Ficheiro</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php for($i=1; $i<=15; $i++){ 
                            if($i<10) $a="0".$i;
                            else $a=$i;
                            ?>
                        <tr>
                        <td><a target="_blank" href="Files/Ata de reunião <?php echo $a; ?>.pdf">.pdf | Ata de reunião <?php echo $a; ?></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div> <!-- end of row -->
        </div>
        <!-- end of container -->
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
<?php 
} else { 
    ?>
    <script>
       window.location.href = "login.php";
    </script>
<?php } ?>