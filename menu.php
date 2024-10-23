<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>AMMU-NATION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- LINK BOOTSTRAP 5 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- W3 CSS -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- FONTS GOOGLE -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

       <!-- ICONS -->
       <script src="https://kit.fontawesome.com/8a4e2e6b4c.js" crossorigin="anonymous"></script>


    <!-- CORES INDIGO AND DEEP PURPLE CSS -->
    <style>
        /* USO DAS FONTS EM */
        h1, h2{
            font-family: "Oswald", sans-serif;
        }
        h5 {
            font-family: 'Roboto Mono', sans-serif;
        }
        /* CORES DO IMC */
        .w3-menu {color:#ffffff !important; background-color:#2B2B30 !important}

        .bordamenu {
          color:  #e63b15;
          border-color: #e63b15;
            border-style: solid;
             border-width: 0px 2px 2px 0px;
             box-shadow: 0 0 41px #E62B15; 
        }
     
        .eu {
          box-shadow: 0 0 21px #E62B15; 
           border-color: #fff;
            border-style: solid;
             border-width: 2px 2px 2px 2px;
            border-radius: 90%;
            overflow: hidden;
            height: 150px;
            width:150px;
            background: black;
        }

img {
    width: 100%;
}
        
    </style>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>
<body >

<div class="w3-fundo w3-sidebar w3-bar-block w3-card-4 w3-animate-left bg-dark bordamenu" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button" onclick="w3_close()"><i class="far fa-times-circle"></i> Fechar</button>
  <a href="index.php"                         class="w3-bar-item w3-button w3-large"><i class="fas fa-home"></i> Home</a>
  <a href="inserir_arma.php"                  class="w3-bar-item w3-button w3-large"><i class="fas fa-cash-register"></i> Registrar Armas</a>
  <a href="consultar_arma.php?acao=recuperar" class="w3-bar-item w3-button w3-large"><i class="fas fa-trash-restore"></i> Consultar Armas</a>
  <div class="eu m-5">
    <img src="img/eu.jpeg" alt="gostoso">
  </div>
        	<!-- RODAPE -->
		<footer class="container-fluid mt-1 ml-2 text-center" id="rodape" >
	    <div class="container">
	    <div class="row">
	      <div class="col-12">

	        <ul class="nav m-3 w3-xlarge">
	       	 <!-- BOTAO TG-->

		       	  <li class="nav border-light">
		       	  <a href="https://web.telegram.org/k/">

		       	  	<button type="button" class="	w-100 border border-light h-100 btn btn-outline-primary">
	                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
	 				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z">
	 				</path>
					</svg>
	              	</button>

	              	</a>	
		 		   </li>      
	 		  <!-- FIM BOTAO TG-->
	 		  <!-- BOTAO FB -->
		 		   <li class="nav border-light">
		 		  	<a href="https://www.facebook.com/campaign/landing.php?&campaign_id=1661784632&extra_1=s%7Cc%7C320269324053%7Ce%7Cfacebook%7C&placement=&creative=320269324053&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1661784632%26adgroupid%3D63686352403%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D9102273%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAjw64eJBhAGEiwABr9o2FkJbJDHozkDekXpIM6uMeoD4RsrAlJvb4G2FTJdOzBM0VwKqS6TQRoClRAQAvD_BwE">
		 		  		
	              		<button type="button" class="w-100 border border-light h-100 btn btn-outline-primary">
	                	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
	  					<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
	  				  	</path>
						</svg>
	              		</button>
	            
		 		  	</a>	
		 		   	</li>      
	 		  <!-- FIM BOTAO FB-->

	 		   <!-- BOTAO TT-->

		 		   <li class="nav border-light">
		 		  	<a href="https://twitter.com/nicohoefling">
	              	<button type="button" class="w-100 border border-light h-100 btn btn-outline-info">
	               	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
	  				<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
	  				</path>
					</svg>
	              	</button>	
	        		</a>
		 		  </li>
	 		  <!-- FIM BOTAO TT-->

	 		  <!-- BOTAO WPP-->

		          <li class="nav border-light ">
		          	<a href="https://web.whatsapp.com/">
			          	
		              	<button type="button" class="w-100 border border-light h-100 btn btn-outline-success">
		                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
		  				<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
						</svg>
		             	</button>
		            	
	            	</a>
		          </li>
	          <!-- FIM BOTAO WPP-->

	          <!-- BOTAO INSTA -->
		           </li>     
			 		  <li class="nav  border-light">
			 		  	<a id="i" href="#" target="blank">
	            	  	<button type="button" class="w-100 h-100 border border-light  btn btn-outline-danger">
	                	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
	 					 <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
						</svg>
	              		</button>
	            		</a>
			 		  </li>
	          <!-- FIM BOTAO INSTA -->

	        </ul>

	      </div>
	      <div class="col-12 text-center">
	        <h6 class="py-4 aling-self-center">
	            <p>Feito com carinho por Nícolas Hoefling de Cordova	 </p>
	         &copynicolashoefeling1@gmail.com: <a class="nav-link text-white" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl">MAIL</a></h6>
	      </div>
	    </div>
	    </div>
	    
	  </footer>
	<!-- RODAPE --> 
</div>

<div id="main">

<div class="w3-menu w3-bottombar w3-border-red bordamenu">
  <button id="openNav" class="w3-button w3-menu w3-xlarge" onclick="w3_open()">&#9776;</button>
    <div class="w3-container w3-center">
      <div class="w3-col ">
        <h1>AMMU-NATION</h1>
      </div>
    </div>
</div>


<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
