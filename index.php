<style>

        #img {
            border-radius: 10px;
        }
       
        .borda {
            border-color: #FFF;
            border-style: solid;
             border-width: 1px 0px 2px 0px;
        }
        .box {
          transition: box-shadow .3s;
          border-radius:10px;
          border: 1.5px outset #e62b15;
          box-shadow: 5px 10px rgba(8, 0, 0, 0.68);
        }
        .box:hover {
          box-shadow: 0 0 31px #E62B15; 
        }
        .boox:hover {
          box-shadow: 0 0 42px #E62B15; 
          color:rgb(255, 100, 10); 
        }
        .asiimov:hover {
          box-shadow: 0 0 32px rgb(255, 100, 10); 
        }
        
                  /* USO DAS FONTS EM */
                  h1, h2{
                      font-family: "Oswald", sans-serif;
                  }
                  h5 {
                      font-family: 'Roboto Mono', sans-serif;
                  }
                  /* CORES DO IMC */
                  .w3-arma        {color:rgb(251, 249, 249) !important; background-color:#E62B15 !important}
                  .w3-colorinput  {color:rgb(255, 100, 10) !important; background-color:#2B2B30 !important}
                  .w3-fundoinput  {background-color:#3e464f  !important}
                  .w3-borderinput {border-color:#E62B15 !important}
                  .w3-theme       {color:#fff !important; background-color:#262626 !important}
              </style>
<body class="w3-colorinput">
<!-- MENU -->
    <?php include("menu.php"); ?>
<!-- FIM MENU -->

<!-- INICIO CONTEUDO -->
    <div class="w3-row w3-arma w3-card-4 boox">
        <div class="w3-col" style="width:350px">
        <h6 class="m-3" style="text-align: justify; font-size:17px;">No Brasil, o porte de arma é regido pela Lei 10.826 de dezembro de 2003, conhecida como Estatuto do desarmamento. O Estatuto é responsável por regulamentar a posse e o porte de armas e, como o próprio nome indica, tem o intuito de coibir o uso de armamentos no território nacional. Para isso, a Lei determina que o direito de posse é restrito àqueles que puderem comprovar necessidade dela.
        Artigo 6° da Lei estabelece a proibição do porte de arma em todo o território nacional, salvo casos específicos. Exemplo de exceção são os profissionais que necessitam de armamentos para o exercício de suas funções: agentes de segurança pública, membros do Exército ou funcionários de empresas privadas de segurança.
        Em suma, o Estatuto do desarmamento estabelece que apenas um grupo restrito de pessoas pode possuir e portar armas, apenas quando o uso dessas faz-se necessário para exercício profissional ou outros casos específicos.</h6>
        </div>
        <div class="w3-rest w3-arma"><h6><img class="w3-col" src="img/ak.png"></h6></div>
    </div>
<!-- FIM CONTEUDO -->

    <div class="w3-container-fluid w3-card-4 borda asiimov">
        <div class="w3-row mt-2  w3-center">

                <div class="w3-quarter">
                     <div class="w3-container">
                        <h5>AK-47 ASIIMOV</h5>
                    </div>
                    <div class="w3-card w3-col 3    s">
                    <img src="img/akc.jpg" style="width:100%" >
                    </div>
                </div>

                <div class="w3-quarter">
                    <div class="w3-container">
                        <h5>M4A4 ASIIMOV</h5>
                    </div>
                    <div class="w3-card w3-col 3s">
                    <img src="img/m4c.jpg" style="width:100%">
                    </div>
                </div>

                <div class="w3-quarter">
                    <div class="w3-container">
                        <h5>M4A1 ASIIMOV<h5>
                    </div>
                    <div class="w3-card w3-col 3s">
                    <img src="img/m4a1c.jpg" style="width:100%;">
                    </div>
                </div>
                <div class="w3-quarter">
                    <div class="w3-container">
                        <h5>AWP ASIIMOV<h5>
                    </div>
                    <div class="w3-card w3-col 3s">
                    <img src="img/awc.jpg" style="width:100%;">
                    </div>
                </div>
                </div>

        </div>  
    </div>

<!-- INICIO TIPOS -->
    <div class="container mt-5 mb-5">
        <h2 class="">MODELOS - TIPOS DE ARMAS</h2>
        <p class="w3-text-black">click aqui para ver</p>
    </div>
            

    <div class="w3-row w3-center mt-5" >
        <a href="javascript:void(0)" onclick="openCity(event, 'ASSAULTRIFLE');">
        <div class="w3-third tablink w3-bottombar w3-padding"><h3 class="text-white">ASSAULT RIFLE</h3></div>
        </a>
        <a href="javascript:void(0)" onclick="openCity(event, 'RIFLE');">
        <div class="w3-third tablink w3-bottombar w3-padding"><h3 class="text-white">RIFLE</h3></div>
        </a>
        <a href="javascript:void(0)" onclick="openCity(event, 'PISTOLS');">
        <div class="w3-third tablink w3-bottombar w3-padding"><h3 class="text-white">PISTOLS</h3></div>
        </a>
    </div>
        <div id="ASSAULTRIFLE" class="w3-container city w3-dark-gray" style="display:none; background-image: url(img/bullet.jpg);background-repeat: no-repeat;background-size: cover  ;background-attachment: fixed;">
        <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/ak47c.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>Avtomat Kalashnikov AK-47 </h5>
                    </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/m4a4c.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>Colt M4A4</h5>
                    </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3 w3-border w3-fundoinput box">
                    <img src="img/m4a1cc.jpg" style="width: 100%;" id="img">
                    <div class="w3-container">
                        <h5>Colt M4A1 (Maverick M4A1)</h5>
                    </div>
                    </div>
                </div>
                </div>

                <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/sgc.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>SIG SG552 Commando (Krieg)</h5>
                    </div>
                    </div>
                </div>
                
                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/fnc.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>FN FAL</h5>
                    </div>
                    </div>
                </div>
                

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/augc.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>Steyr AUG (Bullpup)</h5>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div id="RIFLE" class="w3-container city" style="display:none; background-image: url(img/bullet2.jpg);background-repeat: no-repeat;background-size: cover  ;background-attachment: fixed;">
        <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/awww.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>AWP </h5>
                    </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/aw.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>AWP</h5>
                    </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3 w3-border w3-fundoinput box">
                    <img src="img/aww.jpeg" style="width: 100%;" id="img">
                    <div class="w3-container">
                        <h5>AWP</h5>
                    </div>
                    </div>
                </div>
                </div>
        </div>

        <div id="PISTOLS" class="w3-container city" style="display:none; background-image: url(img/bullet3.jpg);background-repeat: no-repeat;background-size: cover  ;background-attachment: fixed;">
        <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/uspc.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>Usp</h5>
                    </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3-border w3-fundoinput box">
                    <img src="img/glockc.jpg" style="width:100%" id="img">
                    <div class="w3-container">
                        <h5>Glock</h5>
                    </div>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-card-4 w3-col 4s w3 w3-border w3-fundoinput box">
                    <img src="img/desertc.jpg" style="width: 100%;" id="img">
                    <div class="w3-container">
                        <h5>Desert Eagle</h5>
                    </div>
                    </div>
                </div>
                </div>
        </div>
<!-- FIM DOS TIPOS -->



<!-- SCRIPT DOS TIPOS DE ARMAS -->
    <script>
        function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-border-red";
        }
    </script>
<!-- FIM  SCRIPT DOS TIPOS DE ARMAS -->
