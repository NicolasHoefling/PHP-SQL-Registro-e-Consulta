<?php
  include ("arma.controller.php"); 
?>
<style>
      
.box {
  transition: box-shadow .3s;
  border-radius:10px;
  border: 1.5px solid #B20206;
  padding: 10px;
  box-shadow: 5px 10px rgba(8, 0, 0, 0.68);
}
.box:hover {
  box-shadow: 0 0 21px blue; 
}
.boxx:hover {
  box-shadow: 0 0 11px yellow; 
}

          /* USO DAS FONTS EM */
          h1, h2{
            font-family: "Oswald", sans-serif;
          }
          h5 {
              font-family: 'Roboto Mono', sans-serif;
          }
          /* CORES DO IMC */
          .w3-arma        {color:rgb(251, 249, 249) !important; background-color:rgba(9, 0, 77, 0.6) !important}
          .w3-colorinput  {color:rgb(255, 100, 10) !important; background-color:rgba(6, 1, 1, 0.59) !important}
          .w3-fundoinput  {background-color:#2B2B30  !important}
          .w3-borderinput {border-color:#B20206 !important}
          .w3-theme       {color:#fff !important; background-color:#262626 !important}
</style>
<title>Consultar Armas</title>
  </head>

  <body style="background-image: url(img/m4fundo1.jpg);background-repeat: no-repeat;background-size: cover  ;background-attachment: fixed;">

    <?php include("menu.php"); ?>

    <div class="container mt-5">    

        <div class="card  w3-arma w3-borderinput mb-5 boxx shadow-lg">
          <div class="card-header w3-center">
             <h3> Consulta de arma</h3>
          </div>
            
            <div class="card-body">
               <?php foreach ($armas as $arma) {
                 ?>         
                  <div class="w3-container w3-fundoinput w3-hover-border-inputt p-3 mb-4 box w3-col m-1" style="width:32%">
                    <div class="card-body">
                      <h4 class="card-title"><i class="fas fa-user-circle"></i> <?= $arma['nome'] ?></h4>
                      <h5 class="card-title"><i class="far fa-flag"></i> <?= $arma['pais'] ?></h5>
                      <h6 class="card-text"><?= $arma['weapon'] ?></h6>
                      <p class="card-text"><?= $arma['categoria'] ?> | <?= $arma['calibre'] ?></p>


                      <a href="editar_arma.php?id=<?= $arma['id'] ?>" class="mt-2 btn btn-dark btn-outline-primary "><i class="fas fa-pen"></i> Editar</a>
                      <a href="arma.controller.php?acao=excluir&id=<?= $arma['id']?>" class="mt-2 btn btn-dark btn-outline-danger "><i class="far fa-trash-alt"></i> Excluir</a>
                    </div>
                  </div>
              <?php } ?>

              

             
              
            </div>
          </div>
        </div>
  </body>
</html>