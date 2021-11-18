<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador II</title>
    <link rel="stylesheet" href="css/style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css"
    />
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
</head>

<body>
<div class="navigation-wrap start-header start-style">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="#" target="_blank"
                    ><img src='img/iconchat.jpg' alt="BotUtp"/></a>

                  <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                  >
                    <ul class="navbar-nav ml-auto py-4 py-md-0">
                     
                      <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="#">Unete</a>
                      </li>

                      <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="#">Inicia sesion</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>


  
       
            <div class="chatbox">
           

                    <div class="header">
                        <h4> <img src='img/perfil.jpg' class='imgRedonda'/> Alicia</h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola! soy Alicia, Estoy para ayudarte con tu consulta de compras</p>
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Consulta" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

<!--             <input type=button class="creador" value="Creadores" onClick="mi_alerta()"> -->
        </div>
  
    
    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("Tutoriales"+
               "\n"+
               "\nCaleb & Mr. Luna");
        }
        </SCRIPT>
        
</body>

</html>