<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">



    <!-- Webpage Title -->
    <title>ITChatbot</title>

    <!-- Favicon  -->
       <!-- Favicon  -->
       <link rel="icon" href="images/logoITChatbot.png">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	  <link href="css/styles.css" rel="stylesheet">


    <style>
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      .form-container {
        
        background-color: white;
        border: 1px solid ;
        border-radius: 0px 5px 5px 0px;
        box-shadow: 10px 10px 10px ;
        padding: 20px;
        height: 400px; /* exemplo com altura de 500 pixels */
        width: 500px;
      }

      .image-container {
        background-image: url("images/bg-image_1.jpg") !important;
        background-size: cover;
        border-radius: 5px 0px 0px 5px;
 
        height: 400px;
        width: 280px;
      }

      #image{
      background-image: url('images/login-walpaper.jpg');
      background-size: cover;
      height: 100vh; /* Altura da tela inteira */
    }
    </style>
  </head>
  <body>
  <div id="image">
    <div class="container">
      <div class="image-container "></div>
      <div class="form-container login-form  align-items-center ">
        <br>
        <h5 class="text-center">Faça o Seu Login Aqui</h5>
        <br>
        <form action="project.php" method="POST">
          <div class="form-group">
            <label for="username" ></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Utilizador">
          </div>
          <div class="form-group">
            <label for="password" ></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div >
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Entrar</button>
          </div >

          <div class="form-group">
            <a href="index.php"  class="form-control btn btn-dark" style="text-decoration:none">Voltar</a>
          </div >
          
        </form>
        <div class="alert alert-danger alert-dismissible fade show" style="display:none" id="alert-username">Usuário inválido</div>
        <div class="alert alert-danger alert-dismissible fade show" style="display:none" id="alert-password">Senha inválida</div>
        <div class="alert alert-danger alert-dismissible fade show" style="display:none" id="alert-combined">Usuário e senha inválidos</div>
    </div>

    </div>

  </body>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
  
</html>